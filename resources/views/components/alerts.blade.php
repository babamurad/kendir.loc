@if(session('success'))
     <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
        <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true">×</button>
        <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
        <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true">×</button>
        <h6><i class="icon fas fa-info"></i> {{ session('error') }}</h6>
    </div>
@endif
