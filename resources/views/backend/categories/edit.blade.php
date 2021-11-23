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
                                <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Categories</a></li>
                                <li class="breadcrumb-item">Edit Category</li>
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
                            <h5>Categories</h5>
                        </div>
                        <div class="card-body">
                            <h5>Edit Category</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('category.update', $category->id) }}">
                                        {{-- {{ csrf_field() }} --}}
                                        @csrf
                                        @method('patch')
                                        <!--Title-->
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input id="inputTitle" type="text" name="title" placeholder="Enter title"
                                                value="{{ $category->title }}" class="form-control">
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
                                                name="summary">{{ $category->summary }}</textarea>
                                            @error('summary')
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
                                                    value="{{ $category->photo }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            @error('photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <!--Is parent-->
                                        <div class="form-group">
                                            <label for="status" class="col-form-label mr-3">
                                                Is Parent :
                                                <span class="text-danger">*
                                                </span>
                                            </label>
                                            <input type="checkbox" id="is_parent" name="is_parent"
                                                value="{{ $category->is_parent }}" data-toggle="toggle" data-on="Yes"
                                                data-onstyle="outline-success" data-off="No" data-offstyle="outline-danger"
                                                class="form-control" {{ $category->is_parent == 1 ? 'checked' : '' }}>
                                            @error('is_parent')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--Parent ID-->
                                        <div class="form-group {{ $category->is_parent == 1 ? 'd-none' : '' }}"
                                            id="parent_cat_div">
                                            <label for="parent_id" class="col-form-label">Parent Category <span
                                                    class="text-danger">*</span></label>
                                            <select name="parent_id" class="form-control"
                                                >
                                                $@foreach ($parent_cats as $pcats)
                                                    <option value='{{ $pcats->id }}'
                                                        {{ $pcats->id == $category->parent_id ? 'selected' : '' }}>
                                                        {{ $pcats->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('parent_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Status-->
                                        <div class="form-group">
                                            <label for="status" class="col-form-label">Status <span
                                                    class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="active"
                                                    {{ $category->status == 'active' ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="inactive"
                                                    {{ $category->status == 'inactive' ? 'selected' : '' }}>
                                                    Inactive
                                                </option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <hr>
                                        <div class="form-group mb-3">
                                            <button type="reset" class="btn btn-success">Cancel</button>
                                            <button class="btn btn-outline-success" type="submit">Update</button>
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
        $('#is_parent').change(function(e) {
            e.preventDefault();
            var is_checked = $('#is_parent').prop('checked');
            // alert(is_checked);
            if (is_checked) {
                $('#parent_cat_div').addClass('d-none');
                $('#parentcat_div').val('');
            } else {
                $('#parent_cat_div').removeClass('d-none');
            }
        });
    </script>
@endsection
