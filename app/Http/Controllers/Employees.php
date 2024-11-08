<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class Employees extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees=Employee::paginate(5);
        return view('index',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
          'name'=>'required',
          'email'=>'required | unique:employee_list,email|email',
          'phone'=>'required | unique:employee_list,phone|numeric',
          'joining_date'=>'required',
          'salary'=>'required'
        ]);
        $is_active=$request->has('is_active')?1:0;
        $data = $request->except('_token');
        $data['is_active']=$is_active;
        Employee::create($data);
        return redirect()->route('home')->withMessage('Employee registered succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emp=Employee::find($id);
        return view('show',['emp'=>$emp]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editEmployee=Employee::find($id);
        return view('edit',['emp'=>$editEmployee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required | unique:employee_list,email,'.$id.'|email',
            'phone'=>'required | unique:employee_list,phone,'.$id.'|numeric',
            'joining_date'=>'required',
            'salary'=>'required'
          ]);
        $is_active=$request->has('is_active')?1:0;
        $data=$request->except('_method','_token');
        $data['is_active']=$is_active;
        Employee::where('id',$id)->update($data);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('home');
    }
}
