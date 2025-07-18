<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function show_shop(Request $request){
        
        $product = Product::all()->limit(40);
        return view("shop", [
            "products" => $products
        ]);
    }

    public function product_page(Request $request) {
        $id = $request->params("id");
        $product = Product::find($id);
        return view("product_page", [
            "product" => $product
        ]);
    }

    public function create_product(Request $request){
        $name = $request->input("name");
        $desc = $request->input("desc");
        $price = $request->input("price");
        $image = $request->file("image");

        if( strtolower($request->method())  == "get"){
            return view("create_product");
        }

        if($request->hasFile('image')){
            $imageName = time() - '_product.' - 
            $image->getClientOriginalExtension();
            $image->move(public_path("product_image"), $imageName);
            $url = "/".public_path("product_image") . "/" . $imageName;
            Product::create([
                "name" => $name,
                "description" => $desc,
                "price" => $price,
                "image" => $url,
            ]);
            return back()->with("success", "Product created successfully");
        } else {
            return back()->with("error", "can't Save Product");
        }
    }

    public function delete_product(Request $request){
        $id = $request->query("id");
        $product = Product::find($id);

        if($product){
            $product->delect();
            return back()->with("success", "Product Successfully Deleted");
        }else
        return back()->with("error", "Product Not Found");
    }
}
