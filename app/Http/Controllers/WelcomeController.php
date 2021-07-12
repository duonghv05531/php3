<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public $set;
    public $service;
    public $product;

    public function __construct()
    {
        $this->set = Setting::all()->last();
        $this->service = Service::all();
        $this->product = Product::all();
    }
    public function index()
    {
        return view('welcome', ['set' => $this->set, 'service' => $this->service, 'product' => $this->product]);
    }
    public function about()
    {
        return view('about', ['set' => $this->set]);
    }
    public function service()
    {
        return view('service', ['set' => $this->set, 'service' => $this->service]);
    }
    public function product()
    {
        return view('product', ['set' => $this->set, 'product' => $this->product]);
    }
    public function contact()
    {
        return view('contact', ['set' => $this->set]);
    }
}
