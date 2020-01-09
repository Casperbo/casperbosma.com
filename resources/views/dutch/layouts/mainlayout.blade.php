<!DOCTYPE html>
<html lang="en">
 <head>
     <link rel="icon" href="/public/images/trees.png" type="image/x-icon"/>
     <link rel="shortcut icon" href="/public/images/trees.png" type="image/x-icon"/>
   @include('layouts.partials.head')
 </head>
 <body id="page-top">
     <div class="page-container">
@include('dutch.layouts.partials.nav')
@yield('content')
@include('layouts.partials.footer-scripts-home')
         </div>
    <div id="cookie"></div>
 </body>
</html>