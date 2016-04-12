<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Portofolio;
use App\Service\Image;
use App\Http\Requests\PortofolioRequest;
use App\Http\Controllers\Controller;

class PortofolioController extends Controller
{
    public function __construct(Image $image)
    {
    	$this->middleware('auth');
        $this->image = $image;
    }

    public function index()
    {
        $portofolio = Portofolio::all();
        
        return view('admin.portofolio.index', compact('portofolio'));
    }

    public function create()
    {
        $data = [
            '' => '',
            'web' => 'Web',
            'logo' => 'Logo',
            'brosur' => 'Brosur',
            'packaging' => 'Packaging',
        ];
        return view('admin.portofolio.create', compact('data'));
    }

    public function store(PortofolioRequest $request)
    {
        $data = $request->all();
        $portofolio = Portofolio::create($data);

        // If given photo then
        // Store photo in storage
        // And update the portofolio
        if ($request->hasFile('pic')) {
            $portofolio->image = $this->image->upload($request->file('pic'));
            $portofolio->save();
        }

        return redirect()->route('admin.portofolio.index');

    }

    public function edit($id)
    {
        $data = [
            '' => '',
            'web' => 'Web',
            'logo' => 'Logo',
            'brosur' => 'Brosur',
            'packaging' => 'Packaging',
        ];
        $portofolio = Portofolio::find($id);
        return view('admin.portofolio.edit', compact('portofolio','data'));
    }

    public function update(PortofolioRequest $request, $id)
    {
        $portofolio = Portofolio::find($id);
        $inputs = $request->except(['_method', '_token']);
        $portofolio->fill($inputs)->save();

        if ($request->hasFile('pic')) {
            $this->image->delete($portofolio->image);
            $portofolio->image = $this->image->upload($request->file('pic'));
        }
        $portofolio->save();

        return redirect()->route('admin.portofolio.index');
    }

    public function destroy($id)
    {
        //Search by id
        $portofolio = Portofolio::find($id);
        //Delete Image file
        $this->image->delete($portofolio->image);
        //deleting portofolio
        $portofolio->delete();

        return redirect()->route('admin.portofolio.index');
    }
}
