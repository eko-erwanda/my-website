<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Message;
use App\Newsletter;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {    
    	$message = Message::all();
    	$news = Newsletter::all();

        return view('admin.dashboard.index', compact('message', 'news'));
    }
}
