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
                                <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Posts</a></li>
                                <li class="breadcrumb-item">Add Post</li>
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
                            <h5>Posts</h5>
                        </div>
                        <div class="card-body">
                            <h5>Add Post</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('post.store') }}">
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
                                        <!--Quote-->
                                        <div class="form-group">
                                            <label for="inputDesc" class="col-form-label">
                                                Quote
                                            </label>
                                            <textarea class="form-control" id="quote"
                                                name="quote">{{ old('quote') }}</textarea>
                                            @error('quote')
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

                                        <!--Post Catgory and Post Tag-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="post_cat_id" class="col-form-label">Post Catgory <span
                                                            class="text-danger">*</span></label>
                                                    <select name="post_cat_id" class="form-control"
                                                        onmousedown="if(this.options.length>8){this.size=8;}"
                                                        onchange='this.size=0;' onblur="this.size=0;">
                                                        @foreach (\App\Models\PostCategory::get() as $postCat)
                                                            <option value='{{ $postCat->id }}'
                                                                {{ old('post_cat_id') == $postCat->id ? 'selected' : '' }}>
                                                                {{ $postCat->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('post_cat_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="post_tag_id" class="col-form-label">Post Tag <span
                                                            class="text-danger">*</span></label>
                                                    <select name="post_tag_id" class="form-control"
                                                        onmousedown="if(this.options.length>8){this.size=8;}"
                                                        onchange='this.size=0;' onblur="this.size=0;">
                                                        @foreach (\App\Models\PostTag::get() as $postTag)
                                                            <option value='{{ $postTag->id }}'
                                                                {{ old('post_tag_id') == $postTag->id ? 'selected' : '' }}>
                                                                {{ $postTag->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('post_tag_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!--Added_by And Status-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="added_by" class="col-form-label">Author <span
                                                            class="text-danger">*</span></label>
                                                    <select name="added_by" class="form-control"
                                                        onmousedown="if(this.options.length>8){this.size=8;}"
                                                        onchange='this.size=0;' onblur="this.size=0;">
                                                        @foreach (\App\Models\User::get() as $user)
                                                            <option value='{{ $user->id }}'
                                                                {{ old('added_by') == $user->id ? 'selected' : '' }}>
                                                                {{ $user->fullname }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('added_by')
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
                                                            {{ old('status') == 'active' ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="inactive"
                                                            {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                                            Inactive
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
            $('#quote').summernote({
                placeholder: "Write short quote.....",
                tabsize: 2,
                height: 150
            });
        });
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
    {{-- <script type="text/javascript">
        require(['bootstrap-multiselect'], function(purchase){
        $('#example-getting-started').multiselect();
        });
        </script> --}}
@endsection
