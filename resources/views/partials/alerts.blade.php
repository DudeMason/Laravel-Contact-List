@if( Session::has('alert') )
  <div class="row justify-content-center">
    <div class="col-md-9">
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible fade show" style="text-align: center;" role="alert">
          <span>{{ Session::get('alert') }}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endif
@if( Session::has('error') )
  <div class="row justify-content-center">
    <div class="col-md-9">
      <div class="card-body">
        <div class="alert alert-danger alert-dismissible fade show" style="text-align: center;" role="alert">
          <span>{{ Session::get('error') }}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endif
