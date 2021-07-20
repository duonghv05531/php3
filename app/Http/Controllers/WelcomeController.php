<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public $set;
    public $service;
    public $product;
    public $cate;

    public function __construct()
    {
        $this->set = Setting::all()->last();
        $this->service = Service::all();
        $this->product = Product::all();
        $this->category = Category::all();
    }
    public function index()
    {

        return view('welcome', ['set' => $this->set, 'service' => $this->service, 'product' => $this->product, 'category' => $this->category]);
    }
    public function about()
    {
        return view('about', ['set' => $this->set, 'category' => $this->category]);
    }
    public function service()
    {
        return view('service', ['set' => $this->set, 'service' => $this->service, 'category' => $this->category]);
    }
    public function product()
    {
        return view('product', ['set' => $this->set, 'product' => $this->product, 'category' => $this->category]);
    }
    public function category($id)
    {
        $pro = Product::where('cate_id', '=', $id)->get();
        return view('product', ['set' => $this->set, 'product' => $pro, 'category' => $this->category]);
    }
    public function contact()
    {
        return view('contact', ['set' => $this->set, 'category' => $this->category]);
    }
}
