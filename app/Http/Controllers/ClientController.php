<?php

namespace CsProjeto\Http\Controllers;

use CsProjeto\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        return \CsProjeto\Client::all();
    }


    public function store(Request $request)
    {
        return Client::create($request->all());
    }

    public function show($id)
    {
        return Client::find($id);
    }

    public function edit(Request $request, $id){
        Client::find($id)->update($request->all());
    }

    public function destroy($id)
    {
        Client::find($id)->delete();
    }

}
