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
                                <li class="breadcrumb-item"><a href="#">Coupons</a></li>
                                <li class="breadcrumb-item">All Coupons</li>
                            </ul>
                            <h6 class="float-right">Total Coupons:
                                {{ App\Models\Coupon::count() }}
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
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="float-left">Coupon Lists </h2>
                            <div class="float-right">
                                <a class="float-left mr-1" href="{{ route('coupon.create') }}" style="color:black;">
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
                                                    <th>Code</th>
                                                    <th>Type</th>
                                                    <th>Value</th>
                                                    <th>Is Voucher</th>
                                                    <th>Quantity</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($coupons as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->code }}</td>
                                                        <td> {{ $item->type }} </td>
                                                        <td> {{ $item->value }} </td>
                                                        <td>
                                                            {{ $item->is_voucher == 1 ? 'Yes' : 'No' }}
                                                        </td>
                                                        <td>
                                                            {{ $item->quantity }}
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="toogle" value="{{ $item->id }}"
                                                                {{ $item->status == 'active' ? 'checked' : '' }}
                                                                data-toggle="toggle" data-on="Active"
                                                                data-onstyle="outline-success" data-off="Inactive"
                                                                data-offstyle="outline-danger" data-size="sm">
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                    <a href="{{ route('coupon.edit', $item->id) }}"
                                                                        data-toogle="tooltip" title="edit"
                                                                        class="btn btn-sm btn-outline-warning"
                                                                        data-placement="bottom">
                                                                        <i class="icon feather icon-edit f-16 "></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                    <form method="POST"
                                                                        action="{{ route('coupon.destroy', [$item->id]) }}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href="#!" data-id={{ $item->id }}
                                                                            data-toogle="tooltip" title="delete"
                                                                            class="dltBtn btn btn-sm btn-outline-danger"
                                                                            data-placement="bottom">
                                                                            <i class="feather icon-trash-2 f-16 "></i>
                                                                        </a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
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
                url: "{{ route('coupon.status') }}",
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
