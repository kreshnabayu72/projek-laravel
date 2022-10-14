<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class NewsController extends Controller
{
    public function index(){
        return view('pages.home',['newsList'=>News::all()]);
    }
    public function news(News $news){
        $writer = User::where("id",$news['user_id'])->first();

        return view('pages.news',['news'=>$news,'writer'=>$writer]);
    }
    public function write(){return view('pages.write');}

    public function post(Request $Request){
        $data = $Request->validate([
            'title'=>['required'],
            'subtitle'=>['required'],
            'content'=>['required']
        ]);

        if($Request->hasFile('image')){
            $data['image'] = $Request->file('image')->store('images','public');
        }

        $data['user_id'] = auth()->id();

        News::create($data);
        return redirect('/')->with('message','Posted a news');
    }

    public function delete(News $news){
        $news->delete();
        return back();
    }

    public function fill(){
        $user = ['username'=>'user','password'=>'user123'];
        $admin = ['username'=>'admin','password'=>'admin123'];
     

        $admin['password'] = bcrypt($admin['password']);
        $user['password'] = bcrypt($user['password']);

       
        $user1 = User::create($user);
        User::create($admin);

        $news = ['title'=>'fill','subtitle'=>'fill','content'=>'fill','user_id'=>1];
        News::create($news);
        return redirect('/');
    }
}
