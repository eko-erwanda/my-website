<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Home;
use App\Service\Image;
use App\Http\Requests\HomeRequest;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(Image $image)
    {
    	$this->middleware('auth');
        $this->image = $image;
    }

    public function index()
    {
        $home = Home::all();
        
        return view('admin.home.index', compact('home'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(HomeRequest $request)
    {
        $data = $request->all();
        $home = Home::create($data);

        // If given photo then
        // Store photo in storage
        // And update the home
        if ($request->hasFile('pic')) {
            $home->image = $this->image->upload($request->file('pic'));
            $home->save();
        }

        return redirect()->route('admin.home.index');

    }

    public function edit($id)
    {
        $home = Home::find($id);
        return view('admin.home.edit', compact('home'));
    }

    public function update(HomeRequest $request, $id)
    {
        $home = Home::find($id);
        $inputs = $request->except(['_method', '_token']);
        $home->fill($inputs)->save();

        if ($request->hasFile('pic')) {
            $this->image->delete($home->image);
            $home->image = $this->image->upload($request->file('pic'));
        }
        $home->save();

        return redirect()->route('admin.home.index');
    }

    public function destroy($id)
    {
        //Search by id
        $home = Home::find($id);
        //Delete Image file
        $this->image->delete($home->image);
        //deleting home
        $home->delete();

        return redirect()->route('admin.home.index');
    }
}
