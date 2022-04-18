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
        <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
        </style>


        <div class="container">
            <div class="row">
                @if(!empty($brand_by_id) && $brand_by_id->count())
                @foreach ($brand_by_id as $key => $product)

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <div class="text py-3 pb-4 px-3 text-center">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="img-prod"><img
                                    class="img-fluid"
                                    src="{{URL::to('public/uploads/product/'.$product ->product_image)}}"
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
                <div>
                    {{$brand_by_id->links('partials.my-paginate')}}
                </div>
                @else

                <div class="container py-4">
                    <div class="row d-flex justify-content-center py-5">
                        <div class="col-md-4">
                            <h2 style="font-size: 22px;" class="mb-0">Sản phẩm hiện đã hết hàng</h2>
                            <span>Vui lòng chờ!!!</span>
                        </div>

                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</section>
@endsection