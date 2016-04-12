<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Team;
use App\Service\Image;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function __construct(Image $image)
    {
    	$this->middleware('auth');
        $this->image = $image;
    }

    public function index()
    {
        $team = Team::all();
        
        return view('admin.about.team.index', compact('team'));
    }

    public function create()
    {
        return view('admin.about.team.create');
    }

    public function store(TeamRequest $request)
    {
        $data = $request->all();
        $team = Team::create($data);

        // If given photo then
        // Store photo in storage
        // And update the team
        if ($request->hasFile('pic')) {
            $team->image = $this->image->upload($request->file('pic'));
            $team->save();
        }

        return redirect()->route('admin.about.team.index');

    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('admin.about.team.edit', compact('team'));
    }

    public function update(TeamRequest $request, $id)
    {
        $team = Team::find($id);
        $inputs = $request->except(['_method', '_token']);
        $team->fill($inputs)->save();

        if ($request->hasFile('pic')) {
            $this->image->delete($team->image);
            $team->image = $this->image->upload($request->file('pic'));
        }
        $team->save();

        return redirect()->route('admin.about.team.index');
    }

    public function destroy($id)
    {
        //Search by id
        $team = Team::find($id);
        //Delete Image file
        $this->image->delete($team->image);
        //deleting team
        $team->delete();

        return redirect()->route('admin.about.team.index');
    }
}
