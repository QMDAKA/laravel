<?php

namespace App\Http\Controllers;

use App\HocSinh;
use Illuminate\Http\Request;

use App\Http\Requests;

class RestFullController extends Controller
{
    //
    public function index(){


        return view('restful.list');

    }
    public  function create(){

        return view('restful.add');
    }
    public function edit($id){
        return view('restful.edit');

    }
    public function store(Request $request){
        $hocsinh=new HocSinh();
        $hocsinh->hoten=$request->txtHoTen;
        $hocsinh->toan=$request->txtToan;
        $hocsinh->ly=$request->txtLy;
        $hocsinh->hoa=$request->txtHoa;
        $hocsinh->save();


    }
}
