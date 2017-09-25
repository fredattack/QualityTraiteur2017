<nav class="navbar navbar-default navbar-fixed-bottom" id="navBar">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">toggle Navigation</span>
            <span  class="icon-bar"></span>
            <span  class="icon-bar"></span>
            <span  class="icon-bar"></span>

        </button>
        <a class="navbar-brand" >
            <img id="NavLogo" src="image/QualityLogo.jpg">
        </a>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav  navbar-nav" id="navBarMain">
            <li><a href="{{ route('index')}}">Home</a></li>
            <li><a href="{{ route('galerie')}}">Galerie</a></li>
            <li><a href="{{ route('guestBook')}}">Livre D'or</a></li>
            <li><a href="{{ route('contact')}}">Contact</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right" id="navBarRight" >
            {{--se connecter - s'enregistrer --}}
        </ul>
    </div>

</nav>