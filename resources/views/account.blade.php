@extends('layouts.loginlayout')

@section('content')
<div class="container padding8em text-blue">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header slide-up show-on-scroll"><h2>Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p class="slide-up show-on-scroll">You are logged in!</p>
                    <hr class="divider my-4 slide-right show-on-scroll is-visible">
                    <div class="dashboard-buttons slide-up show-on-scroll" onclick="onclickhide()">
                        <p>Account info</p>
                    </div>
                    <div id="onclickhide" class="account-blok">
                        
         <p>Name: {{ Auth::user()->name }}</p>
           <p>E-mail: {{ Auth::user()->email }}</p>
           <p>Created at: {{ Auth::user()->created_at }}</p>
         <p>Updated at:{{ Auth::user()->updated_at }}</p>
                    
                    <a onclick="window.location.href='/edit-profile'" class="btn-light edit-profile-button">Edit profile</a>
                        <div id="onclickhide2" class="edit-profile-blok">
                            
                        </div>
                        
                    </div>
                       <div class="dashboard-buttons slide-up show-on-scroll" onclick="window.location.href='/contact-us'">
                        <p>Contact form</p>
                    </div>
                   <div class="row slide-right show-on-scroll">
<div class="col-sm-12">
     
    <h2 class="margin-top">reviews</h2>
    
   <hr class="divider my-4 slide-right show-on-scroll is-visible">
    <div class="dashboard-buttons margin-top" onclick="window.location.href='account/create'">New review</div>

    
  <table class="margin-top table table-striped margin-top-1em">
    <thead>
        <tr>
          <td>Name</td>
          <td></td>
          <td>Review</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reviews as $review)
        <tr>
            <td>
            {{$review->name}}
            <td>
                  @if(auth()->user()->id == $review->userid)
                
              <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-blue delete-arrow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('account.edit',$review->id)}}" class="dropdown-item">Edit</a>

                                    <form action="{{ route('account.destroy', $review->id)}}" method="post">
                 		    @csrf
                  		    @method('DELETE')
                  		   <button class="dropdown-item" type="submit">Delete</button>
               			    </form>
                                       
                                  
                                </div>
                            </div>
            
               
        @endif
               </td>
            <td>{{$review->reviewtext}}</td>
            
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
        </div>   
    </div>
</div>
                </div>
            </div>
              
@endsection
