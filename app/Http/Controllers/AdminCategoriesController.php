<?php namespace CodeCommerce\Http\Controllers;
use CodeCommerce\Category;


class AdminCategoriesController extends Controller {

    public function __construct(Category $category)
    {
        $this->middleware('guest');
        $this->categories = $category;

    }

  /*  public function index()
    {
        return view('welcome');
    }*/

    public function index()
    {
        $categories = $this->categories->all();
        return view('categories', compact('categories'));

    }


}