<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdcutStore;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.menu.add',[
            'title'=>'Add new product'
        ]);
    }
    public function store(ProdcutStore $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $amount = $request->input('amount');
        $price = $request->input('price');
        $types = $request->input('types');

        #Copy image and store it in public/img
        $image = $request->file('url');
        $path = public_path('img/'.$types);
        $imageName = $image->getClientOriginalName();
        $image->move($path,$imageName);
        $url = 'img/'.$types.'/'.$imageName;

        DB::table('products')->insert([
            'name'=>$name,
            'description'=>$description,
            'amount'=>$amount,
            'price'=>$price,
            'sale'=>0,
            'types'=>$types,
            'url'=>$url,
            'created_at'=>Carbon::now(),
            'updated_at'=>null
        ]);
        return redirect()->route('products/add')->with('success','Added new product successfully!');
    }

    public function index()
    {
        return view('admin.menu.list',[
            'title'=>'List of products',
            'data_product'=>Product::paginate(10)
        ]);
    }
}
