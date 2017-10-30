<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // 首页显示
    public function show()
    {
        return view("homepage/show");
    }

    public function test()
    {
        return view('test/swiper');
    }
}
