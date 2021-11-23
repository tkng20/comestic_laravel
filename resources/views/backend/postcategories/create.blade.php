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
                                <li class="breadcrumb-item"><a href="{{ route('post_category.index') }}">Post
                                        Categoriess</a></li>
                                <li class="breadcrumb-item">Add Post Category</li>
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
                            <h5>Post Categoriess</h5>
                        </div>
                        <div class="card-body">
                            <h5>Add Post Category</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('post_category.store') }}">
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
            $('#description').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endsection
