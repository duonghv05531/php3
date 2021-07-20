<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

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
        $pro = Product::paginate(15);
        if ($key = request()->key) {
            $pro = Product::where('name', 'like', '%' . $key . '%')->paginate(10);
        }
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
    public function store(StoreRequest $request)
    {
        $file = $request->file('file_upload');
        $ext = $request->file_upload->extension();
        $img = 'img/product/' . time() . '-' . '.' . $ext;
        $file->move(public_path('img/product'), $img);
        $request->merge(['image' => $img]);
        // $pro->image = $img;

        // $pro->name = $request->name;
        // $pro->cate_id = $request->cate_id;
        // $pro->price = $request->price;
        // $pro->quantity = $request->quantity;
        // $pro->sort_desc = $request->sort_desc;
        // $pro->detail = $request->detail;
        // $pro->save();
        Product::create($request->all());
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
    public function update(UpdateRequest $request, $id)
    {
        $pro = Product::find($id);
        if ($request->has('file_upload')) {
            $file = $request->file('file_upload');
            $ext = $request->file_upload->extension();
            $img = 'img/product/' . time() . '-' . '.' . $ext;
            $file->move(public_path('img/product'), $img);
            $request->merge(['image' => $img]);
        } else {
            $img = $request->image;
            $request->merge(['image' => $img]);
        }
        // $pro->image = $img;
        // $pro->name = $request->name;
        // $pro->cate_id = $request->cate_id;
        // $pro->price = $request->price;
        // $pro->quantity = $request->quantity;
        // $pro->sort_desc = $request->sort_desc;
        // $pro->detail = $request->detail;
        // $pro->save();
        $pro->update($request->all());
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
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->route('product.index')->with('msc', 'Xóa thành công');
    }
}
