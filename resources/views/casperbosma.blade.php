@extends('layouts.portfoliolayout')
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
    <p class="slide-up show-on-scroll">How and why I created this website.</p>
		<p><section class="img-gallery-magnific casperbosma-gallery">
    <!--extra
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="../images/clickets1.jpg" title="9.jpg">
					<img src="../images/clickets1.jpg" alt="9.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
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
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="/public/images/design.jpg" title="2.jpg">
					<img src="public/images/design.jpg" alt="2.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
		</section>
    </div>
		<div class="clear"></div>

</div>
<!--project info-->
<div id="about" class="container clicketscontainer">
    <h2 class="slide-right show-on-scroll">Some info about the site:</h2>
    <hr class="divider my-4 slide-right show-on-scroll is-visible">
    <p class="slide-up show-on-scroll">The main reason why I started creating this website is cause I needed a CV and portfolio and thought this was a great way of combining both. I've really enjoyed creating my own website so far. Gives me allot of opportunities to be creative and try out new things.</p><p class="slide-up show-on-scroll">
I started with making designs in photoshop of the website so I had a rough idea of what I wanted. Made a few variations of the design so I could pick what I liked best.</p><p class="slide-up show-on-scroll">
When I started coding the website things turned out a little different cause I got new and better ideas while programming and wanted to apply those. What I liked most was creating the effects in CSS that make the page look amazing.</p><p class="slide-up show-on-scroll">
    This page has been made in Laravel.</p>

</div>
@endsection
