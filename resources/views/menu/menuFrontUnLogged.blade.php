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
            <li><a href="{{ route('magasin')}}">Notre magasin</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('guestBook')}}"></a>Livre D'or</li>
                        <li><a href="#"></a>Itinéraire</li>
                        <li><a href="{{ route('contact')}}"></a>Nous Contacter</li>
                    </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right" id="navBarRight" >
            {{--<div class="pull-left" id="ouvertureLabel"></div>--}}
            {{--se connecter - s'enregistrer --}}
        </ul>
    </div>

