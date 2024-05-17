<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //This will show produce page
    public function index()
    {

    }

    //This method will create eproduct page
    public function create()
    {
      return view('Products.create');  // 'product.create telling laravel which view file to use.
    }
   
    //This method will store producr in DB
    public function store(Request $request)
    {
     $rules=
     [
      'name'=>'required|min:5'
      'sku'=>'required|min:3'

     ]
    }
  
    //This method will edit a product

    public function edit()
    {

    }
   //This method will update a product

   public function update()
   {

   }

   //This method will delete a product
   public function delete()
   {

   }

}


