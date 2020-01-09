 <div id="loader-wrapper">
   <h2 id="hide" class="loader-text">Aan het laden.</h2>
   <div id="loader"></div>
   <div class="loader-section section-left"></div>
   <div class="loader-section section-right"></div>
 </div>

 <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
   <div class="container">
     <a class="navbar-brand js-scroll-trigger menutext" href="/dutch/">Casper Bosma</a>
     <div class="logo"></div>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto my-2 my-lg-0">
         <li class="nav-item">
           <a class="nav-link js-scroll-trigger menutext" href="/dutch/#about">Over mij</a>
         </li>
         <li class="nav-item">
           <a class="nav-link js-scroll-trigger menutext" href="/dutch/#skills">Vaardigheden</a>
         </li>
         <li class="nav-item">
           <a class="nav-link js-scroll-trigger menutext" href="/dutch/#portfolio">Portfolio</a>
         </li>
         <li class="nav-item">
           <a class="nav-link js-scroll-trigger menutext" href="/dutch/#contact">Contact</a>
         </li>
         @guest
         <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Inloggen') }}</a>
         </li>
         @if (Route::has('register'))
         <li class="nav-item">
           <a class="nav-link" href="{{ route('register') }}">{{ __('Registreer') }}</a>
         </li>
         @endif
         @else
         <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             {{ Auth::user()->name }} <span class="caret"></span>
           </a>

           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
               {{ __('Log uit') }}
             </a>

             <a class="dropdown-item" href="/account">Account</a>


             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
             </form>
           </div>
         </li>

         @endguest

         <li class="nav-item">
           <a class="nav-link js-scroll-trigger menutext home-UK-button" href="/home"></a>
         </li>

       </ul>
     </div>
   </div>
 </nav>


 <!-- The overlay -->
 <div id="myNav" class="overlay">

   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


   <div class="overlay-content">
     <a href="/dutch/home">Home</a>
     <a href="/dutch/#about" onclick="closeNav()">About me</a>
     <a href="/dutch/#skills" onclick="closeNav()">Skills</a>
     <a href="/dutch/#portfolio" onclick="closeNav()">Portfolio</a>
     <a href="/dutch/#contact" onclick="closeNav()">Contact</a>

     @guest
     <div class="nav-item">
       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
     </div>
     @if (Route::has('register'))
     <div class="nav-item">
       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
     </div>
     @endif
     @else
     <div class="dropdown">
       <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         {{ Auth::user()->name }} <span class="caret"></span>
       </a>

       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
         </a>

         <a class="dropdown-item" href="/account">Account</a>


         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
         </form>
       </div>
     </div>

     @endguest

     <a class="nav-link js-scroll-trigger menutext home-UK-button" href="/"></a>

   </div>

 </div>

 <div class="responsivemenubutton" onclick="openNav()"></div>
