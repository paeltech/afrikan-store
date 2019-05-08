
    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">

        <nav class="uk-navbar-container">
            <div class="uk-container">
                <div uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo color-primary" href="index.html">Afrikan<span class="text-light">.store</span></a>
                    </div>
                    <div class="uk-navbar-right uk-visible@m">
                        <ul class="uk-navbar-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="{{ route('shop.index')}}">Shop</a></li>
                            <li><a href="#">Stories</a></li>
                        </ul>

                        <div class="uk-navbar-item">
                            <a href="#">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: search"></span>
                            </a>
                            <a href="#">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span>
                            </a>
                            <a href="{{ route('cart.index')}}">
                                <span class="uk-icon uk-margin-small-right" uk-icon="icon: cart"></span>
                            </a>
                            @if(Cart::instance('default')->count() > 0)
                                <a href="{{ route('cart.index')}}"><span class="uk-badge text-smaller">{{ Cart::instance('default')->count() }}</span></a>
                            @endif</a>
                        </div>
                    </div>
                    <!-- Mobile nav-->
                    <!-- This is an anchor toggling the off-canvas -->
                    <a href="#mobile-nav" class="uk-navbar-toggle uk-hidden@s" uk-toggle><span class="uk-margin-small-right uk-margin-small-top uk-float-right" uk-icon="icon: menu"></span></a>

                    <!-- This is the off-canvas -->
                    <div id="mobile-nav" uk-offcanvas>
                        <div class="uk-offcanvas-bar">

                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <ul class="uk-nav uk-nav-default uk-margin-auto-vertical">
                                <li><a href="#">About</a></li>
                                <li><a href="{{ route('shop.index')}}">Shop</a></li>
                                <li><a href="#">Stories</a></li>
                                <li class="uk-nav-header"></li>
                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: search"></span> Search</a></li>
                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: user"></span> User</a></li>
                                <li><a href="{{ route('cart.index')}}"><span class="uk-margin-small-right" uk-icon="icon: cart"></span> Cart</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
