<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.menu.add',[
            'title'=>'Add new product'
        ]);
    }
}
