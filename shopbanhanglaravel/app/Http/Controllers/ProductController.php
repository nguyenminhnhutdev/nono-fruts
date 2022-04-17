<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{
    public function add_product()
    {
        $cate_product = DB::table('tbl_category_product')->orderBy('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderBy('brand_id', 'desc')->get();


        return view('admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function all_product()
    {
        $all_product = DB::table('tbl_product')->paginate(8);
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    public function save_product(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_status;
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;

            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Thêm sản phẩm thành công');
            return Redirect::to('add-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('add-product');
    }



    public function edit_product($product_id)
    {
        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product);

        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }


    public function update_product(Request $request, $product_id)
    {
        $data = array();
        $data['product_name'] = $request->input('product_name');
        $data['product_price'] = $request->input('product_price');
        $data['product_desc'] = $request->input('product_desc');
        $data['product_content'] = $request->input('product_content');
        $data['category_id'] = $request->input('product_cate');
        $data['product_status'] = $request->input('product_status');
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 1000) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Cập nhật sản phẩm thành công');
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function delete_product($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message', 'Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-product');
    }

    //End admin page
    public function detail_product($product_id)
    {
        $cate_product = DB::table('tbl_category_product')->orderBy('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderBy('brand_id', 'desc')->get();

        $detail_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand_product', 'tbl_product.brand_id', '=', 'tbl_brand_product.brand_id')
            ->where('tbl_product.product_id', $product_id)->get();

        return view('pages.Product.Detail_product')->with('category', $cate_product)->with('brand', $brand_product)
            ->with('product_detail', $detail_product);
    }
}