<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\OrderResource;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show', 'store', 'update', 'destroy']);
    }


    public function index()
    {
        return OrderResource::collection(Order::with('driver')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $item = new Order;
         $item->num = $request->num;
         $item->description = $request->description;
         $item->save();

        return new OrderResource($item);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return OrderResource::collection(Order::where('id',$id)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Order::where('id',$id)->first();
        $item->num = $request->num;
        $item->description = $request->description;
        $item->save();

        return new OrderResource($item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Order::find($id);
        if($item->delete()){
            return 'Order ' . $id . ' - del';
        }
        else{
            return 'Order ' . $id . ' - not found';
        }
    }
}
