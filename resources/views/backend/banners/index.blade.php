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
                                <li class="breadcrumb-item"><a href="#">Banners</a></li>
                                <li class="breadcrumb-item">All Banners</li>
                            </ul>
                            <h6 class="float-right">Total Banners:
                                {{ App\Models\Banner::count() }}
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
                            <h2 class="float-left">Banner Lists </h2>
                            <div class="float-right">
                                <a class="float-left mr-1" href="{{ route('banner.create') }}" style="color:black;">
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
                                                    <th>Photo</th>
                                                    <th>Condition</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Title</th>
                                                    <th>Photo</th>
                                                    <th>Condition</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>


                                            <tbody>
                                                @foreach ($banners as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->title }}</td>
                                                        <td>
                                                            @if ($item->photo)
                                                                <img src="{{ $item->photo }}" class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="{{ $item->photo }}">
                                                            @else
                                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                                    class="img-fluid zoom"
                                                                    style="max-height: 90px; max-width: 120px;"
                                                                    alt="avatar.png">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->condi == 'banner')
                                                                <span
                                                                    class="badge bg-light-primary">{{ $item->condi }}</span>

                                                            @else
                                                                <span
                                                                    class="badge badge-warning">{{ $item->condi }}</span>
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
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    <a href="javascript:void(0);" data-toogle="tooltip"
                                                                        title="view"
                                                                        class="btn btn-sm btn-outline-secondary"
                                                                        style="height:30px; width:30px;border-radius:50%"
                                                                        data-placement="bottom" data-toggle="modal"
                                                                        data-target="#bannerID{{ $item->id }}">
                                                                        <i class="icon feather icon-eye f-16 "></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    <a href="{{ route('banner.edit', $item->id) }}"
                                                                        data-toogle="tooltip" title="edit"
                                                                        class="btn btn-sm btn-outline-warning float-left mr-1"
                                                                        data-placement="bottom">
                                                                        <i class="icon feather icon-edit f-16 "></i>
                                                                    </a>
                                                                </div>

                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    <form method="POST"
                                                                        action="{{ route('banner.destroy', [$item->id]) }}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a href="#!" data-id={{ $item->id }}
                                                                            data-toogle="tooltip" title="delete"
                                                                            class="dltBtn btn btn-sm btn-outline-danger ml-1"
                                                                            data-placement="bottom">
                                                                            <i class="feather icon-trash-2 f-16 "></i>
                                                                        </a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="bannerID{{ $item->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                @php
                                                                    $banner = \App\Models\Banner::where('id', $item->id)->first();
                                                                @endphp
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">
                                                                            {{ \Illuminate\Support\Str::upper($banner->title) }}
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                <strong>Description</strong>
                                                                                <p>{!! html_entity_decode($banner->description) !!}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Condition</strong>
                                                                                <p>
                                                                                    <span class="badge bg-light-primary">
                                                                                        {{ $banner->condi }}
                                                                                    </span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                <strong>Status</strong>
                                                                                <p>
                                                                                    <span class="badge bg-light-info">
                                                                                        {{ $banner->status }}
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
                url: "{{ route('banner.status') }}",
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
{{-- @section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
    <script>
        $('#banner-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [3, 4, 5]
            }]
        });

        // Sweet alert

        function deleteData(id) {

        }
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e) {
                var form = $(this).closest('form');
                var dataID = $(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Your data is safe!");
                        }
                    });
            })
        })
    </script>

@endsection --}}
