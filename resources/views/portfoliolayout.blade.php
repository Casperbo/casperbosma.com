<!DOCTYPE html>
<html lang="en">
 <head>
      <link rel="icon" href="/public/trees.ico" type="image/x-icon"/>
     <link rel="shortcut icon" href="/public/trees.ico" type="image/x-icon"/>
   @include('head')
 </head>
 <body id="page-top">
@include('nav')
@yield('content')
@include('footer')
@include('footer-scripts-local')
 </body>
</html>