@if(!empty(session('error')))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
@endif

@if(!empty(session('warning')))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
@endif