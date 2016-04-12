<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Service;
use App\Service\Image;
use App\Http\Requests\ServiceRequest;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function __construct(Image $image)
    {
    	$this->middleware('auth');
        $this->image = $image;
    }

    public function index()
    {
        $service = Service::all();
        
        return view('admin.service.index', compact('service'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(ServiceRequest $request)
    {
        $data = $request->all();
        $service = Service::create($data);

        // If given photo then
        // Store photo in storage
        // And update the service
        if ($request->hasFile('pic')) {
            $service->image = $this->image->upload($request->file('pic'));
            $service->save();
        }

        return redirect()->route('admin.service.index');

    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $inputs = $request->except(['_method', '_token']);
        $service->fill($inputs)->save();

        if ($request->hasFile('pic')) {
            $this->image->delete($service->image);
            $service->image = $this->image->upload($request->file('pic'));
        }
        $service->save();

        return redirect()->route('admin.service.index');
    }

    public function destroy($id)
    {
        //Search by id
        $service = Service::find($id);
        //Delete Image file
        $this->image->delete($service->image);
        //deleting service
        $service->delete();

        return redirect()->route('admin.service.index');
    }
}
