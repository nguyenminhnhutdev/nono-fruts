@extends('layout')
@section('content')

<section class="ftco-section testimony-section">
    <div class="container">
        @foreach ($product_detail as $key => $value)


        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="{{URL::to('public/uploads/product/'.$value ->product_image)}}" class="image-popup"><img
                        src="{{URL::to('public/uploads/product/'.$value ->product_image)}}" class="img-fluid"
                        alt="Colorlib Template"></a>


            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">

                <h3><a href="#">{{$value->product_name}}</a></h3>
                <p class="price"><span>{{number_format($value -> product_price).'.000'.' VNĐ'.'/Kg'}}</span></p>
                <p><b>Miêu tả: </b> {{$value -> product_desc}}</p>

                <p><b>Tình Trạng:</b>

                    @if(($value -> product_status) >0)
                    Còn hàng
                    @else
                <p>Hết hàng</p>
                @endif

                </p>
                <p><b>Xuất xứ:</b> {{$value -> brand_name}}</p>
                <p><b>Danh mục:</b> {{$value -> category_name}}</p>
                <p><b>Số lượng:</b> </p>
                <form action="{{URL::to('/add-to-cart/'.$value->product_id)}}" method="POST">

                    <div class="input-group col-md-6 d-flex mb-3 pl-md-5 ftco-animate">
                        <span class="input-group-btn mr-2">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                <i class="ion-ios-remove"></i>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                            min="1" max="100" />

                        <input type="hidden" name="productId_hidden" value="{{$value -> product_id}}">
                        <span class="input-group-btn ml-2">
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="ion-ios-add"></i>
                            </button>
                        </span>


                    </div>
                    <button type="submit" class="btn btn-fefault ">Thêm vào giỏ hàng</button>
                    <a href="{{URL::to('/add-to-cart/'.$value->product_id)}}"
                        class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=590050075396022&autoLogAppEvents=1"
                        nonce="1Tl0EwCi"></script>

                </form>



            </div>




        </div>
    </div>
    </div>
    @endforeach

    </div>

    </div>
</section>
@endsection