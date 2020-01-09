@extends('layouts.loginlayout') 
@section('main')
<div class="padding-8rem text-blue margin-bottom-250">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h2 class="display-3 slide-right show-on-scroll">Update profile</h2>
        <hr class="divider my-4 slide-right show-on-scroll is-visible">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" maxlength = "40" action="{{ route('edit-profile.update', $user->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" maxlength = "40" class="form-control" name="name" value={{ $user->name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" maxlength = "40" class="form-control" name="email" value={{ $user->email }} />
            </div>
        
            <button type="submit" class="dashboard-buttons slide-right show-on-scroll">Update</button>
        </form>
    </div>
</div>
    </div>
@endsection