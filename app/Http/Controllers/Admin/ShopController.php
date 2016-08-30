<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    //

    function getIndex(){


        return view('admin.shop.index');
    }
}
