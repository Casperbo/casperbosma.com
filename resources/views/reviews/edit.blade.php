@extends('layouts.loginlayout') 
@section('main')
<div class="padding-8rem text-blue">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h2 class="display-3 slide-right show-on-scroll">Update a review</h2>
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
        <form method="post" action="{{ route('account.update', $review->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $review->name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $review->email }} />
            </div>
            <div class="form-group">
                <label for="reviewtext">Review:</label>
                <input type="text" class="form-control" name="reviewtext" value={{ $review->reviewtext }} />
            </div>
            <button type="submit" class="dashboard-buttons slide-right show-on-scroll">Update</button>
        </form>
    </div>
</div>
    </div>
@endsection