<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    public function landscape(){

        return view('admin.inquiries.index');
    }

    public function addInquiry(){

        return view('admin.inquiries.add');
    }

    public function answer(){

        return view('admin.inquiries.answer');
    }
}
