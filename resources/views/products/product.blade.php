 @extends('layout.layout')

 @section('title', $product->name)

 @section('content')
 <section class="uk-container">
    <div class="uk-margin-bottom uk-margin-top uk-padding-small breadcrumb">
        <div class="uk-clearfix">
            <ul class="uk-breadcrumb uk-float-left">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop.index') }}">Shop</a></li>
                <li><a href="#"><span>Product details</span></a></li>
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
<section class="uk-section uk-section-default">
    <div class="uk-container">

        <div class="uk-child-width-1-2@m" uk-grid>
            <div class="single-product-img">
                <img data-src="{{ asset('img/categories/drawings.jpg') }}" data-srcset="{{ asset('img/categories/drawings.jpg') }} 270w, {{ asset('img/categories/drawings.jpg') }} 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="{{ $product->name }}" uk-img>
            </div>
            <div class="single-product">
                <p><span class="text-bold">Fashion </span>Matcher bag</p>
                <h1 class="color-primary text-bold uk-text-capitalize">{{ $product->name }} <br> <span class="text-light">{{ $product->details }}</span></h1>
                <div class="price-tag">
                    <p class="text-bigger text-bold">{{ '$'.$product->price }}</p>
                </div>
                <div class="shipping-claim">
                    <p class="text-smaller">US: Free shipping on order above $150</p>
                </div>
                {{-- <div class="uk-alert-danger" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p class="text-smaller">Product could not be added to cart. Please try again.</p>
                </div> --}}
                <div class="buy-action">
                        <form action="{{ route('cart.store') }}" method="POST">
                            {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="quantity" value="{{ $product->quantity }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">

                                <button type="submit" class="uk-button uk-button-primary">Add to cart</button>
                        </form>
                        {{-- <form action="{{ route('cart.saveForLater', $product->id)}}" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="uk-button uk-button-link color-secondary uk-margin-left">Add to wishlist</button>
                        </form> --}}
                </div>
                <div class="testimonials uk-margin-top">
                    <h4><span class="text-bold">Product </span>Testimonials</h4>
                    <p class="text-italic text-light">I realy loved the product. It was perfect and delivered on time. These guys are real
                    <br>
                    <span class="text-smaller color-muted">- Paul Mandele</span></p>
                    <a href="#" class="color-secondary">Read all the product reviews</a>
                </div>
            </div>
        </div>

    </div>
</section>
 @include('partials.might-like')
 @endsection
