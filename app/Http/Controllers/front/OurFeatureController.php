<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurFeatureController extends Controller
{
    public function index(){
        return view('front.our_feature.index');
    }
}
