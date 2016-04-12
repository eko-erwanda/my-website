<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Words;
use App\Http\Requests\WordRequest;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
        $words = Words::all();
		
		return view('admin.words.index', compact('words'));
	}

	public function create()
	{
		return view('admin.words.create');
	}

	public function store(WordRequest $request)
	{
		$data = $request->all();
        $words = Words::create($data);


        return redirect()->route('admin.words.index');
	}

	public function edit($id)
	{
		$words = Words::find($id);

        return view('admin.words.edit', compact('words'));
	}

	public function update(WordRequest $request, $id)
	{
		$words = Words::find($id);
        $inputs = $request->except(['_method', '_token']);
        $words->fill($inputs)->save();

        
        return redirect()->route('admin.words.index');
	}

	public function destroy($id)
	{
		$words = Words::find($id);

        $words->delete();
        
        return redirect()->route('admin.words.index');
	}
}
