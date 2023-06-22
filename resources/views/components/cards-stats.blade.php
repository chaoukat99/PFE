<div class="row">
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Clients</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{Auth::guard('experts')->user()->users()->count()}}</h3>
            <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>
          <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Earnings</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{Auth::guard('experts')->user()->earnings()->sum('amount')}}</h3>
            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>
          <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Appointements</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{Auth::guard('experts')->user()->users()->wherePivot('status','completed')->count()}}</h3>
            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>
          <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Articles</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{Auth::guard('experts')->user()->articles()->count()}}</h3>
            <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>
          <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
        </div>
      </div>
    </div>
  </div>
