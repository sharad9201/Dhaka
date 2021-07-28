<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dhaka;

class DhakaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return response()->json(Dhaka::get(),200);
    }
    public function dhaka(){
        return response()->json(Dhaka::get(),200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $dhaka = Dhaka::create($request->all());
    //     return response()->json($dhaka);
    // }
        public function dhakastore(Request $request){
                $dhaka = Dhaka::create($request->all());
                return response()->json($dhaka);
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $dhaka = Dhaka::find($id);
        // if(is_null($dhaka)){
        //     return response()->json(["message"=>'Record not found'], 404);
        // }
        // return response()->json(Dhaka::find($id),200);
  
    }

    public function dhakaById($id){

        $dhaka = Dhaka::find($id);

        return response()->json(Dhaka::find($id), 200);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dhakaDelete($id){

        $dhaka = Dhaka::find($id);
        $dhaka->delete();
        return response()->json(null,204);
    }
}
