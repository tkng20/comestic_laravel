<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;


class IndexController extends Controller
{
    public function home()
    {
        $banners = Banner::where(['status' => 'active', 'condi' => 'banner'])->orderBy('id', 'DESC')->limit(1)->get();
        $categories = Category::where(['is_parent' => 1, 'status' => 'active'])->orderBy('id', 'DESC')->limit(3)->get();
        // return $category_lists;
        return view('frontend.index', compact(['banners', 'categories']));
    }
    public function productCategory($slug)
    {
        $categoríe = Category::with('products')->where('slug', $slug)->first();
        // return $category;
        return view('frontend.pages.product-category', compact(['categories']));
    }
}
