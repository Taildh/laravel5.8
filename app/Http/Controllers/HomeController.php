<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Product;
use App\Brand;
use App\Category;
use App\User;

class HomeController extends Controller
{
  
  	public function index()
    {
        $params = [
            'title' => 'Larashop',
            'sub_title' => 'All Products Listing',
            'products' => Product::all(),
        ];

        return view('index')->with($params);
    }

    public function brands($url)
    {
        $brand = Brand::whereUrl($url)->first();

        $params = [
            'title' => $brand->title,
            'sub_title' => "Products by $brand->title",
            'products' => $brand->products, 
        ];

        return view('index')->with($params);
    }

    public function categories($url)
    {
        $category = Category::whereUrl($url)->first();

        $params = [
            'title' => $category->title,
            'sub_title' => "Products in $category->title category",
            'products' => $category->products, 
        ];

        return view('index')->with($params);
    }

    public function signUp () {
        return view('sign-up');
    }

    public function postSignUp (Request $rq) {
        $user = new User();
        // $user .= Hash::make($rq['password']);
      
        $model = $user->fill($rq->all());
        // dd($model);
        $model->save();
        return view('index')->with('successMsg','Success');
    }

    public function login () {
        return view('login');   
    }

    public function postLogin () {
        
    }

}