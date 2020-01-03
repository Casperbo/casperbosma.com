@extends('portfoliolayout')
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
  <h1 class="text-uppercase text-white font-weight-bold">Clickets.</h1>
    <p>A school project.</p>
		<p><section class="img-gallery-magnific">
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
			</div>
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="../images/clickets6.jpg" title="2.jpg">
					<img src="../images/clickets6.jpg" alt="2.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
		</section>
    </div>
		<div class="clear"></div>

</div>
<!--project info-->
<div id="about" class="container clicketscontainer slide-up show-on-scroll">
    <h2 class="black">Some info about the project:</h2>
 <p>Clickets was a school project where we had to make several lists of events, tickets, merchandise, etc. The lists had a search and several ways of sorting the lists. It has a login system and security. The 5 roles the website has are: guest, user, unverified company, verified company and admin.</p><p>
A guest is able to register or look at the lists.</p><p>
A user is more like a costumer that has an account, is logged in and is able to look at the products that the companies post.</p><p>
A unverified company isn't able to post any products untill it has been verified by an admin.</p><p>
A verified company is able to post/edit/delete products in the list for other users to see.</p><p>
An admin is only able to log into the admin section of the website and is able to verify or decline the companies that are trying to get verified.</p><p>
NOTE: We were told to do nothing about to front-end this was purely a back-end project.</p><p>

I've uploaded this project to github the link is posted bellow:</p>
    <a target="_blank" href="https://github.com/Casperbo/Clickets">https://github.com/Casperbo/Clickets</a>

</div>
@endsection
