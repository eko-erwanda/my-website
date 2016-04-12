<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Skill;
use App\Http\Requests\SkillRequest;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function create()
    {
    	return view('admin.about.skillset.skill.create');
	}

	public function store(SkillRequest $request)
    {
        $data = $request->all();
        $skill = Skill::create($data);

        return redirect()->route('admin.skillset.index');
    }

    public function edit($id)
    {
        $skill = Skill::find($id);

        return view('admin.about.skillset.skill.edit', compact('skill'));   
    }

    public function update(SkillRequest $request, $id)
    {
        $skill = Skill::find($id);
        $inputs = $request->except(['_method', '_token']);
        $skill->fill($inputs)->save();
       
        return redirect()->route('admin.skillset.index');
    }

    public function destroy($id)
	{
		$skill = Skill::find($id);

        $skill->delete();
        
        return redirect()->route('admin.skillset.index');
	}
}
