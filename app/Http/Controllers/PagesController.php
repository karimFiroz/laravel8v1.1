<?php

namespace App\Http\Controllers;
use App\models\Product;
use App\models\ProductImage;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   
    
     public function index()
    {
        return view('pages.home');
    }
    
    
    
    
    
  public function products()
  {
    $products=Product::orderBy('id','desc')->get();
    return view('pages.products.index')->with('products',$products);
     }
    
    
    
    
     public function all_products()
    {
        return view('pages.products.all_products');
    }
    
    
    
          public function welcome()
    {
        return view('pages.welcome');
    }
    
    
    
    public function contact()
    {
        return view('pages.contact');
    }
    
    

    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
