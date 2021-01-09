<?php

namespace App\Http\Controllers\BackEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Offer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(30);
        return view('backend.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->select('name')->distinct()->get();
        $offers = Offer::orderBy('id', 'DESC')->get();
        return view('backend.product.create', compact('categories', 'offers'));
    }

    public function store(Request $request)
    {
        $document = $request->file('photo');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/products/'.$request->category.'/',$document_name);

       Product::create([
          'category'=>$request->category,
          'sub_category'=>$request->sub_category,
          'image'=>$document_name,
           'title'=>$request->title,
           'product_code'=>$request->p_code,
           'description'=>$request->description,
           'offer'=>$request->offer,
           'pf'=>$request->pf,
           'prev_price'=>$request->pp,
           'new_price'=>$request->np,
           'discount'=>$request->discount,
       ]);
       Session::flash('success', 'Product added successfully');
       return redirect()->route('product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::orderBy('id', 'DESC')->select('name')->distinct()->get();
        $sub_categories = Category::where('name', $product->category)->orderBy('id','DESC')->get();
        $offers = Offer::orderBy('id', 'DESC')->get();
        return view('backend.product.edit', compact('product','categories', 'sub_categories', 'offers'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $d = Product::find($id);
        if(!empty($request->file('photo'))){
            if(!empty($d->image)){
                unlink('assets/images/products/'.$d->category.'/'.$d->image);
            }
            $document = $request->file('photo');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/images/products/'.$request->category.'/',$document_name);
            $product->update([
                'category'=>$request->category,
                'sub_category'=>$request->sub_category,
                'title'=>$request->title,
                'product_code'=>$request->p_code,
                'description'=>$request->description,
                'offer'=>$request->offer,
                'pf'=>$request->pf,
                'prev_price'=>$request->pp,
                'new_price'=>$request->np,
                'discount'=>$request->discount,
                'image'=>$document_name,
            ]);
        }
        else{
            $product->update([
                'category'=>$request->category,
                'sub_category'=>$request->sub_category,
                'title'=>$request->title,
                'product_code'=>$request->p_code,
                'description'=>$request->description,
                'offer'=>$request->offer,
                'pf'=>$request->pf,
                'prev_price'=>$request->pp,
                'new_price'=>$request->np,
                'discount'=>$request->discount,
            ]);
        }
        Session::flash('success', 'Product Updated Successfully');
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if(!empty($product->image)){
            unlink('assets/images/products/'.$product->category.'/'.$product->image);
        }
        $product->delete();
        Session::flash('success', 'Product Deleted succesfully');
        return redirect()->route('product.index');
    }

    public function search(Request $request){
        $input = $request->item;
        $products = Product::where('category', 'like', "%$input%")
            ->orWhere('sub_category', 'like', "%$input%")
            ->orWhere('title', 'like', "%$input%")
            ->orWhere('product_code', 'like', "%$input%")
            ->orWhere('pf', 'like', "%$input%")
            ->orWhere('prev_price', 'like', "%$input%")
            ->orWhere('new_price', 'like', "%$input%")
            ->orWhere('discount', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.product.index', compact('products'));
    }

    public function sub_category($cname){
        $sub_categories = Category::where('name', $cname)->get();
        return response()->json($sub_categories);
    }
}
