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
                                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
                                <li class="breadcrumb-item">Add Product</li>
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
                            <h5>Products</h5>
                        </div>
                        <div class="card-body">
                            <h5>Add Product</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('product.store') }}">
                                        {{-- {{ csrf_field() }} --}}
                                        @csrf
                                        <!--Title-->
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input id="inputTitle" type="text" name="title" placeholder="Enter title"
                                                value="{{ old('title') }}" class="form-control">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Summary-->
                                        <div class="form-group">
                                            <label for="inputDesc" class="col-form-label">
                                                Summary
                                            </label>
                                            <textarea class="form-control" id="summary"
                                                name="summary">{{ old('summary') }}</textarea>
                                            @error('summary')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Description-->
                                        <div class="form-group">
                                            <label for="inputDesc" class="col-form-label">
                                                Description
                                            </label>
                                            <textarea class="form-control" id="description"
                                                name="description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Photo1-->
                                        {{-- <div class="form-group">
                                            <label for="inputPhoto" class="col-form-label">Photo 1 <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                        class="btn btn-success">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo1"
                                                    value="{{ old('photo1') }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            @error('photo1')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <!--Photo2-->
                                        {{-- <div class="form-group">
                                            <label for="inputPhoto" class="col-form-label">Photo 2 <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                        class="btn btn-success">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo2"
                                                    value="{{ old('photo2') }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            @error('photo2')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <!--Photo3-->
                                        {{-- <div class="form-group">
                                            <label for="inputPhoto" class="col-form-label">Photo 3 <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                        class="btn btn-success">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo3"
                                                    value="{{ old('photo3') }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            @error('photo3')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <!--Photo4-->
                                        {{-- <div class="form-group">
                                            <label for="inputPhoto" class="col-form-label">Photo 4 <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                        class="btn btn-success">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo4"
                                                    value="{{ old('photo4') }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            @error('photo4')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <!--Brand And Category-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="brand_id">Brand <span
                                                            class="text-danger">*</span></label>
                                                    <select name="brand_id" class="form-control">
                                                        @foreach (\App\Models\Brand::orderBy('title')->get() as $brand)
                                                            <option value="{{ $brand->id }}"
                                                                {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                                                {{ $brand->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('brand_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="post_cat_id" class="form-label">Category <span
                                                            class="text-danger">*</span></label>
                                                    <select name="post_cat_id" id="post_cat_id" class="form-control">
                                                        @foreach (\App\Models\Category::where('is_parent', 1)->orderBy('title')->get()
        as $cat)
                                                            <option value='{{ $cat->id }}'
                                                                {{ old('cat_id') == $cat->id ? 'selected' : '' }}>
                                                                {{ $cat->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('cat_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group d-none" id="child_cat_div">
                                            <label for="child_cat_id">Sub Category</label>
                                            <select name="child_cat_id" id="child_cat_id" class="form-control"
                                                onmousedown="if(this.options.length>8){this.size=8;}"
                                                onchange='this.size=0;' onblur="this.size=0;">
                                            </select>
                                        </div>

                                        <!--Coupon-->
                                        <div class="form-group">
                                            <label for="coupon_id">Coupon <span class="text-danger">*</span></label>
                                            <select name="coupon_id" class="form-control">
                                                <option value="0">Not use
                                                </option>
                                                @foreach (\App\Models\Coupon::where('is_voucher', 0)->where('status', 'active')->orderBy('code')->get()
        as $coupon)
                                                    <option value="{{ $coupon->id }}"
                                                        {{ old('coupon_id') == $coupon->id ? 'selected' : '' }}>
                                                        {{ $coupon->code }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('coupon_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Price And Stock-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for=" inputTitle" class="col-form-label">Price <span
                                                            class="text-danger">*</span></label>
                                                    <input id="inputTitle" type="number" name="price"
                                                        placeholder="Enter product's price: "
                                                        value="{{ old('price') }} (USD)" class="form-control">
                                                    @error('price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="inputTitle" class="col-form-label">Stock <span
                                                            class="text-danger">*</span></label>
                                                    <input id="inputTitle" type="number" name="stock"
                                                        placeholder="Enter product quantity" value="{{ old('stock') }}"
                                                        class="form-control">
                                                    @error('stock')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!--Condition And Status-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="condi" class="col-form-label">Condition <span
                                                            class="text-danger">*</span></label>
                                                    <select name="condi" class="form-control">
                                                        <option value="default"
                                                            {{ old('condi') == 'default' ? 'selected' : '' }}>Default
                                                        </option>
                                                        <option value="hot"
                                                            {{ old('condi') == 'hot' ? 'selected' : '' }}>Hot
                                                        </option>
                                                        <option value="new"
                                                            {{ old('condi') == 'new' ? 'selected' : '' }}>New
                                                        </option>
                                                    </select>
                                                    @error('condi')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                    {{-- <label for="condi" class="col-form-label">Condition <span
                                                            class="text-danger">*</span></label>
                                                    <select name="condi" class="form-control">
                                                        <option value="product"
                                                            {{ old('condi') == 'default' ? 'selected' : '' }}>Default
                                                        </option>
                                                        <option value="product"
                                                            {{ old('condi') == 'new' ? 'selected' : '' }}>New
                                                        </option>
                                                        <option value="promo"
                                                            {{ old('condi') == 'hot' ? 'selected' : '' }}>Hot
                                                        </option>
                                                    </select>
                                                    @error('condi')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="status" class="col-form-label">Status <span
                                                            class="text-danger">*</span></label>
                                                    <select name="status" class="form-control">
                                                        <option value="active"
                                                            {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                                        </option>
                                                        <option value="inactive"
                                                            {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                                        </option>
                                                    </select>
                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group mb-3">
                                            <button type="reset" class="btn btn-success">Reset</button>
                                            <button class="btn btn-outline-success" type="submit">Submit</button>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <div class="col-md-9 col-sm-9  offset-md-3 ">
                                                <button type="reset" class="btn btn-success ">Reset</button>
                                                <button type="submit" class="btn btn-outline-success">Submit</button>
                                            </div>
                                        </div> --}}
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
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
    <script>
        $('#cat_id').change(function() {
            var cat_id = $(this).val();
            // alert(cat_id);
            if (cat_id != null) {
                // Ajax call
                $.ajax({
                    url: "/admin/category/" + cat_id + "/child",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: cat_id,
                    },
                    type: "POST",
                    success: function(response) {
                        if (typeof(response) != 'object') {
                            response = $.parseJSON(response)
                        }
                        // console.log(response);
                        var html_option = "";
                        if (response.status) {
                            var data = response.data;
                            // alert(data);
                            if (response.data) {
                                $('#child_cat_div').removeClass('d-none');
                                $.each(response.data, function(id, title) {
                                    html_option += "<option value='" + id + "'>" + title +
                                        "</option>"
                                });
                            } else {
                                // alert('no childe catgory');
                                // $('#child_cat_div').addClass('d-none');
                            }
                            //     $('#child_cat_id').html(html_option);
                            // }
                        } else {
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);
                    }
                });
            } else {}
        })
    </script>
@endsection
