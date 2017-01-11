<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function sayHello()
    {
        return view('greetings.sayHello')->with([
            'good'  => 'Hello, friend! :D',
            'bad'   => 'Oh, it\'s you again.'
        ]);
    }

    public function sayGoodbye()
    {
        return view('greetings.sayGoodbye');
    }

    public function askIfHungry()
    {
        return view('greetings.askIfHungry');
    }
}

