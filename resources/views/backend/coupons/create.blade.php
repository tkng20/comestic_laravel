@extends('backend.layouts.master')
@section('content')
    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">PUN SHOP</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('coupon.index') }}">Coupons</a></li>
                                <li class="breadcrumb-item">Add Coupon</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!---- [ Error ] start --->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <!-- [ Error ] end -->
                <!-- [ form-element ] start -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Coupons</h5>
                        </div>
                        <div class="card-body">
                            <h5>Add Coupon</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('coupon.store') }}">
                                        {{-- {{ csrf_field() }} --}}
                                        @csrf
                                        <!--Code-->
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Code <span
                                                    class="text-danger">*</span></label>
                                            <input id="inputTitle" type="text" name="code" placeholder="Enter code"
                                                value="{{ old('code') }}" class="form-control">
                                            @error('code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Type and Value of Type-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="type" class="col-form-label">Type <span
                                                            class="text-danger">*</span></label>
                                                    <select name="type" class="form-control">
                                                        <option value="fixed"
                                                            {{ old('type') == 'fixed' ? 'selected' : '' }}>Fixed (USD)
                                                        </option>
                                                        <option value="percent"
                                                            {{ old('type') == 'percent' ? 'selected' : '' }}>Percent (%)
                                                        </option>
                                                    </select>
                                                    @error('type')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputTitle" class="col-form-label">Value <span
                                                            class="text-danger">*</span></label>
                                                    <input id="inputTitle" type="number" name="value"
                                                        placeholder="Enter coupon value" value="{{ old('value') }}"
                                                        class="form-control">
                                                    @error('value')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!--Is voucher-->
                                        <div class="form-group">
                                            <label for="status" class="col-form-label mr-3">
                                                Is Voucher :
                                                <span class="text-danger">*
                                                </span>
                                            </label>
                                            <input type="checkbox" checked id="is_voucher" name="is_voucher" value="1"
                                                data-toggle="toggle" data-on="Yes" data-onstyle="outline-success"
                                                data-off="No" data-offstyle="outline-danger" class="form-control">
                                            @error('is_voucher')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Quantity-->
                                        <div class="form-group " id="voucher_cou_div">
                                            <label for="inputTitle" class="col-form-label">Quantity <span
                                                    class="text-danger">*</span></label>
                                            <input id="inputTitle" type="number" name="quantity"
                                                placeholder="Enter coupon quantity" value="{{ old('quantity') }}"
                                                class="form-control">
                                            @error('quantity')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Status-->
                                        <div class="form-group">
                                            <label for="status" class="col-form-label">Status <span
                                                    class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>
                                                    Active
                                                </option>
                                                <option value="inactive"
                                                    {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                                </option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <hr>
                                        <div class="form-group mb-3">
                                            <button type="reset" class="btn btn-success">Reset</button>
                                            <button class="btn btn-outline-success" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ form-element ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Write short summary.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
    <script>
        $('#is_voucher').change(function(e) {
            e.preventDefault();
            var is_checked = $('#is_voucher').prop('checked');
            if (is_checked) {
                $('#voucher_cou_div').removeClass('d-none');
            } else {
                $('#voucher_cou_div').addClass('d-none');
                $('#oucher_cou_div').val('');
            }
        });
    </script>
@endsection
