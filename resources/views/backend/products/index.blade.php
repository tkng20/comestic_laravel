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
                                <h5 class="m-b-10">PUN SHOP </h5>
                            </div>
                            <ul class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Products</a></li>
                                <li class="breadcrumb-item">All Products</li>
                            </ul>
                            <h6 class="float-right">Total Products:
                                {{ App\Models\Product::count() }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ Notification ] start-->
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    @include('backend.layouts.notification')
                </div>
                <!-- [ Notification ] end-->
                <!-- [ Table ] start -->
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="float-left">Product Lists </h2>
                            <div class="float-right">
                                <a class="float-left mr-1" href="{{ route('product.create') }}" style="color:black;">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="collapse-link float-right ml-1"><i class="fa fa-chevron-up"></i></a>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Title</th>
                                                    {{-- <th>Coupon Code</th>
                                                    <th>Brand's Name</th>
                                                    <th>Parent Category</th> --}}
                                                    <th>Child Category</th>
                                                    <th>Price (USD)</th>
                                                    <th>Stock</th>
                                                    <th>Condition</th>
                                                    <th>Status</th>
                                                    {{-- <th>Summary</th>
                                                    <th>Description</th>
                                                    <th>Photo1</th>
                                                    <th>Photo2</th>
                                                    <th>Photo3</th>
                                                    <th>Photo4</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($products as $item)
                                                    @php
                                                        $photo = explode(',', $item->photo);
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->title }}</td>
                                                        {{-- <td>
                                                            {{ App\Models\Coupon::where('id', $item->coupon_id)->value('code') }}
                                                        </td>
                                                        <td>
                                                            {{ App\Models\Brand::where('id', $item->brand_id)->value('title') }}
                                                        </td>
                                                        <td>
                                                            {{ App\Models\Category::where('id', $item->cat_id)->value('title') }}
                                                        </td> --}}
                                                        <td>
                                                            {{ App\Models\Category::where('id', $item->child_cat_id)->value('title') }}
                                                        </td>
                                                        <td>${{ number_format($item->price, 2) }}</td>
                                                        <td>{{ $item->stock }}</td>
                                                        <td>
                                                            @if ($item->condi == 'default')
                                                                <span class="badge bg-light-primary">
                                                                    {{ $item->condi }}
                                                                </span>

                                                            @elseif ($item->condi == 'hot')
                                                                <span class="badge badge-danger">
                                                                    {{ $item->condi }}
                                                                </span>
                                                            @else
                                                                <span class="badge badge-warning">
                                                                    {{ $item->condi }}
                                                                </span>
                                                            @endif

                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="toogle"
                                                                value="{{ $item->id }}"
                                                                {{ $item->status == 'active' ? 'checked' : '' }}
                                                                data-toggle="toggle" data-on="Active"
                                                                data-onstyle="outline-success" data-off="Inactive"
                                                                data-offstyle="outline-danger" data-size="sm">
                                                        </td>
                                                        {{-- <td>{!! html_entity_decode($item->summary) !!}</td>
                                                        <td>{!! html_entity_decode($item->description) !!}</td>

                                                        <td>
                                                            @if ($item->photo1) --}}
                                                        {{-- <img src="{{ $item->photo1 }}" class="img-fluid zoom" --}}
                                                        {{-- <img src="{{ $photo[0] }}" class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="{{ $item->photo1 }}">
                                                            @else
                                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                                    class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="avatar.png">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->photo2) --}}
                                                        {{-- <img src="{{ $item->photo2 }}" class="img-fluid zoom" --}}
                                                        {{-- <img src="{{ $photo[0] }}" class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="{{ $item->photo3 }}">
                                                            @else
                                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                                    class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="avatar.png">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->photo3) --}}
                                                        {{-- <img src="{{ $item->photo3 }}" class="img-fluid zoom" --}}
                                                        {{-- <img src="{{ $photo[0] }}" class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="{{ $item->photo3 }}">
                                                            @else
                                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                                    class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="avatar.png">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->photo4) --}}
                                                        {{-- <img src="{{ $item->photo4 }}" class="img-fluid zoom" --}}
                                                        {{-- <img src="{{ $photo[0] }}" class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="{{ $item->photo4 }}">
                                                            @else
                                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                                    class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="avatar.png">
                                                            @endif
                                                        </td> --}}

                                                        <td>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    <a href="javascript:void(0);" data-toogle="tooltip"
                                                                        title="view"
                                                                        class="btn btn-sm btn-outline-secondary"
                                                                        {{-- float-left mr-1" --}} data-placement="bottom"
                                                                        data-toggle="modal"
                                                                        data-target="#productID{{ $item->id }}">
                                                                        <i class="icon feather icon-eye f-16 "></i>
                                                                    </a>
                                                                </div>

                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    <a href="{{ route('product.edit', $item->id) }}"
                                                                        data-toogle="tooltip" title="edit"
                                                                        class="btn btn-sm btn-outline-warning"
                                                                        {{-- float-left mr-1" --}} data-placement="bottom">
                                                                        <i class="icon feather icon-edit f-16 "></i>
                                                                    </a>
                                                                </div>

                                                                {{-- <form method="POST"
                                                                    action="{{ route('product.destroy', [$item->id]) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button
                                                                        class="btn btn-outline-danger float-left mr-2 btn-sm"
                                                                        id="dltBtn" data-id={{ $item->id }}
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Delete"><i
                                                                            class="fas fa-trash-alt"></i></button>
                                                                </form> --}}
                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    {{-- <a class="float-right mr-1"> --}}
                                                                    <form method="POST"
                                                                        action="{{ route('product.destroy', [$item->id]) }}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href="#!" data-id={{ $item->id }}
                                                                            data-toogle="tooltip" title="delete"
                                                                            class="dltBtn btn btn-sm btn-outline-danger "
                                                                            {{-- float-left mr-1" --}} data-placement="bottom">
                                                                            <i class="feather icon-trash-2 f-16 "></i>
                                                                        </a>
                                                                    </form>
                                                                    {{-- </a> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="productID{{ $item->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                @php
                                                                    $product = \App\Models\Product::where('id', $item->id)->first();
                                                                @endphp
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">
                                                                            {{ \Illuminate\Support\Str::upper($product->title) }}
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <strong>Summary</strong>
                                                                            <p>{!! html_entity_decode($product->summary) !!}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <strong>Description</strong>
                                                                            <p>{!! html_entity_decode($product->description) !!}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                                <strong>Price</strong>
                                                                                <p>${{ number_format($product->price, 2) }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                                <strong>Offer Price</strong>
                                                                                <p>${{ number_format($item->offer_price, 2) }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                                <strong>Stock</strong>
                                                                                <p>{{ $product->stock }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Coupon Code</strong>
                                                                                <p> {{ App\Models\Coupon::where('id', $product->coupon_id)->value('code') }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Brand's Name</strong>
                                                                                <p>{{ App\Models\Brand::where('id', $product->brand_id)->value('title') }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Parent Categor</strong>
                                                                                <p>{{ App\Models\Category::where('id', $product->cat_id)->value('title') }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Child Category</strong>
                                                                                <p>{{ App\Models\Category::where('id', $product->child_cat_id)->value('title') }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Condition</strong>
                                                                                <p>
                                                                                    <span class="badge bg-light-primary">
                                                                                        {{ $product->condi }}
                                                                                    </span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Status</strong>
                                                                                <p>
                                                                                    <span class="badge bg-light-info">
                                                                                        {{ $product->status }}
                                                                                    </span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Table ] end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->
@endsection
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e) {
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        })
    </script>
    <script>
        $('input[name=toogle]').change(function() {
            var mode = $(this).prop('checked');
            var id = $(this).val();
            // alert(id);
            $.ajax({
                url: "{{ route('product.status') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    mode: mode,
                    id: id,
                },
                success: function(response) {
                    // console.log(response.status);
                    if (response.status) {
                        alert(response.msg);
                    } else {
                        alert("Please try again!!!");
                    }
                }
            })
        });
    </script>
@endsection
