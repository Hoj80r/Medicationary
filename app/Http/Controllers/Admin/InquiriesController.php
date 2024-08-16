<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    public function landscape(){

        $currentUser = auth()->user();

        return view('admin.inquiries.index', compact('currentUser'));
    }

    public function addInquiry(){

        $currentUser = auth()->user();

        return view('admin.inquiries.add', compact('currentUser'));
    }

    public function answer(){

        $currentUser = auth()->user();

        return view('admin.inquiries.answer', compact('currentUser'));
    }
}
