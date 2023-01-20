<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function index()
    {
        $registration = Registration::paginate(5);
        return view('form', ['regitrations' => $registration]);
    }
    public function register(Request $request)
    {
        $validate = $request->validate(
            [
                //'name' => ['min:10', 'uppercase', 'nullable'],

                /*Validation using Rule file-custom validation */
                //'name' => ['required', 'min:10', new Uppercase],

                /*Validation using closure function*/
                // 'name' => [
                //     'required', function ($attribute, $value, $fail) {
                //         if ($value === 'neha') {
                //             $fail('The' . $attribute . 'is invalid');
                //         }
                //     }
                // ],

                'name' => 'lowercase|nullable',
                'email' => 'required|email',
                'password' => 'required|max:6',
                'password_confirm' => 'required|same:password',
                'startdate' => 'required|date|after:yesterday',
                'enddate'  => 'required|date|after:startdate',
                'marks'  => 'required|integer|multiple_of:1|lt:100',
                'file_name'  => 'required|mimes:jpg,jpeg,png|max:1024'
            ]
        );

        /*image upload */
        $data =  str_replace(".", "", (string)microtime(true)) . '.' . $request->file_name->getClientOriginalExtension();
        /* store file to  public/registers */
        $image = $request->file('file_name')->storeAs('public/registers', $data);

        $request['password'] = Hash::make($request->password);
        $registration = Registration::create($request->only('name', 'email', 'password', 'startdate', 'enddate', 'marks') + ['file_name' => $data]);
        return redirect('/')->with('status', 'Data Inserted Successfully !!');

        /*json Response*/
        // return response()->json([
        //     'mes'   => 'done',
        //     'data'  => $registration
        // ]);
        //echo "<pre>";
        // dd($request->all());


    }
    public function edit($id)
    {
        $registration = Registration::find($id);
        return view('edit', ['regitrations' => $registration]);
    }
    public function update(Request $request, $id)

    {
        $validate = $request->validate(
            [

                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'startdate' => 'required|date|',
                'enddate'  => 'required|date|after:startdate',
                'marks'  => 'required|integer|multiple_of:1|lt:100',
                'file_name'  => 'mimes:jpg,jpeg,png'
            ]
        );
        /*image upload */
        $data =  str_replace(".", "", (string)microtime(true)) . '.' . $request->file_name->getClientOriginalExtension();
        /* store file to  public/registers */
        $image = $request->file('file_name')->storeAs('public/registers', $data);
        $request['password'] = Hash::make($request->password);
        Registration::findOrFail($id)->update($request->only('name', 'email', 'password', 'startdate', 'enddate', 'marks') + ['file_name' => $data]);;
        // dd('sone')
        return redirect('/')->with('status', 'Data Updated Successfully !!');
    }
    public function destroy($id)
    {
        Registration::destroy($id);
        return redirect('/')->with('status', 'Data Deleted Successfully !!');
    }
}
