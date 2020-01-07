@extends('layouts.portfoliolayout')
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
<div class="masthead2">
<div class="container">
  <h2 class="text-white font-weight-bold slide-right show-on-scroll">Clickets.</h2>
    <hr class="divider-portfolio my-4 slide-right show-on-scroll is-visible">
    <p class="slide-up show-on-scroll">A school project.</p>
		<p><section class="img-gallery-magnific">
			<div class="magnific-img js-scroll show-on-scroll-once delay1">
				<a class="image-popup-vertical-fit" href="/public/images/clickets1.jpg" title="9.jpg">
					<img src="/public/images/clickets1.jpg" alt="9.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="magnific-img js-scroll show-on-scroll-once delay2">
				<a class="image-popup-vertical-fit" href="/public/images/clickets2.jpg" title="10.jpg">
					<img src="/public/images/clickets2.jpg" alt="10.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="magnific-img js-scroll show-on-scroll-once delay3">
				<a class="image-popup-vertical-fit" href="/public/images/clickets3.jpg" title="3.jpg">
					<img src="/public/images/clickets3.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="magnific-img js-scroll show-on-scroll-once delay4">
				<a class="image-popup-vertical-fit" href="/public/images/clickets4.jpg" title="4.jpg">
					<img src="/public/images/clickets4.jpg" alt="4.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="magnific-img js-scroll show-on-scroll-once delay5">
				<a class="image-popup-vertical-fit" href="/public/images/clickets5.jpg" title="1.jpg">
					<img src="/public/images/clickets5.jpg" alt="1.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="magnific-img js-scroll show-on-scroll-once delay6">
				<a class="image-popup-vertical-fit" href="/public/images/clickets6.jpg" title="2.jpg">
					<img src="/public/images/clickets6.jpg" alt="2.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
		</section>
    </div>
		<div class="clear"></div>

</div>
<!--project info-->
<div id="about" class="container clicketscontainer slide-up show-on-scroll">
    <h2 class="text-center mt-0 slide-up show-on-scroll">Some info about the project:</h2>
    <hr class="divider my-4 slide-right show-on-scroll">
 <p class="slide-up show-on-scroll">Clickets was a school project where we had to make several lists of events, tickets, merchandise, etc. The lists had a search and several ways of sorting the lists. It has a login system and security. The 5 roles the website has are: guest, user, unverified company, verified company and admin.</p><p class="slide-up show-on-scroll">
A guest is able to register or look at the lists.</p><p class="slide-up show-on-scroll">
A user is more like a costumer that has an account, is logged in and is able to look at the products that the companies post.</p><p class="slide-up show-on-scroll">
A unverified company isn't able to post any products untill it has been verified by an admin.</p><p class="slide-up show-on-scroll">
A verified company is able to post/edit/delete products in the list for other users to see.</p><p class="slide-up show-on-scroll">
An admin is only able to log into the admin section of the website and is able to verify or decline the companies that are trying to get verified.</p><p class="slide-up show-on-scroll">
NOTE: We were told to do nothing about to front-end this was purely a back-end project.</p><p class="slide-up show-on-scroll">

I've uploaded this project to github the link is posted bellow:</p>
    <a target="_blank" href="https://github.com/Casperbo/Clickets" class="slide-up show-on-scroll">https://github.com/Casperbo/Clickets</a>

</div>
@endsection
