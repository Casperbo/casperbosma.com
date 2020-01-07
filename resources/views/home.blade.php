@extends('layouts.mainlayout')
@section('content')
<div class="wrapper-parallax">
<!-- Masthead -->
  <header id="large-header" class="masthead large-header">
        <canvas class="canvas" id="demo-canvas"></canvas>
        <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold" id="preload-waiter">HI.</h1>
            <h1 class="text-uppercase text-white font-weight-bold" id="preload-waiter2">I am Casper Bosma.</h1>
            <h1 class="text-uppercase text-white font-weight-bold" id="preload-waiter3">Desinger. Coder.</h1>
        </div>
        <div class="col-lg-8 align-self-baseline" id="preload-waiter4">
              <hr class="divider my-4">
          <p class="text-white-75 font-weight-light mb-5">Always looking for new and creative ways to build websites.</p>
          <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
     

  </header>
  <div class="content">
  <!-- About Section -->
  <section class="page-section bg-primary slide-up show-on-scroll" id="about">
    <div class="container">
  <div class="row">
    <div class="col-sm slide-left show-on-scroll">
      <div class="foto_container">
      <h1 class="textaboutme">About me</h1>
        <div class="circelfoto"></div>
        </div>
    </div>
    <div class="col-sm slide-up show-on-scroll">
             <div class="aboutme_divider slide-up show-on-scroll"></div>
     <a class="btn btn-light btn-xl hideonmobile slide-up show-on-scroll" href="#skills">Skill set</a>
    </div>
    <div class="col-sm">
        <div class="tekstvak_aboutme"><p class="slide-right show-on-scroll">Welcome to my portfolio!</p>
            <p class="slide-right show-on-scroll">My name is Casper and I've been studying to become a web designer and developer the past few years.</p>
            <p class="slide-right show-on-scroll">My main focus is on front end but creating a website from nothing to finished product is something I'm really passionate about.</p> 
            <p class="slide-right show-on-scroll"> I Really enjoy making a good-looking design and then code it into a appealing website. Realizing my creation and perfecting it.</p></div></div>
    </div>
  </div>
  </section>

  <!-- Skills Section -->
  <section class="page-section" id="skills">
    <div class="container skillcontainer">
      <h2 class="text-center mt-0 slide-up show-on-scroll">Skills</h2>
      <hr class="divider my-4 slide-right show-on-scroll">
        <div class="container">
  <div class="row">
    <div class="col-sm">
      <p class="js-scroll slide-up show-on-scroll">HTML</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar1 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      80%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll slide-up show-on-scroll">Design</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar2 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      85%
  </div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm">
     <p class="js-scroll slide-up show-on-scroll">CSS</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar3 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
    <span class="sr-only">85% Complete</span>
      85%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll slide-up show-on-scroll">Photoshop</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar4 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      75%
  </div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm">
      <p class="js-scroll slide-up show-on-scroll">PHP</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar5 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
    <span class="sr-only">85% Complete</span>
      65%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll slide-up show-on-scroll">Illustrator</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar6 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      60%
  </div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm">
      <p class="js-scroll slide-up show-on-scroll">Laravel</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar7 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      70%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll slide-up show-on-scroll">After effects</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar8 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      50%
  </div>
    </div>
  </div> 
    <div class="container">
  <div class="row skilltextrow">
    <div class="col-sm slide-up show-on-scroll delay1">
        <img class="skill-icons" src="/public/images/creativity.png" alt="Creativity">
        <p>Design</p><p>
        Since I started out on Grafisch lyceum in Rotterdam I've got a background in graphic design and basic knowledge of the adobe programs. I love pairing this creativity with web development to get amazing results.</p>
    </div>
    <div class="col-sm slide-up show-on-scroll delay2">
        <img class="skill-icons" src="/public/images/data.png" alt="Creativity">
       <p>
           Development</p><p>
        I've always liked to actually code a website too instead of just design it. I really enjoy puzzling with the code while making a beatiful product.</p>
    </div>
    <div class="col-sm slide-up show-on-scroll delay3">
        <img class="skill-icons" src="/public/images/thought.png" alt="Creativity">
        <p>
            Knowledge</p><p>
      I'm best at HTML and CSS but I know my way around with PHP. Always learning new things. Lately I've mostly been working on effects and animations in CSS with a little bit of javascript.</p> 
    </div>
  </div>
</div>    
</div>
    </div>
  </section>

 

  <!-- Call to Action Section -->
<div class="slide-up show-on-scroll">
  <section id="portfolio" class="page-section bg-dark text-white">
 <h2 class="slide-up show-on-scroll">Portfolio</h2>
      <hr class="divider-portfolio my-4 slide-right show-on-scroll">
      <p class="slide-up show-on-scroll">Click for more info</p>
      <p class="slide-up show-on-scroll">&#x2B07;</p>
        <div class="container portocontainer">
  <div class="row">
    <div class="col-md-4" id="flip">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                    </div>
                    <div class="back">
                        <h2>Clickets</h2>
                        <p>A school project.</p>
                        <p>In this project we had to make a website with login system and several lists and roles. Didn't have to do anything about the front-end though.</p>
                        <a href="/clickets" class="btn btn-xl btn-primary">Read more</a>
                    </div>
                </div>
               </div></div>
       <div class="col-md-4" id="flip">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front front2">
                       
                    </div>
                    <div class="back">
                        <h2>Casperbosma.com</h2>
                        <p>My portfolio website.</p>
                        <p>I started creating this website cause I really needed a new portfolio and CV. Now I just love to work on it and improve it.</p>
                        <a href="/casperbosma" class="btn btn-xl btn-primary">Read more</a>
                    </div>
                </div>
               </div></div>
       <div class="col-md-4" id="flip">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front front3">
                        
                    </div>
                    <div class="back">
                       <h2 class="uc">Room for more.</h2>  
                    </div>
                </div>
               </div></div>
  </div>
</div>
      
  </section>
</div>
  <!-- Contact Section -->
  <section class="page-section">
    <div class="container contactcontainer margin-bot-250">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0 slide-up show-on-scroll">Contact</h2>
          <hr class="divider my-4 slide-right show-on-scroll">
          <p class="text-muted mb-5 slide-up show-on-scroll">Interested? Send an e-mail or call me!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div class="slide-left show-on-scroll">06 49 12 99 50</div>
        </div>
        <div id="contact" class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <a class="d-block slide-right show-on-scroll" href="mailto:casperbosma@gmail.com">casperbosma@gmail.com</a>
        </div>
      </div>
        <a class="btn btn-primary btn-xl margingtop1em slide-up show-on-scroll" href="/contact-us">Chat now!</a>
    </div>
       
  </section>
       <footer class="bg-light py-5 footerbar">
    <div class="container">
      <div class="small text-center">Casper Bosma Copyright &copy; 2019 - 2019. All rights reserved</div>
    </div>
  </footer>
        </div> 
    
   
</div>
@endsection
