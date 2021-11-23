<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('id', 'DESC')->get();
        return view('backend.coupons.index', compact('coupons'));
    }
    public function couponStatus(Request $request)
    {
        if ($request->mode == "true") {
            DB::table('coupons')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('coupons')->where('id', $request->id)->update(['status' => 'inactive']);
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
        return view('backend.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'string|required',
            'value' => 'nullable|numeric',
            'is_voucher' => 'sometimes|in:1',
            'quantity' => 'nullable|numeric',
        ]);
        $data = $request->all();
        if ($request->is_voucher != 1) {
            $data['quantity'] = 0;
            $data['is_voucher'] = $request->input('is_voucher', 0);
        }
        // $data['is_voucher'] = $request->input('is_voucher', 0);
        // return $data;
        if (($request->type == 'percent' && ($data['value'] > 0 && $data['value'] < 100)) || ($request->type == 'fixed')) {
            $status = Coupon::create($data);
            if ($status) {
                return redirect()->route('coupon.index')->with('success', 'Coupon successfully added');
            } else {
                return back()->with('error', 'Error occurred while adding coupon');
            }
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
        $coupon = Coupon::find($id);
        if ($coupon) {
            return view('backend.coupons.edit', compact('coupon'));
        } else {
            return back()->with('error', 'No coupons found!!! Please create coupon');
        }
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
        $coupon = Coupon::find($id);
        if ($coupon) {
            $this->validate($request, [
                'code' => 'string|required',
                'value' => 'nullable|numeric',
                'is_voucher' => 'sometimes|in:1',
                'quantity' => 'nullable|numeric',
            ]);
            $data = $request->all();
            if ($request->is_voucher != 1) {
                $data['quantity'] = 0;
                $data['is_voucher'] = $request->input('is_voucher', 0);
            }

            $status = $coupon->fill($data)->save();
            if ($status) {
                return redirect()->route('coupon.index')->with('success', 'Coupon successfully updated');
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No banners found!!! Please create coupon');
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
        $coupon = Coupon::find($id);
        if ($coupon) {
            $status = $coupon->delete();
            if ($status) {
                return redirect()->route('coupon.index')->with('success', 'coupon successfully deleted');
            } else {
                return back()->with('error', 'No coupons found!!! Please create coupon');
            }
        } else {
            return back()->with('error', 'No coupons found!!! Please create coupon');
        }
    }
}
