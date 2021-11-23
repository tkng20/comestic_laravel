{{-- @if (session('success'))
    <div class="alert alert-success alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        {{session('success')}}
    </div>
@endif


@if (session('error'))
    <div class="alert alert-danger alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        {{session('error')}}
    </div>
@endif --}}


@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
