@extends('layout.portfoliolayout')
@section('content')
<!-- Masthead -->
  <header class="masthead clicketsheader">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Clickets.</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">A school project.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>
<!--project info-->
<div id="about" class="container clicketscontainer">
 Clickets was a school project where we had to make several lists of events, tickets, merchandise, etc. It has a login system and security. The 5 roles the website has are: guest, user, unverified company, verified company and admin.<br><br>
    The homepage looks like this:<br>
    <div class="clicketsimage"></div><br><br>
A guest is able to register or look at the lists.<br><br>
A user is more like a costumer that has an account, is logged in and is able to look at the products that the companies post.<br><br>
A unverified company isn't able to post any products untill it has been verified by an admin.<br><br>
A verified company is able to post products in the list for other users to see.<br><br>
An admin is only able to log into the admin section of the website and is able to verify or decline the companies that are trying to get verified.<br><br>
NOTE: We were told to do nothing about to front-end this was purely a back-end project.<br><br>
I've uploaded this project to github the link is posted bellow:<br><br>
    <a target="_blank" href="https://github.com/Casperbo/Clickets">https://github.com/Casperbo/Clickets</a>

</div>
@endsection
