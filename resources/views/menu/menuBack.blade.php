
<nav class="navbar navbar-custom">
 <div class="container-fluide ">
  <div class="navbar-header">
   {{--<a class="navbar-brand" ><img id="NavLogo"--}}
                                         {{--src="image/QualityLogo.jpg"></a>--}}
  </div>
  <ul class="nav navbar-nav">

   <li><a href="{{ route('admin') }}" >Home</a></li>
      <li><a href="{{ route('admin.sandwiche.index') }}">Sandwiches</a></li>
      <li><a href="{{ route('admin.platprepare.index') }}">comptoirs</a></li>
      <li><a href="{{ route('admin.buffet.index') }}">buffets</a></li>
      {{--<li><a href="{{ route('admin.salade.index') }}">Salade</a></li>--}}
      <li><a href="{{ route('admin.photo.index') }}">Photo</a></li>

  </ul>
     <!-- Right Side Of Navbar -->

     <ul class="nav navbar-nav navbar-right" >
         <!-- Authentication Links -->
     @if (Auth::guest())
             <li><a href="{{ url('/login') }}">Login</a></li>
             <li><a href="{{ url('/register') }}">Register</a></li>
         @else
             <li class="dropdown" >
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

             <ul class="dropdown-menu" role="menu">
                 <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
             </ul>
             </li>
         @endif
         <li id="backToHome" style="background-color: #84255C"><a href="{{ route('home')}}">BackToFront</a></li>

     </ul>
 </div>
</nav>