import * as bootstrap from 'bootstrap';

// Script portfolio hanya jalan di halaman yang punya form kontak (/portfolio)
if (document.getElementById("contactForm")) {
  (function () {
    var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Footer year
    document.getElementById("year").textContent = new Date().getFullYear();

    // Typing effect
    var words = ["Web Developer", "Laravel Developer", "Cybersecurity Enthusiast", "Information Systems Student"];
    var el = document.getElementById("typed");
    var w = 0, c = 0, del = false;
    function type() {
      var word = words[w];
      el.textContent = word.slice(0, c);
      if (!del && c < word.length) { c++; return setTimeout(type, 80); }
      if (!del && c === word.length) { del = true; return setTimeout(type, 1500); }
      if (del && c > 0) { c--; return setTimeout(type, 40); }
      del = false; w = (w + 1) % words.length; setTimeout(type, 300);
    }
    if (reduce) { el.textContent = words[0]; } else { type(); }

    // Navbar, progress bar, active link
    var nav = document.getElementById("nav");
    var progress = document.getElementById("progress");
    var links = document.querySelectorAll(".nav-link");
    var sections = Array.prototype.map.call(links, function (l) { return document.querySelector(l.getAttribute("href")); });
    function onScroll() {
      var y = window.scrollY;
      nav.classList.toggle("scrolled", y > 40);
      var max = document.documentElement.scrollHeight - window.innerHeight;
      progress.style.width = (y / max * 100) + "%";
      var cur = -1;
      sections.forEach(function (s, i) { if (s && s.getBoundingClientRect().top <= 140) cur = i; });
      links.forEach(function (l, i) { l.classList.toggle("active", i === cur); });
    }
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    // Close mobile menu on link click
    document.querySelectorAll("#menu a").forEach(function (a) {
      a.addEventListener("click", function () {
        var m = document.getElementById("menu");
        if (m.classList.contains("show")) bootstrap.Collapse.getOrCreateInstance(m).hide();
      });
    });

    // Cursor glow
    var glow = document.getElementById("glow");
    window.addEventListener("pointermove", function (e) {
      glow.style.left = e.clientX + "px";
      glow.style.top = e.clientY + "px";
    }, { passive: true });

    // Reveal on scroll + skill bars + counters
    function countUp(node) {
      var target = +node.dataset.count, plus = node.dataset.plus ? "+" : "", n = 0;
      if (reduce) { node.textContent = target + plus; return; }
      var step = Math.max(1, Math.ceil(target / 30));
      var t = setInterval(function () {
        n += step;
        if (n >= target) { n = target; clearInterval(t); }
        node.textContent = n + (n === target ? plus : "");
      }, 45);
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (!en.isIntersecting) return;
        var t = en.target;
        t.classList.add("in");
        t.querySelectorAll(".bar-bg i").forEach(function (b) { b.style.width = b.dataset.w + "%"; });
        t.querySelectorAll("[data-count]").forEach(countUp);
        io.unobserve(t);
      });
    }, { threshold: 0.15 });
    document.querySelectorAll(".reveal").forEach(function (r) { io.observe(r); });

    // 3D tilt on project cards
    if (!reduce) {
      document.querySelectorAll(".tilt").forEach(function (card) {
        card.addEventListener("pointermove", function (e) {
          var r = card.getBoundingClientRect();
          var x = (e.clientX - r.left) / r.width - .5;
          var y = (e.clientY - r.top) / r.height - .5;
          card.style.transform = "perspective(800px) rotateY(" + (x * 10) + "deg) rotateX(" + (-y * 10) + "deg) translateY(-6px)";
        });
        card.addEventListener("pointerleave", function () { card.style.transform = ""; });
      });
    }

    // Contact form opens the visitor's email app
    document.getElementById("contactForm").addEventListener("submit", function (e) {
      e.preventDefault();
      var n = document.getElementById("name").value;
      var em = document.getElementById("email").value;
      var m = document.getElementById("msg").value;
      var body = m + "\n\nFrom: " + n + " (" + em + ")";
      window.location.href = "mailto:yashawini2207@gmail.com?subject=" +
        encodeURIComponent("Portfolio message from " + n) + "&body=" + encodeURIComponent(body);
    });
  })();
}
