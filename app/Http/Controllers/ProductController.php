<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
use App\Models\CategoriesModel;
use DataTables;

class ProductController extends Controller
{

    public function productjson(){
        $productlist = ProductModel::all();
        return Datatables::of($productlist)
         ->addColumn('action', function ($productlist) {
                $btn = '
                <a href="admin/products/edit/'.$productlist->products_id.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct"><i class="fa fa-edit"></i>&nbspEdit</a>';
                $btn = $btn.' <a href="admin/products/delete/'.$productlist->products_id.'" data-toggle="tooltip" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i>&nbspDelete</a>';
                      return $btn;
            }
        )
        ->addIndexColumn()
        ->make(true);
    }

    public function index()
    {
        // mengambil data produk
        $productlist = ProductModel::all();
    	return view('admin.productlist',['productlist' => $productlist]);
    }

    public function add()
    {
        $categorieslist = CategoriesModel::all();
        return view('admin.productadd',['categorieslist' => $categorieslist]);
    }

    public function store()
    {
        $this->validate($request, [
            'pname' => 'required',
            'pcat' => 'required',
            'pprice' => 'required',
            'pfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        // menyimpan nama file kedalam variable namafoto
        $namaphoto = $file->getClientOriginalName();
    
        // file dir
        $tujuan_upload = 'public/img_products/';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        // insert data ke table products
        ProductModel::create([
            'categories_id' => $request->pcat,
            'products_name' => $request->pname,
            'price' => $request->pprice,
            'products_photo' => $namaphoto
        ]);

	// alihkan halaman ke halaman products
	return redirect('/admin/product');
    }

    // method untuk edit data produk
    //public function edit($id)
    //{
    //   $productlist = ProductModel::where('products_id',$id)->get(); 
        // passing data pegawai yang didapat ke view edit.blade.php
    //    return view('admin.editproduct',['productlist' => $productlist]);
    //}
}
