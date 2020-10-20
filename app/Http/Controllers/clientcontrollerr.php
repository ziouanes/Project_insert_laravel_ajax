<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;

class clientcontrollerr extends Controller
{
    public function ss()
    {
        return view('welcome');
    }

    public function index()
    {
        $datas['rows'] = Client::all();
        return view('client')->with($datas);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'position' => 'required',
            'mobile' => 'required',
        ]);


        $data = new Client;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
        $data->mobile = $request->mobile;
        $data->save();

        $respond['row'] = $data;
        return view('row')->with($respond);
    }

    //get data of client

    public function edit($id)
    {
        $data = Client::findorFail($id);
        return response()->json($data);
    }

    //update all data
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'position' => 'required',
            'mobile' => 'required',
        ]);


        $data = Client::findOrFail($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
        $data->mobile = $request->mobile;
        $data->save();

        $respond['row'] = $data;
        return view('row_edit')->with($respond);
    }

    //delete function

    public function delete($id)
    {
        Client::findOrFail($id)->delete();
        return response()->json(['success' => "delete sucess", 'id' => $id]);
    }
}
