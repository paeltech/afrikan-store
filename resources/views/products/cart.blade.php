@extends('layout.layout')


@section('title', 'Cart')


@section('content')
</section>
    <section class="uk-container">
        <div class="uk-margin-bottom uk-margin-top uk-padding-small breadcrumb">
            <div class="uk-clearfix">
                <ul class="uk-breadcrumb uk-float-left uk-visible@s">
                <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li><span>Shopping cart</span></li>
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
                <div class="cart-messages">
                        @if (session()->has('success_message'))
                            <div class="uk-alert-success" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ session()->get('success_message') }}</p>
                            </div>
                        @endif

                        @if(count($errors) > 0)
                            <div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                </div>
            @if( Cart::instance('default')->count() > 0 )

            <h3 class="text-bold color-primary uk-margin-small-top">{{ Cart::instance('default')->count() }} item(s) in your cart.</h3>
            <div class="cart-items">
                @foreach(Cart::instance('default')->content() as $item)
                    <div class="uk-clearfix cart-item">
                        <div>
                            <img src="img/categories/bag.jpg" width="100" height="100" class="uk-float-left">

                            <div class="uk-float-left cart-desc">
                            <h3 class=" uk-text-capitalize">{{ $item->model->name }}</h3>
                                <p class="color-muted uk-text-capitalize">{{ $item->model->details }}</p>
                            </div>
                        </div>
                        <div class="uk-float-right">
                            <div class="uk-float-left uk-margin-large-left cart-actions uk-visible@s">
                                <p>
                                    <form action="{{ route('cart.saveForLater', $item->rowId)}}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="uk-button uk-button-link color-muted">Add to wishlist</button>
                                    </form>
                                </p>
                            </div>
                            <div class="uk-float-left uk-margin-large-left">
                                <form action="" class="cart-select">
                                    <select class="uk-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </form>
                            </div>
                            <div class="uk-float-left uk-margin-large-left">
                                <p class="cart-price text-bigger color-primary text-bold">${{ $item->model->price }}</p>
                            </div>
                            <div class="uk-float-right uk-margin-large-left">
                                <form action="{{ route('cart.remove', $item->rowId)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button type="submit" uk-close></button>
                                </form>
                            </div>
                    </div>
                </div>
                @endforeach

                <div class="uk-clearfix uk-margin-top uk-margin-bottom coupon-code color-secondary">
                    <div class="uk-float-left">
                        <p>Have a coupon?</p>
                    </div>
                    <form action="" class="uk-margin uk-float-right">
                        <input class="uk-input uk-form-width-medium uk-form" type="text" placeholder="Coupon code">
                        <button class="uk-button">Apply</button>
                    </form>
                </div>
                <div class="uk-clearfix">
                    <div class="uk-float-left shipping-info">
                        <p class="color-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti odit temporibus ducimus illo recusandae distinctio repudiandae quis sunt.</p>
                    </div>
                    <div class="uk-float-right totals">
                            <div class="uk-float-left uk-margin-left">
                                <p class="text-big color-primary">Subtotal</p>
                                <p class="text-big color-primary">Tax</p>
                                <p class="text-bold text-big color-primary">Total</p>
                            </div>
                            <div class="uk-margin-large-left uk-float-right uk-text-right">
                                <p class="text-big color-primary">${{ Cart::subtotal() }}</p>
                                <p class="text-big color-primary">${{ Cart::tax() }}</p>
                                <p class="text-bold text-big color-primary">${{ Cart::total() }}</p>
                            </div>
                        </div>
                </div>
                <div class="uk-margin-large-top uk-clearfix">
                    <div class="uk-float-left">
                    <a class="uk-button uk-button-default" href="{{ route('shop.index')}}">Continue shopping</a>
                    </div>
                    <div class="uk-float-right">
                        <a class="uk-button uk-button-primary" href="{{ route('checkout.index') }}">Checkout</a>
                    </div>
                </div>
                @else
                    <p>No item in your cart.</p>
                    <a class="uk-button uk-button-default" href="{{ route('shop.index')}}">Continue shopping</a>
                @endif

                {{-- Save for later --}}
                @if( Cart::instance('saveForLater')->count() > 0 )
                    <h3 class="text-bold color-primary uk-margin-large-top">{{ Cart::instance('saveForLater')->count() }} item(s) saved for later.</h3>
                    <div class="cart-items">
                        @foreach(Cart::instance('saveForLater')->content() as $item)
                            <div class="uk-clearfix cart-item">
                                <div>
                                    <img src="img/categories/bag.jpg" width="100" height="100" class="uk-float-left">

                                    <div class="uk-float-left cart-desc">
                                    <h3>{{ $item->model->name }}</h3>
                                        <p class="color-muted">{{ $item->model->details }}</p>
                                    </div>
                                </div>
                                <div class="uk-float-right">
                                    <div class="uk-float-left uk-margin-large-left cart-actions uk-visible@s">
                                        <p>
                                            <form action="{{ route('wishList.switchToCart', $item->rowId) }}" method="POST">
                                                {{ csrf_field() }}


                                                    <button type="submit" class="uk-button uk-button-link color-muted">Move to cart</button>
                                            </form>
                                        </p>
                                    </div>
                                    <div class="uk-float-left uk-margin-large-left">
                                        <form action="" class="cart-select">
                                            <select class="uk-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="uk-float-left uk-margin-large-left">
                                        <p class="cart-price text-bigger color-primary text-bold">${{ $item->model->price }}</p>
                                    </div>
                                    <div class="uk-float-right uk-margin-large-left">
                                        <form action="{{ route('wishList.remove', $item->rowId)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <button type="submit" uk-close></button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p>No item saved for later.</p>
                @endif
        </div>
    </section>
    @include('partials.might-like')
@endsection
