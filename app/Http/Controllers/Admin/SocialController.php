<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Social;
use App\Http\Requests\SocialRequest;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function __construct()
	{
		// $this->middleware('auth');
		$this->middleware('auth');
	}


	public function index()
	{
        $social = Social::all();
		
		return view('admin.social.index', compact('social'));
	}

	public function create()
	{
		return view('admin.social.create');
	}

	public function store(SocialRequest $request)
	{
		$data = $request->all();
        $social = Social::create($data);


        return redirect()->route('admin.social.index');
	}

	public function edit($id)
	{
		$social = Social::find($id);

        return view('admin.social.edit', compact('social'));
	}

	public function update(SocialRequest $request, $id)
	{
		$social = Social::find($id);
        $inputs = $request->except(['_method', '_token']);
        $social->fill($inputs)->save();

        
        return redirect()->route('admin.social.index');
	}

	public function destroy($id)
	{
		$social = Social::find($id);

        $social->delete();
        
        return redirect()->route('admin.social.index');
	}
}
