<?php

namespace App\Http\Controllers\Admin\review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
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
