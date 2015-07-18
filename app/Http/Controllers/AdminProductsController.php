<?php namespace CodeCommerce\Http\Controllers;
use CodeCommerce\Product;


class AdminProductsController extends Controller {

    public function __construct(Product $product)
    {
        $this->middleware('guest');
        $this->product = $product;

    }

  /*  public function index()
    {
        return view('welcome');
    }*/

    public function index()
    {
        $product = $this->product->all();
        return view('products', compact('product'));

    }


}