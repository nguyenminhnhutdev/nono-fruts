@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
                        <section class="panel">
                        <?php

                            use Illuminate\Support\Facades\Session;

                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert">',$message,'</span>';
                                    Session::put('message', null);
                                }
                            ?>
                            <header class="panel-heading">
                                cập nhật danh mục sản phẩm
                            </header>
                            <div class="panel-body">
                            @foreach ( $edit_category_product as $key =>$edit_value)

                                <div class="position-center">
                                    <form role="form" action="{{URL::to('/update-category-product/'.$edit_value -> category_id)}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên danh mục</label>
                                        <input type="text" value="{{ $edit_value ->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả danh mục</label>
                                        <textarea style="resize: none" rows="5" type="password" name="category_product_desc" class="form-control"
                                        id="exampleInputPassword1" placeholder="Mô tả danh mục"> {{$edit_value->category_desc}}
                                    </textarea>
                                    </div>


                                    <button type="submit" name="add_category_product" class="btn btn-info">cập nhật danh mục</button>
                                </form>
                                </div>
                            @endforeach
                            </div>
                        </section>

                </div>
</div>


@endsection
