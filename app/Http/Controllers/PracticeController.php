<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $practices = Practice::where('marks', 100)->get();

        // dd($practices);

        // $practices->toQuery()->update([
        //     'marks' => '100',
        // ]);
        // return 'done';

        // return view('layout', ['practices' => $practices]);

        $practices = Practice::paginate(5);
        return view('layout', ['practices' => $practices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|string|max:255',
            'city'  => 'required|string',
            'gender'  => 'required',
            'marks'  => 'required|regex:/^[0-9]{2}(\-[0-9]{4})?$/',
            //'lang' => 'required',
        ], [
            // 'name.required' => 'Name Is Required',
            'city.required' => 'City Is Required',
            'marks.required' => 'Marks Is Required',
        ]);


        //Data insertion using Variable
        //dd($request->all());
        // $practice = new Practice;
        // $practice->name =  $request->name;
        // $practice->city =  $request->city;
        // $practice->marks =  $request->marks;
        // $practice->save();

        //insertion using create method
        Practice::create($request->only('name', 'city', 'gender', 'lang', 'marks'));

        return redirect(route('index'))->with('status', 'Data Inserted Successfully !!');
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
        $practice = Practice::find($id);
        return view('editform', ['practice' => $practice]);
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
        $this->validate($request, [
            'name'  => 'required|string|max:255',
            'city'  => 'required|string',
            'gender'  => 'required',
            //'lang' => 'required',
            'marks'  => 'required|numeric/max:3',
        ], [
            'name.required' => 'Name Is must Fill',

        ]);



        // $practice = Practice::find($id);
        // $practice->name =  $request->name;
        // $practice->city =  $request->city;
        // $practice->marks =  $request->marks;
        // $practice->save();
        Practice::findOrFail($id)->update($request->only('name', 'city', 'gender', 'lang', 'marks'));
        // dd('sone')
        return redirect(route('index'))->with('status', 'Data Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Practice::destroy($id);
        return redirect(route('index'))->with('status', 'Data Deleted Successfully !!');
    }
}
