<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yashawini | Portfolio</title>
  <meta name="description" content="Yashawini, Information Systems student at Telkom University. Web developer and cybersecurity enthusiast.">
  <meta name="theme-color" content="#0f172a">

  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <div id="progress"></div>
  <div id="glow"></div>

  <!-- NAVBAR -->
  <nav id="nav" class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home"><span class="logo">YW</span> Yashawini</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list fs-2"></i>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mx-auto gap-lg-3">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#stack">Tech Stack</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <a href="#contact" class="btn btn-glow btn-sm px-4">Hire Me</a>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header id="home" class="hero">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="container position-relative">
      <div class="row align-items-center g-5">
        <div class="col-lg-7 order-2 order-lg-1">
          <span class="badge-live"><i></i> Available for opportunities</span>
          <p class="hello">Hello, I'm</p>
          <h1 class="hero-name">Yashawini</h1>
          <p class="typing">&lt;<span id="typed"></span><span class="cursor">|</span>/&gt;</p>
          <p class="hero-lead">
            Information Systems student at Telkom University with a passion for building web apps.
            I work with Laravel, PHP and MySQL, and I'm diving into cybersecurity.
          </p>
          <div class="d-flex flex-wrap gap-3 mb-4">
            <a href="#contact" class="btn btn-glow btn-lg px-4">Get in Touch</a>
            <a href="#projects" class="btn btn-ghost btn-lg px-4">View Projects</a>
          </div>
          <div class="socials">
            <a href="https://github.com/yashawini2207-ai" target="_blank" rel="noopener" aria-label="GitHub"><i class="bi bi-github"></i></a>
            <!-- TODO: replace with your real LinkedIn URL -->
            <a href="https://www.linkedin.com/in/YOUR-LINKEDIN-USERNAME" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="mailto:yashawini2207@gmail.com" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
          <div class="photo-wrap">
            <div class="photo-ring"></div>
            <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="Portrait of Yashawini" class="photo">
            <div class="float-badge fb-1"><i class="bi bi-mortarboard-fill"></i> Semester 3</div>
            <div class="float-badge fb-2"><i class="bi bi-shield-lock-fill"></i> Cyber</div>
            <div class="float-badge fb-3"><i class="bi bi-code-slash"></i> Laravel</div>
          </div>
        </div>
      </div>
    </div>
    <a href="#about" class="scroll-down" aria-label="Scroll down"><span>Scroll Down</span><i class="bi bi-chevron-double-down"></i></a>
  </header>

  <main>
    <!-- ABOUT -->
    <section id="about" class="section">
      <div class="container">
        <div class="head reveal">
          <span class="tag">// ABOUT ME</span>
          <h2>Know Who I Am</h2>
        </div>
        <div class="row g-5 align-items-center">
          <div class="col-lg-7 reveal">
            <p class="big">I'm an Information Systems student at Telkom University, in my 3rd semester.</p>
            <p>
              I like building things people can actually open and use. Right now I focus on web
              development with Laravel, PHP and MySQL, and I'm learning how to make what I build secure
              from the start.
            </p>
            <p>
              I learn fast, work well in a team and keep my time organized. I also edit videos in my free time.
            </p>
            <div class="row g-3 mt-2 counters">
              <div class="col-4"><div class="stat"><b data-count="3">0</b><span>Semester</span></div></div>
              <div class="col-4"><div class="stat"><b data-count="10" data-plus="1">0</b><span>Technologies</span></div></div>
              <div class="col-4"><div class="stat"><b data-count="2" data-plus="1">0</b><span>Projects</span></div></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row g-3">
              <div class="col-6 reveal"><div class="mini h-100"><i class="bi bi-braces-asterisk"></i><h3>Web Development</h3><p>Laravel, PHP and responsive UI.</p></div></div>
              <div class="col-6 reveal d1"><div class="mini h-100"><i class="bi bi-shield-check"></i><h3>Cybersecurity</h3><p>Secure coding and web security basics.</p></div></div>
              <div class="col-6 reveal d2"><div class="mini h-100"><i class="bi bi-database"></i><h3>Database Systems</h3><p>MySQL and relational design.</p></div></div>
              <div class="col-6 reveal d3"><div class="mini h-100"><i class="bi bi-people"></i><h3>Teamwork</h3><p>Communication and time management.</p></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TECH STACK MARQUEE -->
    <section id="stack" class="section pt-0">
      <div class="container">
        <div class="head reveal">
          <span class="tag">// TECH STACK</span>
          <h2>Tools I Use</h2>
        </div>
      </div>
      <div class="marquee reveal">
        <div class="track">
          <span><i class="bi bi-filetype-php"></i> PHP</span>
          <span><i class="bi bi-lightning-charge"></i> Laravel</span>
          <span><i class="bi bi-database"></i> MySQL</span>
          <span><i class="bi bi-filetype-html"></i> HTML5</span>
          <span><i class="bi bi-filetype-css"></i> CSS3</span>
          <span><i class="bi bi-bootstrap"></i> Bootstrap</span>
          <span><i class="bi bi-filetype-js"></i> JavaScript</span>
          <span><i class="bi bi-git"></i> Git</span>
          <span><i class="bi bi-github"></i> GitHub</span>
          <span><i class="bi bi-shield-lock"></i> OWASP</span>
          <span><i class="bi bi-terminal"></i> Linux</span>
          <span><i class="bi bi-vector-pen"></i> Figma</span>
          <!-- duplicate for seamless loop -->
          <span><i class="bi bi-filetype-php"></i> PHP</span>
          <span><i class="bi bi-lightning-charge"></i> Laravel</span>
          <span><i class="bi bi-database"></i> MySQL</span>
          <span><i class="bi bi-filetype-html"></i> HTML5</span>
          <span><i class="bi bi-filetype-css"></i> CSS3</span>
          <span><i class="bi bi-bootstrap"></i> Bootstrap</span>
          <span><i class="bi bi-filetype-js"></i> JavaScript</span>
          <span><i class="bi bi-git"></i> Git</span>
          <span><i class="bi bi-github"></i> GitHub</span>
          <span><i class="bi bi-shield-lock"></i> OWASP</span>
          <span><i class="bi bi-terminal"></i> Linux</span>
          <span><i class="bi bi-vector-pen"></i> Figma</span>
        </div>
      </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="section pt-0">
      <div class="container">
        <div class="head reveal">
          <span class="tag">// SKILLS</span>
          <h2>My Expertise</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 reveal">
            <div class="panel h-100">
              <h3><i class="bi bi-window"></i> Frontend</h3>
              <div class="bar"><div class="bar-top"><span>HTML / CSS</span><em>85%</em></div><div class="bar-bg"><i data-w="85"></i></div></div>
              <div class="bar"><div class="bar-top"><span>Bootstrap</span><em>80%</em></div><div class="bar-bg"><i data-w="80"></i></div></div>
              <div class="bar"><div class="bar-top"><span>JavaScript</span><em>60%</em></div><div class="bar-bg"><i data-w="60"></i></div></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 reveal d1">
            <div class="panel h-100">
              <h3><i class="bi bi-server"></i> Backend</h3>
              <div class="bar"><div class="bar-top"><span>PHP</span><em>70%</em></div><div class="bar-bg"><i data-w="70"></i></div></div>
              <div class="bar"><div class="bar-top"><span>Laravel</span><em>65%</em></div><div class="bar-bg"><i data-w="65"></i></div></div>
              <div class="bar"><div class="bar-top"><span>REST API</span><em>55%</em></div><div class="bar-bg"><i data-w="55"></i></div></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 reveal d2">
            <div class="panel h-100">
              <h3><i class="bi bi-database"></i> Database</h3>
              <div class="bar"><div class="bar-top"><span>MySQL</span><em>65%</em></div><div class="bar-bg"><i data-w="65"></i></div></div>
              <div class="bar"><div class="bar-top"><span>Database Design</span><em>65%</em></div><div class="bar-bg"><i data-w="65"></i></div></div>
              <div class="bar"><div class="bar-top"><span>SQL Queries</span><em>70%</em></div><div class="bar-bg"><i data-w="70"></i></div></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 reveal d3">
            <div class="panel h-100">
              <h3><i class="bi bi-shield-lock"></i> Security &amp; Tools</h3>
              <div class="bar"><div class="bar-top"><span>Web Security</span><em>50%</em></div><div class="bar-bg"><i data-w="50"></i></div></div>
              <div class="bar"><div class="bar-top"><span>Git &amp; GitHub</span><em>60%</em></div><div class="bar-bg"><i data-w="60"></i></div></div>
              <div class="bar"><div class="bar-top"><span>Linux</span><em>50%</em></div><div class="bar-bg"><i data-w="50"></i></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="section pt-0">
      <div class="container">
        <div class="head reveal">
          <span class="tag">// PROJECTS</span>
          <h2>What I've Built</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 reveal">
            <article class="project tilt h-100">
              <div class="letter">B</div>
              <span class="feat">Featured</span>
              <h3>bootstrap-clone</h3>
              <p>A page rebuilt from scratch with HTML and Bootstrap to practice the grid and components.</p>
              <div class="pills"><span>HTML</span><span>Bootstrap</span></div>
              <a href="https://github.com/yashawini2207-ai" target="_blank" rel="noopener" class="more">View on GitHub <i class="bi bi-arrow-up-right"></i></a>
            </article>
          </div>
          <div class="col-md-6 col-lg-4 reveal d1">
            <article class="project tilt h-100">
              <div class="letter">P</div>
              <span class="feat">Featured</span>
              <h3>This Portfolio</h3>
              <p>My personal site with scroll animations, built with Bootstrap 5 and split into HTML, CSS and JS.</p>
              <div class="pills"><span>Bootstrap</span><span>CSS</span><span>JavaScript</span></div>
            </article>
          </div>
          <div class="col-md-12 col-lg-4 reveal d2">
            <article class="project tilt h-100 soon">
              <div class="letter">L</div>
              <span class="feat">In progress</span>
              <h3>Laravel Web App</h3>
              <p>A full app with login, role-based access and a MySQL database, built with security in mind.</p>
              <div class="pills"><span>Laravel</span><span>MySQL</span><span>Security</span></div>
            </article>
          </div>
        </div>
        <div class="text-center mt-5 reveal">
          <a href="https://github.com/yashawini2207-ai" target="_blank" rel="noopener" class="btn btn-ghost btn-lg px-4"><i class="bi bi-github me-2"></i>View More on GitHub</a>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section pt-0">
      <div class="container">
        <div class="head reveal">
          <span class="tag">// CONTACT</span>
          <h2>Get In Touch</h2>
        </div>
        <div class="row g-5">
          <div class="col-lg-5 reveal">
            <h3 class="mb-3">Let's work together</h3>
            <p class="mb-4">I'm open to collaborations, internships and new projects. Send me a message and I'll get back to you.</p>
            <ul class="list-unstyled contact-list">
              <li><i class="bi bi-envelope-fill"></i><div><small>Email</small><a href="mailto:yashawini2207@gmail.com">yashawini2207@gmail.com</a></div></li>
              <li><i class="bi bi-github"></i><div><small>GitHub</small><a href="https://github.com/yashawini2207-ai" target="_blank" rel="noopener">yashawini2207-ai</a></div></li>
              <!-- TODO: replace with your real LinkedIn URL -->
              <li><i class="bi bi-linkedin"></i><div><small>LinkedIn</small><a href="https://www.linkedin.com/in/YOUR-LINKEDIN-USERNAME" target="_blank" rel="noopener">Yashawini</a></div></li>
            </ul>
          </div>
          <div class="col-lg-7 reveal d1">
            <form id="contactForm" class="panel">
              <div class="mb-3"><label for="name" class="form-label">Name</label><input id="name" class="form-control" required placeholder="Your name"></div>
              <div class="mb-3"><label for="email" class="form-label">Email</label><input id="email" type="email" class="form-control" required placeholder="you@example.com"></div>
              <div class="mb-3"><label for="msg" class="form-label">Message</label><textarea id="msg" rows="5" class="form-control" required placeholder="Tell me about your project"></textarea></div>
              <button class="btn btn-glow btn-lg w-100" type="submit">Send Message <i class="bi bi-send ms-1"></i></button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="foot">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
      <a class="navbar-brand" href="#home"><span class="logo">YW</span> Yashawini</a>
      <span>&copy; <span id="year">2026</span> Yashawini. Built with Bootstrap 5.</span>
    </div>
  </footer>
</body>
</html>
