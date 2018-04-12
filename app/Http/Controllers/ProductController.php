<?php

namespace App\Http\Controllers;

use Request as Request1;

use Illuminate\Http\Request as Request2;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("createproduct");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request2 $request)
    {
        // p1 = Product::create(Request1::all());
        $Product = new Product;
        $Product->pname = $request->pname;
        $Product->price = $request->price;
        if ($request->file('image') != NULL) {
          $path = $request->file('image')->store('upload');
          $Product->path = $path;
        }
        $Product->save();

        return 'Product successfully posted';
    }

    /**
     * Display the specified resource
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
}
