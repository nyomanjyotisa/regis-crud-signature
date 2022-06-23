<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = Registration::simplePaginate(10);
        $datas = Registration::all()->reverse();
        return view('index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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

        // dd($data);

        $validator = Validator::make(
            $data,
            [
                'room_no' => ['required'],
                'room_type' => ['required'],
                'arrival' => ['required'],
                'departure' => ['required'],
                'last_name' => ['required'],
                'first_name' => ['required'],
                'address' => ['required'],
                'place_date_birth' => ['required'],
                'passport_id_number' => ['required'],
                'nationality' => ['required'],
                'city' => ['required'],
                'email' => ['required', 'email'],
                'signature_path' => ['required'],
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Registration::create($data);

            return redirect ('/')->with(['success' => 'Create Registration Success']);
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
        $data = Registration::find($id);
        return view('detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Registration::find($id);
        return view('edit', compact('data'));
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
        $registrationData = Registration::find($id);
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'room_no' => ['required'],
                'room_type' => ['required'],
                'arrival' => ['required'],
                'departure' => ['required'],
                'last_name' => ['required'],
                'first_name' => ['required'],
                'address' => ['required'],
                'place_date_birth' => ['required'],
                'passport_id_number' => ['required'],
                'nationality' => ['required'],
                'city' => ['required'],
                'email' => ['required', 'email'],
                'signature_path' => ['required'],
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $registrationData->update($data);

            return redirect ('/')->with(['success' => 'Update Registration Data Success']);
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
        Registration::where('id', $id)->delete();
        return redirect ('/')->with(['success' => 'Delete Registration Data Success']);

    }
}
