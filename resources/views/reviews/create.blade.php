@extends('layouts.loginlayout')

@section('main')
<div class="padding-8rem text-blue margin-bottom-250">
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h2 class="display-3 slide-right show-on-scroll">Add a review</h2>
     <hr class="divider my-4 slide-right show-on-scroll">
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('account.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" maxlength = "40"/>
          </div>


          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" maxlength = "40"/>
          </div>
          <div class="form-group">
              <label for="reviewtext">Review text:</label>
              <input type="text" class="form-control" name="reviewtext" maxlength = "60"/>
          </div>     
          
           <div class="form-group hidden">
              <label for="userid">User id:</label>
              <input type="text" class="form-control" readonly value="{{{ Auth::user()->id }}}" name="userid"/>
          </div>     
          
          <button type="submit" class="dashboard-buttons slide-right show-on-scroll">Add review</button>
      </form>
  </div>
</div>
</div>
    </div>
@endsection