<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
    return view('restoran/user/user',[
        'users'=> User::all(),
        
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('restoran/user/tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name'=> 'required',
                'email'=> 'required|unique:users',
                'password'=>'required',
                'level'=>'required',
            ]
            );

            User::create($validatedData);
            return redirect('/user')->with('Sukses', 'Data Berhasil Ditambahkan!');
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
        return view('restoran/user/editdata',[
            'user'=>User::find($id),
        ]);
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
        $user = User::find($id);

        $rules =[
            'name'=> 'required',
            'password'=>'required',
            'level'=>'required',
        ];

        if($request->email != $user->email){
            $rules['email'] = 'required|unique:users';
        }
        $validatedData =  $request->validate($rules);

        User::where('id', $id)->update($validatedData);
        return redirect('/user')->with('Sukses', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/user')->with('Sukses', 'Data Berhasil Dihapus!');
    }
}
