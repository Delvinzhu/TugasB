<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateUnitRequest;
use App\Unit;
use App\Transaction;
class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Unit::all();
        return view('category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data  = Unit::find($id);
        $table = $data->products()->paginate(8);
        return view('category.show', compact('data', 'table'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data  = Unit::find($id);
        return view('category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnitRequest $request, $id)
    {
        $data = Unit::find($id);

        if(!$request->image){

            $data->update([
                'name' => $request->name,
            ]);

        }else{
            $request->file('image')->store('public/img');

            $data->update([
                'name' => $request->name,
                'image' => $request->image->hashName(),
            ]);
        }

        return redirect()->back()->with('message','Update Category Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Unit::find($id);
        $path = \storage_path('app\public\img\\'.$data->image);
        unlink($path);
        $related = $data->products()->get();
        foreach($related as $r){
            foreach($r->carts()->get() as $cart){
                $tr = Transaction::find($cart->transaction_id);
                if($tr != null){
                    $tr->delete();
                }
                $cart->delete();
            }
            $r->delete();
        }
        $data->products()->detach();
        $data->delete();
        return redirect()->back()->with('message', 'delete succes');
    }
}
