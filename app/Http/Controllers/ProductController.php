<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Product;

class ProductController extends Controller{

    public function index(): View{
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();

        return view('product.index')->with("viewData", $viewData);
    }


    public function show(string $id) : View | RedirectResponse {
        $viewData = [];
        $product = Product::findOrFail($id);

        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] = $product["name"]." - Product information";
        $viewData["product"] = $product;

        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View{
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";
        
        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request): View{
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0"
        ]);

        $viewData = [];
        $viewData["title"] = "Product created";
        $viewData["subtitle"] = $request->input('name')." has been created successfully";
        $viewData["product"] = $request->all();
        
        return view('product.success')->with("viewData",$viewData);
        
        // dd($request->all());
        //here will be the code to call the model and save it to the database
    }
}