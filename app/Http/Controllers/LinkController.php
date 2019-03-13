<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Viewing;
use Illuminate\Http\Request;
use App\Link;
use Mail;

class LinkController extends Controller
{
    public function index($banner_id) {
        $link = new Link;
        $link->banner_id = $banner_id;
        $link->save();

        return view('banner/index',['link'=>$link]);
    }
    public function send(Request $request, $banner_id) {

        $result = "Сообщение не отправлено.";

        if(!empty($request->all())) {
            $date_first = $request->input('date_first');
            $date_second = $request->input('date_second');
            $count_links = Link::all()->where('banner_id', $banner_id)->whereBetween('created_at', [$date_first, $date_second])->count();
            $count_viewings = Viewing::all()->where('banner_id', $banner_id)->whereBetween('created_at', [$date_first, $date_second])->count();
            $banner_tl = Banner::all()->where('id', $banner_id);
            $banner_title = $banner_tl[0]->title;
            Mail::send('emails.default', ['request' => $request, 'count_links' => $count_links, 'count_viewings' => $count_viewings, 'banner_title'=>$banner_title], function($message) use ($request, $count_viewings, $count_links, $banner_title) {
                $message->from('test@my.mail', 'My_site');
                $message->to($request->email);
                $message->subject($request->subject, $count_viewings, $count_links, $banner_title);
            });
            $result = "Сообщение успешно отправлено!";
        }
        $data = ['result_send' => $result];

        return view('emails.send_result', $data);
    }
}
