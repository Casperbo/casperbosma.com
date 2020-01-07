<!DOCTYPE html>
<html lang="en">
 <head>
      <link rel="icon" href="/public/trees.ico" type="image/x-icon"/>
     <link rel="shortcut icon" href="/public/trees.ico" type="image/x-icon"/>
   @include('layouts.partials.head')
 </head>
 <body id="page-top">
     <div class="page-container">
   <div class="content-wrap">
@include('layouts.partials.nav')
@yield('content')
@yield('main')
@include('layouts.partials.footer')
@include('layouts.partials.footer-scripts')
         </div></div>
 </body>
</html>