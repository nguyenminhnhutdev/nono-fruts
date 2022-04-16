@extends('layout')

@section('content')


<section class="ftco-section testimony-section">
    <div class="container">
        @foreach ($brand_name as $key => $brand_by_name)
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="color:chartreuse; ">{{$brand_by_name -> brand_name}}</h2>
                </div>
            </div>
        </div>
        @endforeach


        <div class="container">
            <div class="row">
                @foreach ($brand_by_id as $key => $product)

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

                                    <a href="{{URL::to('/them-gio-hang/'.$product->product_id)}}"
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

                @endforeach
            </div>
        </div>

    </div>
</section>
@endsection