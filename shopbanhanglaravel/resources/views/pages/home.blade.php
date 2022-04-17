@extends('layout')

@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(public/Fontend/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                        <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                        <p><a href="#" class="btn btn-primary">View Details</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(public/Fontend/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                        <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                        <p><a href="#" class="btn btn-primary">View Details</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>



</section>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Featured Products</span>
                        <h2 class="mb-4" style="color:chartreuse;">Tất cả sản phẩm</h2>
                    </div>
                </div>
            </div>
            @if(!empty($all_product) && $all_product->count())
            @foreach ($all_product as $key => $product)
            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <div class="text py-3 pb-4 px-3 text-center">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="img-prod"><img
                                    class="img-fluid"
                                    src="{{URL::to('public/Fontend/images/'.$product ->product_image)}}"
                                    alt="Colorlib Template">

                                <div class="overlay"></div>
                            </a>
                            <h3><a href="{{URL::to('/San-Pham/'.$product->product_id)}}">{{$product->product_name}}</a>
                            </h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">{{number_format($product -> product_price).'.000'.' VNĐ'}}</p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">

                                    <a href="{{ url('/add-to-cart/'.$product->product_id) }}"
                                        class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            <span class="subheading text-center">{{$all_product->links()}}</span>
            <div class="subheading"></div>


            @else
            <h2>Sản phẩm hiện đã hết hàng</h2>
            @endif


        </div>

    </div>
</section>

@endsection