 <!--====== Product Style 7 Part Start ======-->
 <section class="product-wrapper pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-50">
                    <h1 class="heading-1 font-weight-700">{{ __('msg.Recent Items') }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-6">
                <div class="product-style-7 mt-30">
                    <div class="product-image">
                        <div class="product-active">
                            <div class="product-item active">
                                <img src="assets/images/product-4/product-1.jpg" alt="product">
                            </div>
                            <div class="product-item">
                                <img src="assets/images/product-4/product-2.jpg" alt="product">
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <ul class="product-meta">
                            <li>
                                <form id="add-to-fav-form-{{ $product->id }}" action="{{ route('fav.add', ['product' => $product->id]) }}" method="POST">
                                    @csrf
                                </form>
                                <a class="add-wishlist" href="#" onclick="event.preventDefault(); document.getElementById('add-to-fav-form-{{ $product->id }}').submit();">
                                    <i class="mdi mdi-heart{{ $product->isFavorited() ? ' text-danger' : '' }}{{ $product->isFavorited() ? '' : ' text-white' }}"></i>
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                        <h4 class="title"><a href="{{ route('product-details' , ['product' => $product->id]) }}">{{ $product->name }}</a></h4>

                        <span class="price">{{ $product->price }}</span>

                            <img src="assets/images/icon-svg/cart-4.svg" alt="">

                            <form action="{{ route('cart.add', $product) }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}">
                                <button  type="submit" class="main-btn primary-btn">Add to Cart</button>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>


</section>
<!--====== Product Style 7 Part Ends ======-->
