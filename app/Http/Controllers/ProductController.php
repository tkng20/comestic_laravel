<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('backend.products.index', compact('products'));
    }
    public function productStatus(Request $request)
    {
        if ($request->mode == "true") {
            DB::table('products')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('products')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => "Successfully updated status", "status" => true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'title' => 'string|required',
            'summary' => 'string|required',
            'description' => 'string|nullable',
            // 'photo1' => 'string|required',
            // 'photo2' => 'string|required',
            // 'photo3' => 'string|required',
            // 'photo4' => 'string|required',
            'stock' => "required|numeric",
            'price' => 'required|numeric',
            'cat_id' => 'nullable|exists:categories,id',
            'coupon_id' => 'nullable|exists:coupons,id',
            'brand_id' => 'nullable|exists:brands,id',
            'child_cat_id' => 'nullable|exists:categories,id',
            'status' => 'required|in:active,inactive',
            'condi' => 'required|in:default,new,hot',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->title);
        $slug_count = Product::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        // return $size;
        // return $data;
        // if ($data[''])
        //     $data['offer_price'] = $request->price - ($request->price);
        $coupon = Coupon::getCouponDiscount($data['coupon_id']);
        if ($coupon) {
            if ($coupon['type'] == 'fixed') {
                $data['offer_price'] = $request->price - $coupon['value'];
            } else {
                $data['offer_price'] = $request->price * (1 - ($coupon['value']) / 100);
            }
        } else {
            $data['offer_price'] = $request->price;
        }
        //$data['offer_price'] = $request->price - ($discount);
        $status = Product::create($data);
        if ($status) {
            return redirect()->route('product.index')->with('success', 'Product successfully added');
        } else {
            return back()->with('error', 'Error occurred while adding product');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('backend.products.view', compact(['product']));
        } else {
            return back()->with('error', 'No products found!!! Please create product');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('backend.products.edit', compact(['product']));
        } else {
            return back()->with('error', 'No product found!!! Please create product');
        }
        // $brand = Brand::get();
        // $category = Category::where('is_parent', 1)->get();
        // $coupon = Coupon::where('is_voucher', 0)->get();
        // $items = Product::where('id', $id)->get();
        // // return $items;
        // return view('backend.product.edit')->with('product', $product)
        //     ->with('brands', $brand)
        //     ->with('categories', $category)->with('items', $items)
        //     ->with('coupons', $coupon);
        // // ->with('coupons', $coupon)->with('items', $items)
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
        $product = Product::find($id);
        if ($product) {
            $this->validate($request, [
                'title' => 'string|required',
                'summary' => 'string|required',
                'description' => 'string|nullable',
                // 'photo1' => 'string|required',
                // 'photo2' => 'string|required',
                // 'photo3' => 'string|required',
                // 'photo4' => 'string|required',
                'stock' => "required|numeric",
                'price' => 'required|numeric',
                'cat_id' => 'required|exists:categories,id',
                // 'coupon_id' => 'required|exists:coupons,id',
                'brand_id' => 'nullable|exists:brands,id',
                'child_cat_id' => 'nullable|exists:categories,id',
                'status' => 'required|in:active,inactive',
                'condi' => 'required|in:default,new,hot',
            ]);
            $data = $request->all();
            $coupon = Coupon::getCouponDiscount($data['coupon_id']);
            if (count($coupon) > 0) {
                if ($coupon['type'] == 'fixed') {
                    $data['offer_price'] = $request->price - $coupon['value'];
                } else {
                    $data['offer_price'] = $request->price * (1 - ($coupon['value']) / 100);
                }
            } else {
                $data['offer_price'] = $request->price;
            }

            $status = $product->fill($data)->save();
            if ($status) {
                return redirect()->route('product.index')->with('success', 'Product successfully updated');
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No products found!!! Please create product');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $status = $product->delete();
            if ($status) {
                return redirect()->route('product.index')->with('success', 'Product successfully deleted');
            } else {
                return back()->with('error', 'No products found!!! Please create product');
            }
        } else {
            return back()->with('error', 'No products found!!! Please create product');
        }
    }
}
