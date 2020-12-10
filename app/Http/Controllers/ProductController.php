<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Product;
use App\ProductUnit;
use App\Unit;
use App\Transaction;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flower.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
       $request->file('image')->store('public/img');

       $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->hashName(),
       ]);

       $product->units()->attach($request->category);
       return redirect()->back()->with('message', 'new prodcut added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        return view('flower.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('flower.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProductRequest $request, $id)
    {
        $data = Product::find($id);
        $unit_id = $data->units->first()->id;

        if(!$request->image){
            $data->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ]);
        }
        else{
            $request->file('image')->store('public/img');
            $data->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' => $request->image->hashName(),
            ]);
        }

        if($unit_id != $request->category){
            $data->units()->detach();
            $data->units()->attach($request->category);
        }

        return redirect()->back()->with('message','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $path = \storage_path('app\public\img\\'.$data->image);
        unlink($path);
        $data->units()->detach();
        $related = $data->carts()->get();
        foreach($related as $r){
            $tr = Transaction::find($r->transaction_id);
            if($tr != null){
                $tr->delete();
            }
            $r->delete();
        }
        $data->delete();
        return redirect()->back()->with('message', 'delete success');
    }

    public function search(Request $request, $id){
        $data = Unit::find($id);
		$sc = $request->search;
        $table = Product::where('name', 'LIKE', '%'.$sc.'%')->orWhere('price', 'LIKE', '%'.$sc.'%')->paginate(8);
        return view('category.show',compact('table','data'));
    }
}
