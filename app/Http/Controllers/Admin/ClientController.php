<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Client;
use App\Service\Image;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function __construct(Image $image)
    {
    	$this->middleware('auth');
        $this->image = $image;
    }

    public function index()
    {
        $client = Client::all();
        
        return view('admin.client.index', compact('client'));
    }

    public function create()
    {
        return view('admin.client.create');
    }

    public function store(ClientRequest $request)
    {
        $data = $request->all();
        $client = Client::create($data);

        // If given photo then
        // Store photo in storage
        // And update the client
        if ($request->hasFile('client')) {
            $client->client_img = $this->image->upload($request->file('client'));
            if ($request->hasFile('company')) {
	            $client->company_img = $this->image->upload($request->file('company'));
	            $client->save();
            }
	            $client->save();
        }

        return redirect()->route('admin.client.index');

    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.client.edit', compact('client'));
    }

    public function update(ClientRequest $request, $id)
    {
        $client = Client::find($id);
        $inputs = $request->except(['_method', '_token']);
        $client->fill($inputs)->save();

        if ($request->hasFile('client')) {
            $this->image->delete($client->client_img);
            $client->client_img = $this->image->upload($request->file('client'));
        }
        if ($request->hasFile('company')) {
            $this->image->delete($client->company_img);
            $client->company_img = $this->image->upload($request->file('company'));
        }
        $client->save();

        return redirect()->route('admin.client.index');
    }

    public function destroy($id)
    {
        //Search by id
        $client = Client::find($id);
        //Delete Image file
        $this->image->delete($client->client_img);
        $this->image->delete($client->company_img);
        //deleting client
        $client->delete();

        return redirect()->route('admin.client.index');
    }
}
