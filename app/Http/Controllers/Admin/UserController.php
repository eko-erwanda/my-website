<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
	{
		// $this->middleware('auth');
		$this->middleware('auth');
	}


	public function index()
	{
        $users = User::all();
		
		return view('admin.user.index', compact('users'));
	}

	public function create()
	{
		return view('admin.user.create');
	}

	public function store(UserRequest $request)
	{
		$data = $request->all();
        $users = User::create($data);


        return redirect()->route('admin.user.index');
	}

	public function edit($id)
	{
		$users = User::find($id);

        return view('admin.user.edit', compact('users'));
	}

	public function update(UserRequest $request, $id)
	{
		$user = User::find($id);
        $inputs = $request->except(['_method', '_token']);
        $user->fill($inputs)->save();

        
        return redirect()->route('admin.user.index');
	}

	public function destroy($id)
	{
		$users = User::find($id);

        $users->delete();
        
        return redirect()->route('admin.user.index');
	}
}
