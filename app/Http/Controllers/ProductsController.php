<?php namespace CodeCommerce\Http\Controllers;
use CodeCommerce\Product;


class ProductsController extends Controller {

    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;

    }

  /*  public function index()
    {
        return view('welcome');
    }*/

    public function index()
    {
        $products = $this->productModel->all();
        return view('products.index',compact('products'));

    }


}