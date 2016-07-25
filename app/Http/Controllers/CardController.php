<?php

namespace App\Http\Controllers;

use App\Cards;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardController extends Controller
{
    //

    public function index(){

        $cards=Cards::all();

        return response()->json($cards);

    }

    public function postCards(Request $request){
        $newCard=new Cards();
        $newCard->name=$request->name;
        $newCard->price=$request->price;
        $newCard->save();

    }
    public function cardById($id){
        $cards=Cards::find($id);
        return response()->json($cards);

    }


}
