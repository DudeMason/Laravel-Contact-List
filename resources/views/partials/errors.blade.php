@if(count($errors->all()))
  <div class="row justify-content-center">
    <div class="col-md-9">
      <div class="card-body">
        <div class='alert alert-danger'>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endif
