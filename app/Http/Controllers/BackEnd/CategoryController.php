<?php

namespace App\Http\Controllers\BackEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(30);
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        Category::create([
           'name'=>$request->name,
           'sub_head_category'=>$request->sub_head_category,
           'sub_category'=>strtoupper($request->sub_category),
        ]);
        Session::flash('success', 'Category Added Successfully');
        return redirect()->route('category.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $products = Product::where('sub_category', $category->sub_category)->orderBy('id', 'DESC')->get();
        foreach ($products as $product){
            $product->update(['sub_category' =>strtoupper($request->sub_category)]);
        }
        $category->update([
            'name'=>$request->name,
            'sub_head_category'=>$request->sub_head_category,
            'sub_category'=>strtoupper($request->sub_category),
        ]);

        Session::flash('success', 'Category Updated Successfully');
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $products = Product::where('sub_category', $category->sub_category)->orderBy('id', 'DESC')->get();
        foreach ($products as $product){
            $product->delete();
        }
        $category->delete();
        Session::flash('success', 'Category Deleted Successfully');
        return redirect()->route('category.index');
    }
    public function search(Request $request){
        $input = $request->item;
        $categories = Category::where('name', 'like', "%$input%")
            ->orWhere('sub_category', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.index', compact('categories'));
    }
}
