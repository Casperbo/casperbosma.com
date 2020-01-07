<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();

        return view('account', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=>'required',
            'email'=>'required',
             'reviewtext'=>'required',
             'userid'=>'required',
        ]);

        $review = new Review([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'reviewtext' => $request->get('reviewtext'),
            'userid' => $request->get('userid'),
        ]);
        $review->save();
        return redirect('/account')->with('success', 'review saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        
         if(Auth::id() !== $review->userid) {
            return view('home')->withErrors('You cannot do that');
        } else {
              return view('reviews.edit', compact('review'));     
        }   
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
             'reviewtext'=>'required'
        ]);

        $review = Review::find($id);
        $review->name =  $request->get('name');
        $review->email = $request->get('email');
        $review->reviewtext = $request->get('reviewtext');
        $review->save();

        return redirect('/account')->with('success', 'review updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        
         $review = Review::find($id);
        
         if(Auth::id() !== $review->userid) {
            return view('home')->withErrors('You cannot do that');
        } else {
                $review->delete();

        return redirect('/account')->with('success', 'review deleted!');     
        }   
      
    }
}
