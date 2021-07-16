<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('created_at','desc')->get();
        return view('admin.review.index' , compact('reviews'));
    }

    public function trashedReviews()
    {
        $reviews = Review::onlyTrashed()->latest()->paginate(4);         // show only delete
        return view('admin.review.trash', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    public function softDelete($id)
    {
        $review  = Review::find($id);
        $review->delete();
        return redirect()->route('Reviews.index')->with('success','Review Deleted');
    }

    public function backFromSoftDelete($id)
    {
        $review = Review::onlyTrashed()->where('id' , $id)->first()->restore();
        return redirect()->route('Reviews.index')->with('success',' Done Review back');
    }
}
