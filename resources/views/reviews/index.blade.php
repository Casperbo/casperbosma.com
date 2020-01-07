<!--  @extends('layouts.loginlayout')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">reviews</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Review</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reviews as $review)
        <tr>
            <td>{{$review->id}}</td>
            <td>{{$review->name}}</td>
            <td>{{$review->email}}</td>
            <td>{{$review->reviewtext}}</td>
            <td>
                <a href="{{ route('account.edit',$review->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('account.destroy', $review->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
    <div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection