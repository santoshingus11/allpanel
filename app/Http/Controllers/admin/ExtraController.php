<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SiteNotification;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
     public function news_update(){
        return view('agent.news-update');
    }

    public function update_notification(Request $request){
        try{
            SiteNotification::where('site_notificational_type',$request->type)->update(['description'=>$request->description]);
            return redirect()->back()->with('success','Successfully updated');
        }catch(\Throwable $th){
            return redirect()->back()->with('success','Something went wrong');
        }
    }

    public function client_notification(){
        return view('agent.client-notification');
    }
}
