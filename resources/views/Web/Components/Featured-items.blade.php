<!--====== Product Style 1 Part Start ======-->
<section class="product-wrapper pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-50">
                    <h1 class="heading-1 font-weight-700">{{ __('msg.Featured Items') }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)

                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 ">
                        <div class="product-image">

                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="assets/images/product-1/product-1.jpg" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="assets/images/product-1/product-2.jpg" alt="product">
                                </div>
                            </div>


                            <form id="add-to-fav-form-{{ $product->id }}" action="{{ route('fav.add', ['product' => $product->id]) }}" method="POST">
                                @csrf
                            </form>
                            <a class="add-wishlist" href="#" onclick="event.preventDefault(); document.getElementById('add-to-fav-form-{{ $product->id }}').submit();">
                                <i class="mdi mdi-heart{{ $product->isFavorited() ? ' text-danger' : '' }}{{ $product->isFavorited() ? '' : ' text-white' }}"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="{{ route('product-details' , ['product' => $product->id]) }}">{{ $product->name }}</a></h4>
                            {{-- <p>{{ $product->categories->name }}</p> --}}
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                {{ $product->price }}
                            </a>
                            <form action="{{ route('cart.add', $product) }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}">
                                <button type="submit">Add to Cart</button>
                            </form>
                        </div>
                        <div class="add-to-cart">

                    </div>
                </div>

                </div>
                @if ($loop->iteration % 3 == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>


             </div>
</section>
