<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth/login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required|min:8',
        ],[
			'email.required' => 'email harus di isi',
			'password.required' => 'Password harus di isi',
			'password.min' => 'Password minimal harus 8 karakter'
		]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()]);
        }

		if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json([
                'success'=> ['Berhasil Login']
            ]); 
        }else{
            $user = User::where('email',$request->email)->first();

            if(!$user){
                return response()->json([
                    'errors'=> ['email'=>['email tidak terdaftar']]
                ]);
            }
            if(!Hash::check($request->password, $user->password)){
                return response()->json([
                    'errors'=> ['password'=>['Password tidak terdaftar']]
                ]);
            }
        }
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
        //
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
}
