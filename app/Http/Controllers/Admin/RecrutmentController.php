<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Recrutment;
use App\Http\Requests\RecrutmentRequest;
use App\Http\Controllers\Controller;

class RecrutmentController extends Controller
{
    public function create()
    {
        return view('admin.about.skillset.recrutment.create');
    }

    public function store(RecrutmentRequest $request)
    {
        $data = $request->all();
        $recrutment = Recrutment::create($data);

        return redirect()->route('admin.skillset.index');
    }

    public function edit($id)
    {
        $recrutment = Recrutment::find($id);

        return view('admin.about.skillset.recrutment.edit', compact('recrutment'));
    }

    public function update(RecrutmentRequest $request, $id)
    {
        $recrutment = Recrutment::find($id);
        $inputs = $request->except(['_method', '_token']);
        $recrutment->fill($inputs)->save();
                
        return redirect()->route('admin.skillset.index');
    }

    public function destroy($id)
	{
		$recrutment = Recrutment::find($id);

        $recrutment->delete();
        
        return redirect()->route('admin.skillset.index');
	}
}
