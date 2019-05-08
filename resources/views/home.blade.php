@extends('layout.layout')

@section('title', 'Home')

@section('content')
<section class="uk-section uk-section-default" uk-height-viewport="expand: true">
    <div class="uk-container">

        <div class="uk-grid-match uk-grid-collapse uk-child-width-1-2@m" uk-grid>
            <div>
                <h1 class="main-heading color-primary uk-margin-medium-top"><span class="color-secondary">From Africa</span>
                    <br>
                    to the world
                </h1>
                <p class="sub-heading text-light color-primary">
                    Buy quality African products
                    <br>
                    made in Africa by African entrepreneurs.
                </p>
                <p class="sub-sub-heading text-light color-muted">"EXPERIENCE AFRICA FROM YOUR WORLD."</p>
                <p uk-margin>
                <a class="uk-button uk-button-default" href="{{ route('shop.index')}}">SHOP NOW</a>
                </p>
            </div>
            <div class="uk-visible@s">
                <img data-src="img/header-img.png" width="869" height="590" alt="African philosophy" uk-img>
            </div>
        </div>

    </div>
</section>
<section class="uk-section uk-section-muted">
    <div class="uk-container">

        <div class="uk-grid-match uk-child-width-1-4@m" uk-grid>
            <div onclick="location.href='newurl.html';">
                <div class="uk-card-small uk-card-default">
                    <div class="uk-height-medium uk-flex uk-flex-center uk-flex-bottom uk-background-cover uk-light category" data-src="img/categories/fashion.png" data-srcset="img/categories/fashion.png 398w,
              img/categories/fashion@2x.png 796w" data-sizes="(min-width: 398px) 398px, 100vw" uk-img>
                        <div class="uk-card-body">
                            <h3>Fashion</h3>
                            <p>You don't have to be in Africa to look African.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card-small uk-card-default uk-card-hover category-item">
                    <div class="uk-card-media-top cart-card-img">
                        <a href="#"><img data-src="img/categories/safariboots.jpg" alt="" uk-img></a>
                    </div>
                    <div class="uk-card-body">
                        <h4 class="fashion-card-title uk-text-center"><a href="#">Footware</a></h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card-small uk-card-default uk-card-hover">
                    <div class="uk-card-media-top cart-card-img">
                        <img data-src="img/categories/cloth.jpg" alt="" uk-img>
                    </div>
                    <div class="uk-card-body">
                        <h4 class="fashion-card-title uk-text-center">Clothing</h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card-small uk-card-default uk-card-hover">
                    <div class="uk-card-media-top cart-card-img">
                        <img data-src="img/categories/bag.jpg" alt="" uk-img>
                    </div>
                    <div class="uk-card-body">
                        <h4 class="fashion-card-title uk-text-center">Accessories</h4>
                    </div>
                </div>
            </div>
        </div>

        <hr class="uk-margin-large-top uk-margin-large-bottom">


        <div class="uk-grid-match uk-child-width-1-4@m" uk-grid>
            <div>
                <div class="uk-card-small uk-card-default uk-card-hover category-item">
                    <div class="uk-card-media-top cart-card-img">
                        <a href="#">
                            <img data-src="img/categories/drawings.jpg" data-srcset="img/categories/drawings.jpg 270w, img/categories/drawings@2x.jpg 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="" uk-img>
                        </a>
                    </div>
                    <div class="uk-card-body">
                        <h4 class="arts-card-title uk-text-center"><a href="#">Drawings</a></h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card-small uk-card-default uk-card-hover">
                    <div class="uk-card-media-top cart-card-img">
                        <a href="#">
                            <img data-src="img/categories/crafts.jpg" data-srcset="img/categories/crafts.jpg 270w, img/categories/crafts@2x.jpg 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="" uk-img>
                        </a>
                    </div>
                    <div class="uk-card-body">
                        <h4 class="arts-card-title uk-text-center">Crafts</h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card-small uk-card-default uk-card-hover">
                    <div class="uk-card-media-top cart-card-img">
                        <img data-src="img/categories/paintings.jpg" alt="" uk-img>
                    </div>
                    <div class="uk-card-body">
                        <h4 class="arts-card-title uk-text-center">Paintings</h4>
                    </div>
                </div>
            </div>
            <div onclick="location.href='newurl.html';">
                <div class="uk-card-small uk-card-default">
                    <div class="uk-height-medium uk-flex uk-flex-center uk-flex-bottom uk-background-cover uk-light category" data-src="img/categories/drum.png" data-srcset="img/categories/drum.png 398w,
              img/categories/drum@2x.png 796w" data-sizes="(min-width: 398px) 398px, 100vw" uk-img>
                        <div class="uk-card-body">
                            <h3>Arts</h3>
                            <p>You don't have to be in Africa to feel African.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="uk-section uk-section-default">
    <div class="uk-container">
        <h2 class="featured-h2 uk-heading-line"><span>Featured <span class="text-light">products</span></span></h2>

        <div class="uk-grid-match uk-child-width-1-3@m uk-margin-large-top" uk-grid>
            <div>
                <div class="uk-card-small uk-card-hover featured-item">
                    <div class="uk-card-media-top cart-card-img">
                        <a href="#">
                            <img data-src="img/categories/drawings.jpg" data-srcset="img/categories/drawings.jpg 270w, img/categories/drawings@2x.jpg 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="" uk-img>
                        </a>
                    </div>
                    <div class="uk-card-body featured-pro">
                        <h4 class="featured-card-title"><a href="#">African bag</a></h4>
                        <p class="product-desc">Bag made from kitenge <span class="uk-float-right price">$40</span></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card-small uk-card-hover featured-item">
                    <div class="uk-card-media-top cart-card-img">
                        <a href="#">
                            <img data-src="img/categories/drawings.jpg" data-srcset="img/categories/drawings.jpg 270w, img/categories/drawings@2x.jpg 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="" uk-img>
                        </a>
                    </div>
                    <div class="uk-card-body featured-pro">
                        <h4 class="featured-card-title"><a href="#">African bag</a></h4>
                        <p class="product-desc">Bag made from kitenge <span class="uk-float-right price">$40</span></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card-small uk-card-hover featured-item">
                    <div class="uk-card-media-top cart-card-img">
                        <a href="#">
                            <img data-src="img/categories/drawings.jpg" data-srcset="img/categories/drawings.jpg 270w, img/categories/drawings@2x.jpg 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="" uk-img>
                        </a>
                    </div>
                    <div class="uk-card-body featured-pro">
                        <h4 class="featured-card-title"><a href="#">African bag</a></h4>
                        <p class="product-desc">Bag made from kitenge <span class="uk-float-right price">$40</span></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include('partials.subscribe')

@endsection
