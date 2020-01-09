@extends('dutch.layouts.portfoliolayout')
@section('content')
<!-- Masthead 
  <header class="masthead casperbosmaheader">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold typewriter5">casperbosma.com</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">How and why I created this website.</p>
        </div>
      </div>
    </div>
  </header>-->
<!-- gallery -->
<div class="masthead2 smallmasthead">
  <div class="container">
    <h1 class="text-white font-weight-bold slide-right show-on-scroll">Casperbosma.com</h1>
    <hr class="divider-portfolio my-4 slide-right show-on-scroll">
    <p class="slide-up show-on-scroll">Hoe en waarom ik deze website heb gemaakt.</p>
    <p>
      <section class="img-gallery-magnific casperbosma-gallery">
        <!--extra
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="../images/clickets2.jpg" title="10.jpg">
					<img src="../images/clickets2.jpg" alt="10.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="../images/clickets3.jpg" title="3.jpg">
					<img src="../images/clickets3.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			</div>-->
        <div class="magnific-img js-scroll show-on-scroll-once delay1">
          <a class="image-popup-vertical-fit" href="/public/images/schets.png" title="3.jpg">
            <img src="/public/images/schets.png" />
            <i class="fa fa-search-plus" aria-hidden="true"></i>
          </a>
        </div>
        <div class="magnific-img js-scroll show-on-scroll-once delay2">
          <a class="image-popup-vertical-fit" href="/public/images/uitwerking.png" title="2.jpg">
            <img src="/public/images/uitwerking.png" alt="2.jpg" />
            <i class="fa fa-search-plus" aria-hidden="true"></i>
          </a>
        </div>
        <div class="magnific-img js-scroll show-on-scroll-once delay3">
          <a class="image-popup-vertical-fit" href="/public/images/casperbosma-code.png" title="1.jpg">
            <img src="/public/images/casperbosma-code.png" alt="1.jpg" />
            <i class="fa fa-search-plus" aria-hidden="true"></i>
          </a>
        </div>
      </section>
  </div>
  <div class="clear"></div>

</div>
<!--project info-->
<div id="about" class="container clicketscontainer">
  <h2 class="slide-right show-on-scroll">Wat info over de site:</h2>
  <hr class="divider my-4 slide-right show-on-scroll is-visible">
  <p class="slide-up show-on-scroll">De belangrijkste reden waarom ik ben begonnen met het maken van deze website is omdat ik een CV en portfolio nodig had en dacht dat dit een geweldige manier was om beide te combineren. Ik heb tot nu toe echt genoten van het maken van mijn eigen website. Geeft me veel kansen om creatief te zijn en nieuwe dingen uit te proberen.</p>
  <p class="slide-up show-on-scroll">
    Ik begon met het maken van ontwerpen in photoshop van de website, dus ik had een ruw idee van wat ik wilde. Een paar variaties van het ontwerp gemaakt zodat ik kon kiezen wat ik het leukste vond.</p>
  <p class="slide-up show-on-scroll">
    Toen ik begon met het coderen van de website, bleek het een beetje anders, want ik kreeg nieuwe en betere ideeën tijdens het programmeren en wilde die toepassen. Wat ik het leukste vond, was het maken van de effecten in CSS en javascript waardoor de pagina er fantastisch uitziet.</p>
  <p class="slide-up show-on-scroll">Toen ik de basislay-out af had begon ik te werken aan een inlogsysteem met twee lijsten met verwijder- / bewerkingsfuncties die zijn gekoppeld aan een database, het heeft ook beveiliging, dus je kunt alleen je eigen info bewerken. Het heeft ook een e-mail vorm om het wat netter te maken en te laten zien dat ik dat ook kan.</p>
  <p class="slide-up show-on-scroll">Uiteindelijk heb ik erg genoten van het aanpassen van de lay-out tot deze perfect is</p>
  <p class="slide-up show-on-scroll">
    Deze pagina is gemaakt in Laravel.</p>

</div>
@endsection
