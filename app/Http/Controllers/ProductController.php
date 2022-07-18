<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $response = Http::get('https://api.packt.com/api/v1/products?token=k7CLlDr4uI8vht4h44jK6OMFPqCBESvf8aBBAnM9');        
        $categories = array();
        $productsByCategory =  array();
        foreach($response['products'] as $res)
        {
            array_push($categories,$res['categories'][2]);  
            $productsByCategory[$res['categories'][2]]['products'][] = $res;  
        }

        return view('index', ['categories' =>array_values(array_unique($categories)),'productsbycategory'=>$productsByCategory]);
       
    }

    public function getProductById($id)
    {
        $productDetails = Http::get('https://api.packt.com/api/v1/products/'.$id.'?token=k7CLlDr4uI8vht4h44jK6OMFPqCBESvf8aBBAnM9');
        
        return view('product-details', ['productdetails' =>$productDetails]);


    }
}
