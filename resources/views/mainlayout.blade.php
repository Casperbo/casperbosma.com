<!DOCTYPE html>
<html lang="en">
 <head>
     <link rel="icon" href="/public/images/trees.png" type="image/x-icon"/>
     <link rel="shortcut icon" href="/public/images/trees.png" type="image/x-icon"/>
   @include('head')
 </head>
 <body id="page-top">
@include('nav')
@yield('content')
@include('footer')
@include('footer-scripts-local')
 </body>
</html>