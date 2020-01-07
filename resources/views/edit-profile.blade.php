@extends('layouts.loginlayout')

@section('content')
<div class="padding-8rem">



    <table class="margin-top table table-striped margin-top-1em">
    <thead>
        <tr>
          <td>Name</td>
          <td>Email</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
          <td>
                <a href="{{ route('edit-profile.edit',$user->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
               
</div></form>
          
      
@endsection