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
                                <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Banners</a></li>
                                <li class="breadcrumb-item">Add Banner</li>
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
                            <h5>Banners</h5>
                        </div>
                        <div class="card-body">
                            <h5>Add Banner</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('banner.store') }}">
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

                                        <!--Photo-->
                                        {{-- <div class="form-group">
                                            <label for="inputPhoto" class="col-form-label">Photo <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                        class="btn btn-success">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo"
                                                    value="{{ old('photo') }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            @error('photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <!--Condition And Status-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="condi" class="col-form-label">Condition <span
                                                            class="text-danger">*</span></label>
                                                    <select name="condi" class="form-control">
                                                        <option value="banner"
                                                            {{ old('condi') == 'banner' ? 'selected' : '' }}>Banner
                                                        </option>
                                                        <option value="promo"
                                                            {{ old('condi') == 'promo' ? 'selected' : '' }}>Promotion
                                                        </option>
                                                    </select>
                                                    @error('condi')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
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
            $('#description').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endsection
