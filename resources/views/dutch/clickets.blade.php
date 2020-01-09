@extends('dutch.layouts.portfoliolayout')
@section('content')
<!-- Masthead 
  <header class="masthead clicketsheader">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold typewriter4">Clickets.</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">A school project.</p>
        </div>
      </div>
    </div>
  </header>-->

<!-- gallery -->
<div class="masthead2 smallmasthead">
  <div class="container">
    <h2 class="text-white font-weight-bold slide-right show-on-scroll">Clickets.</h2>
    <hr class="divider-portfolio my-4 slide-right show-on-scroll is-visible">
    <p class="slide-up show-on-scroll">Een school project.</p>
    <section class="img-gallery-magnific casperbosma-gallery">


      <!--extra
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="../images/clickets4.jpg" title="4.jpg">
					<img src="../images/clickets4.jpg" alt="4.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="../images/clickets5.jpg" title="1.jpg">
					<img src="../images/clickets5.jpg" alt="1.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>-->
      <div class="magnific-img js-scroll show-on-scroll-once delay1 is-visible">
        <a class="image-popup-vertical-fit" href="/public/images/clickets2.jpg" title="3.jpg">
          <img src="/public/images/clickets2.jpg">
          <i class="fa fa-search-plus" aria-hidden="true"></i>
        </a>
      </div>
      <div class="magnific-img js-scroll show-on-scroll-once delay2 is-visible">
        <a class="image-popup-vertical-fit" href="/public/images/clickets3.jpg" title="2.jpg">
          <img src="/public/images/clickets3.jpg" alt="2.jpg">
          <i class="fa fa-search-plus" aria-hidden="true"></i>
        </a>
      </div>
      <div class="magnific-img js-scroll show-on-scroll-once delay3 is-visible">
        <a class="image-popup-vertical-fit" href="/public/images/clickets5.jpg" title="1.jpg">
          <img src="/public/images/clickets5.jpg" alt="1.jpg">
          <i class="fa fa-search-plus" aria-hidden="true"></i>
        </a>
      </div>
    </section>
  </div>
  <div class="clear"></div>

</div>
<!--project info-->
<div id="about" class="container clicketscontainer slide-up show-on-scroll">
  <h2 class="text-center mt-0 slide-up show-on-scroll">Wat info over het project:</h2>
  <hr class="divider my-4 slide-right show-on-scroll">
  <p class="slide-up show-on-scroll">Clickets was een schoolproject waarbij we verschillende lijsten met evenementen, tickets, merchandise, etc. Moesten maken. De lijsten hadden een zoekopdracht en verschillende manieren om de lijsten te sorteren. Het heeft een inlogsysteem en beveiliging. De 5 rollen die de website heeft zijn: gast, gebruiker, niet-geverifieerd bedrijf, geverifieerd bedrijf en admin.</p>
  <p class="slide-up show-on-scroll">
    Een gast kan zich registreren of de lijsten bekijken.</p>
  <p class="slide-up show-on-scroll">
    Een gebruiker lijkt meer op een klant die een account heeft, is ingelogd en kan kijken naar de producten die de bedrijven posten.</p>
  <p class="slide-up show-on-scroll">
    Een niet-geverifieerd bedrijf kan geen producten posten totdat het door een beheerder is geverifieerd.</p>
  <p class="slide-up show-on-scroll">
    Een geverifieerd bedrijf kan producten in de lijst plaatsen / bewerken / verwijderen zodat andere gebruikers deze kunnen zien.</p>
  <p class="slide-up show-on-scroll">
    Een beheerder kan alleen inloggen op het beheerdersgedeelte van de website en kan de bedrijven die proberen geverifieerd te worden, verifiëren of weigeren.</p>
  <p class="slide-up show-on-scroll">
    OPMERKING: ons werd verteld niets te doen aan front-end dit was puur een back-end project.</p>
  <p class="slide-up show-on-scroll">

    Ik heb dit project geüpload naar github, de link is hieronder geplaatst:</p>
  <a target="_blank" href="https://github.com/Casperbo/Clickets" class="slide-up show-on-scroll">https://github.com/Casperbo/Clickets</a>

</div>
@endsection
