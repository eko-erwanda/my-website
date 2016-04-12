<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Skill;
use App\Recrutment;
use App\Http\Controllers\Controller;

class SkillsetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {    
    	$skill = Skill::all();
    	$recrutment = Recrutment::all();

        return view('admin.about.skillset.index', compact('skill', 'recrutment'));
    }

}