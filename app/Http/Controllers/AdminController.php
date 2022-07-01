<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = Registration::simplePaginate(10);
        $datas = User::where('is_super_admin', '!=', '1')->get()->reverse();

        // dd($datas);
        return view('admin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $validator = Validator::make(
            $data,
            [
                'name' => ['required'],
                'email' => ['required'],
                'password' => ['required'],
            ]
        );

        $data['email_verified_at'] = now();
        $data['is_super_admin'] = 0;
        $data['password'] = Hash::make($request->password); 
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            User::create($data);
            return redirect('/admin')->with(['success' => 'Create Admin Success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registrationData = User::find($id);
        
        if ($request->password == null) {
            $data = $request->except(['password']);
        } else {
            $data = $request->all();
            $data['password'] = Hash::make($request->password); 
        }

        $validator = Validator::make(
            $data,
            [
                'name' => ['required'],
                'email' => ['required'],
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $registrationData->update($data);

            return redirect('/admin')->with(['success' => 'Update Admin Data Success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Delete Admin Data Success']);

    }
}
