<?php

namespace App\Http\Controllers;

use App\Models\auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function showCreate()
    {
        return view('create');
    }
    
    public function create(Request $request)
    {
        $this -> validate($request, [
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'password'  => 'required',
        ]);
        auth::create([
            'name'      => $request -> name,
            'email'     => $request -> email,
            'phone'     => $request -> phone,
            'password'  => password_hash($request -> password, PASSWORD_DEFAULT),
        ]);
        return redirect() -> route('create.page') -> with('success', 'your account create has been success') -> compact('auth');
    }


    
 	
    
    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $auth = auth::findOrFail($id);
        return view('view', [
            'auth'  => $auth
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $auths = auth::latest() -> get();
        return view('store', [
            'auths' => $auths
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete_data = auth::findOrFail($id);
        $delete_data ->  delete();

        return redirect() -> route('store.page') -> with('success', 'Your Account Has Been Delete Successfully');
    }
}
