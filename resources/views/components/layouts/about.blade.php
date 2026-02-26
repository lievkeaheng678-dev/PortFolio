@extends('components.layouts.index')
@section('content')
     <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Me</h2>
        <p>I’m a passionate web development student with hands-on experience in both front-end and back-end technologies. I have worked with Laravel, React, and ExpressJs. and I’m confident using MySQL and PostgresSQL Server for database management. I enjoy solving real-world problems through clean, responsive, and efficient web applications. I'm eager to learn more and contribute to a professional development team.

</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="{{asset('assets/img/work/img2.jpg')}}" class="img-fluid rounded-2xl" alt="" height="200px">
          </div>
          <div class="col-lg-8 content">
            <h2>Web Developer</h2>
            <p class="fst-italic py-3">
              I’m passionate about full-stack web development, especially using Laravel, React, and Backend with ExpressJs. I'm enjoy creating responsive, user-friendly applications and working with MySQL or PostgresSQL Server for data handling. I’m eager to learn from real projects, improve my skills, and grow as part of a development team.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Fullname:</strong> <span>Liev KeaHeng</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>21 December 2007</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+855 17682365</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Siem Reap, Cambodia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>18</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>lievkeaheng678@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Teamwork:</strong> <span>No#</span></li>
                </ul>
              </div>
              <p>
                I believe that with the right guidance and real project experience, I can contribute meaningfully while sharpening my skills for the future.
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>I got skills in both front-end and back-end development using HTML, CSS, JavaScript, React, PHP, Laravel, and ExpressJS Backend. I'm confident working with MySQL and SQL Server, and familiar with tools like VS Code, and Github. I understand core concepts like CRUD, MVC, and responsive design, and I’m eager to keep learning and building real-world projects.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Front-End: HTML, CSS, JavaScript, React</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Database: MySQL, PostgresSQL Server</span> <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>C++</span> <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Back-End: PHP, Laravel, ExpressJS(Backend)</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Tools & Others: Visual Studio, VS Code, Git, XAMPP</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Canva & Photoshop</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

  </main>
@endsection