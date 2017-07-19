<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    View::make('site.home');
    View::make('site.create');
    View::make('site.show');
    View::make('site.edit');
}
