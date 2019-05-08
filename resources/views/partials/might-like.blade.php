<section class="uk-section uk-section-muted">
    <div class="uk-container">
        <h3 class="text-bold color-primary">You may also like...</h3>
        <div class="uk-grid-match uk-child-width-1-3@m uk-margin-large-top" uk-grid>
            @foreach ($mightAlsoLike as $product)
                <div>
                    <div class="uk-card-small uk-card-hover featured-item">
                        <div class="uk-card-media-top cart-card-img">
                            <a href="{{ route('shop.show', $product->slug)}}">
                                <img data-src="{{ asset('img/categories/drawings.jpg') }}" data-srcset="{{ asset('img/categories/drawings.jpg') }} 270w', {{ asset('img/categories/drawings.jpg') }} 540w" sizes="(min-width: 270px) 270px, 100vw" width="270" height="230" alt="{{ $product->name }}" uk-img>
                            </a>
                        </div>
                        <div class="uk-card-body featured-pro">
                            <h4 class="featured-card-title uk-text-capitalize"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h4>
                            <p class="product-desc uk-text-capitalize">{{ $product->details }} <span class="uk-float-right price">{{ '$'.$product->price }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
