<?php

namespace App\Http\Controllers\Admin\review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
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
}
