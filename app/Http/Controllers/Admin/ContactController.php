<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function __construct()
	{
		// $this->middleware('auth');
		$this->middleware('auth');
	}


	public function index()
	{
        $contact = Contact::all();
		
		return view('admin.contact.index', compact('contact'));
	}

	public function create()
	{
		return view('admin.contact.create');
	}

	public function store(ContactRequest $request)
	{
		$data = $request->all();
        $contact = Contact::create($data);


        return redirect()->route('admin.contact.index');
	}

	public function edit($id)
	{
		$contact = Contact::find($id);

        return view('admin.contact.edit', compact('contact'));
	}

	public function update(ContactRequest $request, $id)
	{
		$contact = Contact::find($id);
        $inputs = $request->except(['_method', '_token']);
        $contact->fill($inputs)->save();

        
        return redirect()->route('admin.contact.index');
	}

	public function destroy($id)
	{
		$contact = Contact::find($id);

        $contact->delete();
        
        return redirect()->route('admin.contact.index');
	}
}
