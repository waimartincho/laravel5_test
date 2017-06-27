<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Products;
use App\Http\Requests\CreateRequest;
use Intervention\Image\ImageManagerStatic as Image;
use Session;

class Product extends Controller
{
    public function index()
    {
    	//return view('product.index');
        //$products = Products::all();
        $products = Products::paginate(3);
        return view('product.index')->with('products',$products);
    }

    public function create()
    {
    	return view('product.create');
    }

    public function store(CreateRequest $request)
    {
        $createdata = $request->all();

        $img = $_FILES['photo'];
        //var_dump($img);die;
        if (!empty($img['name'])) 
        {
            $file   = time().'_'.rand(1111,9999).'.jpg';
            $upload = $img['tmp_name'];
            $photo  = Image::make($upload);
            $photo->save(public_path('files/products/'.$file));
            $createdata['photo'] = $file;
        }
        Products::create($createdata);
        Session::flash('flash_message', 'Data successfully added!');
        return redirect()->route('product.index');
        //return redirect()->action('Product@list');
    }

    public function edit($id)
    {
    	//return view('product.edit');
        $data = Products::findOrFail($id);
        return view('product.edit')->with('data',$data);
    }

    public function update($id, CreateRequest $request)
    {
        $data = Products::findOrFail($id);
        $dataInsert = $request->all();

        $img = $_FILES['photo'];
        if (!empty($img['name'])) 
        {
            $file   = time().'_'.rand(1111,9999).'.jpg';
            $upload = $img['tmp_name'];
            $photo  = Image::make($upload);
            $photo->save(public_path('files/products/'.$file));
            $dataInsert['photo'] = $file;
        }

        $data->fill($dataInsert)->save();
        Session::flash('flash_message','Data successfully updated');
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
    	$data = Products::findOrFail($id);
        $data->delete();
        Session::flash('flash_message', 'Data successfully deleted!');
        return redirect()->route('product.index');
    }

    public function show()
    {
    	
    }
}
