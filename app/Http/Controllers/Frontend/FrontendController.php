<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $feature_products = Product::where('trending', '1')->take(15)->get();
        $categories_popular = Category::where('popular', '1')->take(5)->get();
        return view('frontend.index', compact('feature_products', 'categories_popular'));
    }

    public function categories(){
        $categories = Category::where('status', '0')->get();
        return view('frontend.categories', compact('categories'));
    }

    public function viewcategory($slug){
        if(Category::where('slug', $slug)->exists()){
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '1')->get();

            return view('frontend.products.index', compact('category', 'products'));
        }else{
            return redirect('/')->with('status', "Slug dosen't Exists");
        }
    }

    public function productview($cate_slug, $prod_slug){
        if(Category::where('slug', $cate_slug)->exists()){
            if(Product::where('slug', $prod_slug)->exists()){
                $product = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.view', compact('product'));
            }else{
                return redirect('/')->with('status', "Product Slug dosen't Exists");
            }
        }else{
            return redirect('/')->with('status', "Category Slug dosen't Exists");
        }
    }
}
