<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dhaka;

use Validator;

class DhakaController extends Controller
{
    
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
   
        public function dhakastore(Request $request){

            $rules = [
                'design'=>'required',
                'materials'=>'required',
                'items'=>'required',
                'stocks'=>'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if($validator->fails()){
                return response()->json($validator->error(),400);
            }
                $dhaka = Dhaka::create($request->all());
                return response()->json($dhaka);
        }
  
    public function dhakaById($id){

        $dhaka = Dhaka::find($id);
        if(is_null($country)){
            return response()->json(["message"=>"record not found"], 404);
        }

        return response()->json(Dhaka::find($id), 200);

    }


    public function update(Request $request, $id)
    {
        //
    }
    public function dhakaUpdate(Request $request,$id){

        $dhaka = Dhaka::find($id);

        if(is_null($dhaka)){
            return response()->json(["messsage"=>"record not found"],404);
        }

        $dhaka->update($request->all());
        return response()->json($dhaka,200);
    }

   

    public function dhakaDelete($id){

        $dhaka = Dhaka::find($id);

        if(is_null($dhaka)){
            return response()->json(["message"=>"record not found for deletion"],404);
        }
        $dhaka->delete();
        return response()->json(null,204);
    }

    function search($design){
        
       
        return Dhaka::where("design","like","%".$design."%")->get();
    }

    
}
