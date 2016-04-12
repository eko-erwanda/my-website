<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Paket;
use App\Http\Requests\PaketRequest;
use App\Http\Controllers\Controller;

class PaketController extends Controller
{
    public function __construct()
	{
		// $this->middleware('auth');
		$this->middleware('auth');
	}


	public function index()
	{
        $paket = Paket::all();
		
		return view('admin.paket.index', compact('paket'));
	}

	public function create()
	{
		return view('admin.paket.create');
	}

	public function store(PaketRequest $request)
	{
		$data = $request->all();
        $paket = Paket::create($data);


        return redirect()->route('admin.paket.index');
	}

	public function edit($id)
	{
		$paket = Paket::find($id);

        return view('admin.paket.edit', compact('paket'));
	}

	public function update(PaketRequest $request, $id)
	{
		$paket = Paket::find($id);
        $inputs = $request->except(['_method', '_token']);
        $paket->fill($inputs)->save();

        
        return redirect()->route('admin.paket.index');
	}

	public function destroy($id)
	{
		$paket = Paket::find($id);

        $paket->delete();
        
        return redirect()->route('admin.paket.index');
	}
}
