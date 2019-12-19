@extends('layout.mainlayout')
@section('content')
<!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold typewriter">HI.</h1>
            <h1 class="text-uppercase text-white font-weight-bold typewriter2">I am Casper Bosma.</h1>
            <h1 class="text-uppercase text-white font-weight-bold typewriter3">Desinger. Coder.</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Always looking for new and creative ways to build websites.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="foto_container">
      <h1 class="textaboutme">About me</h1>
        <div class="circelfoto"></div>
        </div>
    </div>
    <div class="col-sm">
             <div class="aboutme_divider"></div>
     <a class="btn btn-light btn-xl js-scroll-trigger" href="#skills">Skill set</a>
    </div>
    <div class="col-sm">
      <div class="tekstvak_aboutme"><p>Welcome to my portfolio!<br><br>
          My name is Casper and I've been studying to become a web design and developer the past few years.<br><br> My main focus is on front end but creating a website from nothing to finished product is something I'm really passionate about.<br><br>I Really enjoy making a good-looking design and then code it into a appealing website. Realizing my creation and perfecting it.</p></div>
    </div>
  </div>
</div>
  </section>

  <!-- Skills Section -->
  <section class="page-section" id="skills">
    <div class="container">
      <h2 class="text-center mt-0">Skills</h2>
      <hr class="divider my-4">
        <div class="container">
  <div class="row">
    <div class="col-sm">
      HTML
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <span class="sr-only">85% Complete</span>
      80%
  </div>
    </div>
    <div class="col-sm">
      Design
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:85%">
    <span class="sr-only">85% Complete</span>
      85%
  </div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm">
      CSS
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:85%">
    <span class="sr-only">85% Complete</span>
      85%
  </div>
    </div>
    <div class="col-sm">
      Photoshop
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:75%">
    <span class="sr-only">85% Complete</span>
      75%
  </div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm">
      PHP
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:65%">
    <span class="sr-only">85% Complete</span>
      65%
  </div>
    </div>
    <div class="col-sm">
      Illustrator
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:60%">
    <span class="sr-only">85% Complete</span>
      60%
  </div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm">
      Laravel
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    <span class="sr-only">85% Complete</span>
      70%
  </div>
    </div>
    <div class="col-sm">
      After effects
    </div>
    <div class="col-sm">
       <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    <span class="sr-only">85% Complete</span>
      50%
  </div>
    </div>
  </div> 
    <div class="container">
  <div class="row skilltextrow">
    <div class="col-sm">
      Design<br><br>
        Since I started out on the GLR in Rotterdam I've got a background in graphic design and basic knowledge of the adobe programs. I love pairing this creativity with web development to get amazing results.
    </div>
    <div class="col-sm">
      Development<br><br>
        I've always liked to actually code a website too instead of just design it. I really enjoy puzzling with the code while making a beatiful product.
    </div>
    <div class="col-sm">
      Knowledge<br><br>
        I'm best at HTML and CSS but I know my way around with PHP and I've been planning to work on my javascript skills. Always learning new things. Lately I've mostly been working on effects and animations in CSS.
    </div>
  </div>
</div>    
</div>
    </div>
  </section>

 

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
 
        <div id="portfolio" class="container portocontainer">
  <div class="row">
    <div class="col-sm">
        <div class="porto_item1 portoblok" data-hover="In this project we had to make a website with login system and several lists. Costumers were able to check products in the list. Company's were able to post products in the list and the admin had to verify company's before they were able to post. Didn't have to do anything about the front-end though." onclick="location.href='/clickets';" style="cursor: pointer;">
            </div>
    </div>
    <div class="col-sm">
      <div class="porto_item2 portoblok" data-hover2="Here I'll show you how and why I've made this website, step by step." onclick="location.href='/casperbosma';" style="cursor: pointer;">
       <h1>Portfolio</h1>
          <p>Casperbosma.com</p>
           </div>
    </div>
    <div class="col-sm">
         <div class="porto_item3 portoblok" data-hover3="Room for your project?" onclick="location.href='/#portfolio';" style="cursor: pointer;">
      
            </div>
    </div>
  </div>
</div>
      
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contact</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Interested? Send an e-mail or call me!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>06 49 12 99 50</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <a class="d-block" href="mailto:casperbosma@gmail.com">casperbosma@gmail.com</a>
        </div>
      </div>
        
    </div>
       
  </section>
@endsection
