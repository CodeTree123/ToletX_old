<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserWantedController extends Controller
{
    //
    function post_ghat()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_ghat', compact('lists'));
    }
    function post_picnic()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_picnicspot', compact('lists'));
    }
    function post_building()
    {

        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_building', compact('lists'));
    }
    function post_bilboard()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_bilboard', compact('lists'));
    }

    function post_room()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_room', compact('lists'));
    }

    function post_hostel()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_hostel', compact('lists'));
    }

    function post_hotel()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_hotel', compact('lists'));
    }

    function post_flat()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_flat', compact('lists'));
    }

    function post_resort()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_resort', compact('lists'));
    }

    function post_parking_spot()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_parking_spot', compact('lists'));
    }

    function post_office()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_office', compact('lists'));
    }

    function post_community()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_community', compact('lists'));
    }

    function post_warehouse()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_warehouse', compact('lists'));
    }

    function post_land()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_land', compact('lists'));
    }

    function post_pond()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_pond', compact('lists'));
    }

    function post_swimmingpool()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_swimmingpool', compact('lists'));
    }

    function post_playground()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_playground', compact('lists'));
    }

    function post_shooting()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_shooting', compact('lists'));
    }

    function post_exhibution()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_exhibution', compact('lists'));
    }

    function post_rooftop()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_rooftop', compact('lists'));
    }

    function post_factory()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_factory', compact('lists'));
    }

    function post_shop()
    {
        $lists = User::where('id', auth()->id())->get();
        return view('wanted.post_shop', compact('lists'));
    }
}
