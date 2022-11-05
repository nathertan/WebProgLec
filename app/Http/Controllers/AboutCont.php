<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutCont extends Controller{
    // public function index () {
    //     return view ('student', ["student" => about::all()]);
    // }
    public function index () {
        $data = about::all();
        return view('student', compact('data'));
    }
}