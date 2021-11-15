<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

    public function login(Request $request)
    {
    //  dd("asdas");
        // $this->validate($request,
 
        //     ['email'=>'required'],
 
        //     ['password'=>'required']
            
        // );
        
        $email = $request->input('email');
        $pass = $request->input('password');        

        // $users = DB::table('m_user')->where(['email'=> $email])->first();
        $users = DB::table('m_user')->where('email', $email)->first();
        // $users = DB::table('m_user')->get();
        
            if(count(array($email)) == 0){
    
                return "tidak ada email di db";
    
            } else
            
            // if($users->email == $email AND Hash::check($pass, $users->password) ){
            //    return redirect('/dashboard');
    
            // } else {
                    
            //    return "salah boss";
        
            // }
            if($users->email == $email && $users->password == $pass){
                return redirect('/dashboard');
        
                } else {
                    
                return "salah bisss";
        
                }
            dd($users);
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
