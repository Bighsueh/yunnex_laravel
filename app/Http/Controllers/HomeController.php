<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function menu()
    {
        return view('pages.menu');
    }

    public function intro_front()
    {
        return view('pages.front.intro');
    }

    public function story_front()
    {
        return view('pages.front.story');
    }

    public function discount_front()
    {
        return view('pages.front.discount');
    }

    public function sign_front()
    {
        return view('pages.front.sign');
    }

    public function game_front()
    {
        return view('pages.front.game');
    }

    public function order_front()
    {
        return view('pages.front.order');
    }

    public function intro_content()
    {
        return view('pages.contents.intro');
    }

    public function story_content()
    {
        return view('pages.contents.story');
    }

    public function story2_content()
    {
        return view('pages.contents.story2');
    }

    public function discount_content()
    {
        return view('pages.contents.discount');
    }

    public function sign_content()
    {
        return view('pages.contents.sign');
    }

    public function game_content()
    {
        return view('pages.contents.game');
    }

    public function order_content()
    {
        return view('pages.contents.order');
    }


}
