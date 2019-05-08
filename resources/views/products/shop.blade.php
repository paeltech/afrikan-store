@extends('layout.layout')

@section('title', 'Shop')

@section('content')
<section class="uk-container">
    <div class="uk-margin-bottom uk-margin-top uk-padding-small breadcrumb">
        <div class="uk-clearfix">
            <ul class="uk-breadcrumb uk-float-left">
            <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop.index') }}"><span>Shop</span></a></li>
            </ul>
            <form class="uk-float-right bread-crumb-search">

                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></span>
                    <input class="uk-input" type="text">
                </div>

            </form>
        </div>
    </div>
</section>
<section class="uk-section uk-section-default" uk-height-viewport="expand: true">
    <div class="uk-container">

        <div class="uk-grid">
            <div class="uk-width-medium uk-visible@m">
                <h3 class="color-primary text-bold">By category</h3>
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-parent">
                        <a href="#">Fashion</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#">Footware</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">Arts</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#">Crafts</a></li>
                            <li><a href="#">Drawings</a></li>
                            <li><a href="#">Paintings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="uk-width-expand">
                <h5 class="uk-float-right uk-visible@m">Price: <span class="text-light">Low to high | High to low</span></h5>

                <div class="uk-grid-match uk-child-width-1-3@m uk-margin-large-top" uk-grid="parallax: 150">
                    @foreach ($products as $product)
                        <div>
                            <div class="uk-card-small uk-card-hover featured-item">
                                <div class="uk-card-media-top cart-card-img">
                                    <a href="{{ route('shop.show', $product->slug)}}">
                                        <img data-src="img/categories/drawings.jpg" data-srcset="img/categories/drawings.jpg 270w, img/categories/drawings@2x.jpg 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="{{ $product->name }}" uk-img>
                                    </a>
                                </div>
                                <div class="uk-card-body featured-pro">
                                    <h4 class="featured-card-title uk-text-capitalize"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h4>
                                    <p class="product-desc text-smaller uk-text-capitalize">{{ $product->details }} <span class="uk-float-right price">{{ '$'.$product->price }}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
