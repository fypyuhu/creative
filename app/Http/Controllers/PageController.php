<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //

    function index(){

        return view('welcome.blade');
    }

    function getAbout(){

        return view('pages.about');
    }
    function getServices(){

        return view('pages.services');
    }
    function getPortfolio(){

        return view('pages.portfolio');
    }

    function getContact(){

        return view('contact.index');
    }
}
