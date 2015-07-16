<?php namespace CodeCommerce\Http\Controllers;
use CodeCommerce\Category;
use CodeCommerce\Product;
/**
 * Created by PhpStorm.
 * User: Ricardo_2
 * Date: 15/07/2015
 * Time: 15:42
 */

class WelcomeController extends Controller {
    /**
     *
     */
    public function __construct(Category $category, Product $product)
    {
        $this->middleware('guest');
        $this->categories = $category;
        $this->product = $product;
    }

   public function index()
    {
        return view('welcome');
    }

    public function exemplo()
    {
        $categories = $this->categories->all();
        $product = $this->product->all();
        return view('exemplo', compact('categories','product'));

    }
}