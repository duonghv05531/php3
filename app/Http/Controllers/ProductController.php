<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $cate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->cate = Category::all();
    }
    public function index()
    {
        $pro = Product::all();
        return view('admin/product.list', ['pro' => $pro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/product.create', ['cate' => $this->cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro = new Product;
        $file = $request->file('image');
        $img = 'img/product/' . time() . '.' . $file->getClientOriginalExtension();
        $request->image->move(public_path('img/product'), $img);
        $pro->image = $img;
        $pro->name = $request->name;
        $pro->cate_id = $request->cate_id;
        $pro->price = $request->price;
        $pro->quantity = $request->quantity;
        $pro->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Product::find($id);
        return view('admin/product.edit', ['pro' => $pro, 'cate' => $this->cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = Product::find($id);
        if ($request->file('image')) {
            $file = $request->file('image');
            // $img = 'img/product' . time() . '.' . $file->getClientOriginalExtension();
            $img = 'img/product/' . time() . '.' . $file->getClientOriginalExtension();
            $request->image->move(public_path('img/product'), $img);
        } else {
            $img = $request->image;
        }
        $pro->image = $img;
        $pro->name = $request->name;
        $pro->cate_id = $request->cate_id;
        $pro->price = $request->price;
        $pro->quantity = $request->quantity;
        $pro->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
