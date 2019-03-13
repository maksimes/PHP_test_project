<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Viewing;

class BannerController extends Controller
{
    public function index() {
        $banner = Banner::all()->where('added', 1)->random(1);
        $viewing = new Viewing;
        $viewing->banner_id = $banner[0]->id;
        $viewing->save();
        $count_viewings = Viewing::all()->where('banner_id', $banner[0]->id)->count();
        return view('index',['banner'=>$banner, 'viewing'=> $viewing, 'count_viewings' => $count_viewings]);
    }
}
