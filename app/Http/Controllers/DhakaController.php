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

    function search($design, Dhaka $dhaka){
        
       
        return Dhaka::where("design","like","%".$design."%")->get();
    }

    function buyProduct(Request $request,Dhaka $dhaka){  // this can directly ask request, check if the data is null and finds 'id' in the model directly
        
        // $dhaka = Dhaka::find($id);

        // if(is_null($dhaka)){
        //     return response()->json(["message"=>"record not found for deletion"],404);

        // }
        
        $item_count = $request->stocks;
        //gets the request form the client
        if($item_count > $dhaka->stocks){         //checks if the items is available
            return response()->json(["requested amount invalid "],400);
        }
        // query to deduct the stocks if custommer  buys any item
        $dhaka->update(["stocks" => $dhaka->stocks- $item_count]);
        return response()->json($dhaka,200);



    }
    function addStocks(Request $request, Dhaka $dhaka){

            $dhaka->update(["stocks"=> $dhaka->stocks + $request->stocks]);
              return response()->json($dhaka,200);
    }

    // function addproductPrice(Request $request, Dhaka $dhaka){

    //     $dhaka->update(["price"=> $dhaka->price * $request->item] );
    // }
    
}
