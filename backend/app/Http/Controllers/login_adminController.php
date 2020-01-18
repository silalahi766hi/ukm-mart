<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return response()->json($data,200);
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
    public function store(Request $request)
    {
         login_admin::create([
         'User_name'=>$request->input('User_name'),
             'Name'=>$request->input('Name'),
         ]);

         return response()->json('data board berhasil di simpan',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // $login_admin = login_admin::find($id);
        // if($login_admin == null)
        // {
        //     return response()->json('id tidak dikenali',404);
        // }
        // else
        // {
        //     $login_admin->=$request->input('creator_id');
        //     $login_admin->name=$request->input('name');

        //     $login_admin->save();
        //     return response()->json('board berhasil di rubah',200);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Login_admin =login_admin ::find($id);
        $Login_admin->delete();

        return response()->json('board berhasil di hapus',200);
    }
}
