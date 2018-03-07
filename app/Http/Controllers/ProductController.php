 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Product;

class ProductController extends Controller
{
    //

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $Product = $this->validate(request(),[
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::create($product);

        return back()->with('succes', 'Product has been added');
    }
}
