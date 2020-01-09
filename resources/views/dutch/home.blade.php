@extends('dutch.layouts.mainlayout')
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
          <p class="text-white-75 font-weight-light mb-5">Altijd op zoek naar nieuwe en creatieve manieren om websites te bouwen.</p>
          <a class="dashboard-buttons" onclick="scrollToBottom()">Kijk verder</a>
        </div>
      </div>
    </div>


  </header>
  <div class="content">
    <!-- About Section -->
    <section class="page-section bg-primary slide-up show-on-scroll" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <div class="foto_container">
              <h1 class="textaboutme slide-left show-on-scroll">Over mij</h1>
              <div class="circelfoto slide-left show-on-scroll"></div>
            </div>
          </div>
          <div class="col-sm slide-up show-on-scroll">
            <div class="aboutme_divider slide-up show-on-scroll"></div>
            <a class="btn btn-light btn-xl hideonmobile slide-up show-on-scroll" onclick="scrollToBottom2()">Vaardigheden</a>
          </div>
          <div class="col-sm">
            <div class="tekstvak_aboutme">
              <p class="slide-right show-on-scroll">Welkom in mijn portfolio!</p>
              <p class="slide-right show-on-scroll">Mijn naam is Casper en ik heb de afgelopen jaren gestudeerd om een ​​webdesigner en -ontwikkelaar te worden.</p>
              <p class="slide-right show-on-scroll">Mijn belangrijkste focus ligt op het uiterlijk, maar het creëren van een website van niets tot eindproduct is iets waar ik erg gepassioneerd over ben.</p>
              <p class="slide-right show-on-scroll"> Ik geniet er echt van om een mooi ontwerp te maken en het vervolgens te coderen tot een aantrekkelijke website. Mijn creatie realiseren en perfectioneren.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="page-section" id="skills">
      <div class="container skillcontainer">
        <h2 class="text-center mt-0 slide-up show-on-scroll">Vaardigheden</h2>
        <hr class="divider my-4 slide-right show-on-scroll">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">HTML</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar1 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                80%
              </div>
            </div>
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">Javascript</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar7 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                70%
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">CSS</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar3 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                <span class="sr-only">85% Complete</span>
                85%
              </div>
            </div>
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">Photoshop</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar4 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                75%
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">PHP</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar5 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                <span class="sr-only">85% Complete</span>
                65%
              </div>
            </div>
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">Illustrator</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar6 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                60%
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">Laravel</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar7 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                70%
              </div>
            </div>
            <div class="col-sm">
              <p class="js-scroll slide-up show-on-scroll">After effects</p>
            </div>
            <div class="col-sm">
              <div class="progress-bar bar8 show-on-scroll" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                50%
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row skilltextrow">
              <div class="col-sm slide-up show-on-scroll delay1">
                <img class="skill-icons" src="/public/images/creativity.png" alt="Creativity">
                <p>Ontwerp</p>
                <p>
                  Sinds ik begon op het Grafisch lyceum in Rotterdam heb ik een achtergrond in grafisch ontwerp en basiskennis van de Adobe-programma's. Ik ben dol op het combineren van deze creativiteit met webontwikkeling om verbluffende resultaten te krijgen.</p>
              </div>
              <div class="col-sm slide-up show-on-scroll delay2">
                <img class="skill-icons" src="/public/images/data.png" alt="Creativity">
                <p>
                  Ontwikkeling</p>
                <p>
                  Ik heb het altijd leuk gevonden om een ​​website ook daadwerkelijk te coderen in plaats van deze alleen te ontwerpen. Ik geniet echt van puzzelen met de code terwijl ik een mooi product maak.</p>
              </div>
              <div class="col-sm slide-up show-on-scroll delay3">
                <img class="skill-icons" src="/public/images/thought.png" alt="Creativity">
                <p>
                  Kennis</p>
                <p>
                  Ik ben het beste in HTML en CSS maar PHP en javascript kan ik ook. Altijd bezig met nieuwe dingen leren. De laatste tijd werk ik meestal aan effecten en animaties in CSS met een beetje javascript.</p>
              </div>
            </div>
            <div class="row">
              <a class="dashboard-buttons slide-up show-on-scroll delay1 is-visible" onclick="scrollToBottom3()">Mijn werk</a>
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
        <p class="slide-up show-on-scroll">Klik voor meer info</p>
        <p class="slide-up show-on-scroll">&#x2B07;</p>
        <div class="container portocontainer">
          <div class="row">
            <div class="col-md-4" id="flip">
              <div class="flip-container slide-left show-on-scroll">
                <div class="flipper">
                  <div class="front">
                  </div>
                  <div class="back">
                    <h2>Clickets</h2>
                    <p>Een school project.</p>
                    <p>In dit project moesten we een website maken met een login-systeem en verschillende lijsten en rollen. Ik hoefde echter niets aan het uiterlijk te doen.</p>
                    <a href="/dutch/clickets" class="btn btn-xl btn-primary">Lees verder</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" id="flip">
              <div class="flip-container slide-up show-on-scroll">
                <div class="flipper">
                  <div class="front front2">

                  </div>
                  <div class="back">
                    <h2>Casperbosma.com</h2>
                    <p>Mijn portfoliowebsite.</p>
                    <p>Ik ben begonnen met het maken van deze website omdat ik echt een nieuw portfolio en CV nodig had. Nu hou ik er gewoon van om eraan te werken en het te verbeteren.</p>
                    <a href="/dutch/casperbosma" class="btn btn-xl btn-primary">Lees verder</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" id="flip">
              <div class="flip-container slide-right show-on-scroll">
                <div class="flipper">
                  <div class="front front3">

                  </div>
                  <div class="back">
                    <h2 class="uc">Ruimte voor meer.</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <a class="btn black btn-light margin-top btn-xl hideonmobile slide-up show-on-scroll is-visible" onclick="scrollToBottom4()">Contact info</a>
          </div>
        </div>

      </section>
    </div>
    <!-- Contact Section -->
    <section id="contact" class="page-section">
      <div class="container contactcontainer margin-bot-250">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0 slide-up show-on-scroll">Contact</h2>
            <hr class="divider my-4 slide-right show-on-scroll">
            <p class="text-muted mb-5 slide-up show-on-scroll">Geïnteresseerd? Stuur een e-mail of bel me!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
            <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
            <div class="slide-left show-on-scroll">06 49 12 99 50</div>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
            <a class="d-block slide-right show-on-scroll" href="mailto:casperbosma@gmail.com">casperbosma@gmail.com</a>
          </div>
        </div>
        <a class="btn btn-primary btn-xl margingtop1em slide-up show-on-scroll" href="/contact-us">Chat nu!</a>
      </div>

    </section>
    <footer class="bg-light py-5 footerbar">
      <div class="container">
        <div class="small text-center">Casper Bosma Copyright &copy; 2019 - 2020. Alle rechten voorbehouden</div>
          <div>Icons gemaakt door <a href="https://www.flaticon.com/authors/freepik" title="freepik">freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
      </div>
    </footer>
  </div>


</div>
@endsection
