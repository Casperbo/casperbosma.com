@extends('mainlayout')
@section('content')
<!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold" id="preload-waiter">HI.</h1>
            <h1 class="text-uppercase text-white font-weight-bold" id="preload-waiter2">I am Casper Bosma.</h1>
            <h1 class="text-uppercase text-white font-weight-bold" id="preload-waiter3">Desinger. Coder.</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline" id="preload-waiter4">
          <p class="text-white-75 font-weight-light mb-5">Always looking for new and creative ways to build websites.</p>
          <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container slide-right show-on-scroll">
  <div class="row">
    <div class="col-sm">
      <div class="foto_container">
      <h1 class="textaboutme">About me</h1>
        <div class="circelfoto"></div>
        </div>
    </div>
    <div class="col-sm">
             <div class="aboutme_divider"></div>
     <a class="btn btn-light btn-xl" href="#skills">Skill set</a>
    </div>
    <div class="col-sm">
        <div class="tekstvak_aboutme"><p>Welcome to my portfolio!</p>
            <p>My name is Casper and I've been studying to become a web designer and developer the past few years.</p>
            <p>My main focus is on front end but creating a website from nothing to finished product is something I'm really passionate about.</p> 
            <p> I Really enjoy making a good-looking design and then code it into a appealing website. Realizing my creation and perfecting it.</p></div></div>
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
      <p class="js-scroll show-on-scroll">HTML</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar1 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      80%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll show-on-scroll">Design</p>
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
     <p class="js-scroll show-on-scroll">CSS</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar3 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
    <span class="sr-only">85% Complete</span>
      85%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll show-on-scroll">Photoshop</p>
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
      <p class="js-scroll show-on-scroll">PHP</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar5 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
    <span class="sr-only">85% Complete</span>
      65%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll show-on-scroll">Illustrator</p>
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
      <p class="js-scroll show-on-scroll">Laravel</p>
    </div>
    <div class="col-sm">
       <div class="progress-bar bar7 show-on-scroll" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100">
      70%
  </div>
    </div>
    <div class="col-sm">
      <p class="js-scroll show-on-scroll">After effects</p>
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
    <div class="col-sm slide-up show-on-scroll">
      <p>Design<br><br>
        Since I started out on Grafisch lyceum in Rotterdam I've got a background in graphic design and basic knowledge of the adobe programs. I love pairing this creativity with web development to get amazing results.</p>
    </div>
    <div class="col-sm slide-up show-on-scroll">
       <p>
      Development<br><br>
        I've always liked to actually code a website too instead of just design it. I really enjoy puzzling with the code while making a beatiful product.</p>
    </div>
    <div class="col-sm slide-up show-on-scroll">
        <p>
      Knowledge<br><br>
      I'm best at HTML and CSS but I know my way around with PHP. Always learning new things. Lately I've mostly been working on effects and animations in CSS with a little bit of javascript.</p> 
    </div>
  </div>
</div>    
</div>
    </div>
  </section>

 

  <!-- Call to Action Section -->
  <section id="portfolio" class="page-section bg-dark text-white slide-up show-on-scroll-once">
 <h2>Portfolio</h2>
      <hr class="divider-portfolio my-4">
        <div class="container portocontainer">
  <div class="row">
    <div class="col-sm">
        <div class="porto_item1 portoblok slide-left show-on-scroll-once" data-hover="In this project we had to make a website with login system and several lists and roles. Didn't have to do anything about the front-end though." onclick="location.href='/clickets';" style="cursor: pointer;">
            </div>
    </div>
    <div class="col-sm">
      <div class="porto_item2 portoblok slide-up show-on-scroll-once" data-hover2="Here I'll show you how and why I've made this website, step by step." onclick="location.href='/casperbosma';" style="cursor: pointer;">
          <p>Casperbosma.com</p>
           </div>
    </div>
    <div class="col-sm">
         <div class="porto_item3 portoblok slide-right show-on-scroll-once" data-hover3="Room for more" onclick="location.href='/#portfolio';" style="cursor: pointer;">
      
            </div>
    </div>
  </div>
</div>
      
  </section>

  <!-- Contact Section -->
  <section class="page-section">
    <div class="container contactcontainer slide-up show-on-scroll">
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
        <div id="contact" class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <a class="d-block" href="mailto:casperbosma@gmail.com">casperbosma@gmail.com</a>
        </div>
      </div>
        
    </div>
       
  </section>
@endsection
