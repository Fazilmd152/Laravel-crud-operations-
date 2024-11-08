@extends('layouts.app')
@section('content')

<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            
      
            <form action="{{route('employee.update',$emp->id)}}" method="POST" class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            @method('PUT')
            @csrf  
            <div class="grid relative gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                  <p class="font-medium text-lg">Update Employee Details</p>
                  <p>Please fill out the required fields to update.</p>
                 
                </div>
                       <a href="{{route('home')}}" class="absolute top-1  text-blue-900 underline right-0 text-sm">Back to Home&#x2192;</a>
                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                      <label for="full_name">Full Name</label>
                      <input type="text" name="name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$emp->name}}" />
                      @if($errors->has('name'))
                      <span class="font-bold text-red-600">
                            <strong>{{$errors->first('name')}}</strong>
                        </span>
                        @endif
                    </div>
      
                    <div class="md:col-span-5">
                      <label for="email">Email Address</label>
                      <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$emp->email}}" placeholder="email@domain.com" />
                      @if($errors->has('email'))
                      <span class="font-bold text-red-600">
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="md:col-span-5">
                      <label for="email">Phone</label>
                      <input type="text" name="phone" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$emp->phone}}"  />
                     @if($errors->has('phone'))
                      <span class="font-bold text-red-600">
                            <strong>{{$errors->first('phone')}}</strong>
                        </span>
                        @endif
                    </div>
      
                    <div class="md:col-span-3">
                      <label for="address">Salary</label>
                      <input type="text" name="salary" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$emp->salary}}" placeholder="" />
                      @if($errors->has('salary'))
                      <span class="font-bold text-red-600">
                            <strong>{{$errors->first('salary')}}</strong>
                        </span>
                        @endif
                    </div>
      
                    <div class="md:col-span-2">
                      <label for="city">Joined on</label>
                      <input type="date" name="joining_date" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$emp->joining_date}}" placeholder="" />
                      @if($errors->has('joining_date'))
                      <span class="font-bold text-red-600">
                            <strong>{{$errors->first('joining_date')}}</strong>
                        </span>
                        @endif
                    </div>
      
                    
      
                    <div class="md:col-span-5">
                      <div class="inline-flex items-center">
                        <input type="checkbox" name="is_active" id="billing_same" class="form-checkbox"  {{$emp->is_active==1?'checked':''}}/>
                        <label for="billing_same" class="ml-2" >Is active employee.</label>
                      </div>
                    </div>
      
                    
            
                    <div class="md:col-span-5 text-right">
                      <div class="inline-flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                      </div>
                    </div>
      
                  </div>
                </div>
              </div>
            </form>
          </div>
      
        </div>

<!-- <a href="{{route('home')}}" class="text-light">Back to home</a>
<div class="card">
    <div class="card-body">
        <p style="font-size:20px; font-weight:bold;">Update Employee</p>
        <form action="{{route('employee.update',['id'=>$emp->id])}}" class="was-validated" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group has-validation">
                <label for="name">Name</label>
                <input type="text" name="employee_name" id="name" class="form-control {{$errors->has('employee_name')?'is-invalid':''}}" value="{{$emp->employee_name}}" required>
                @if($errors->has('employee_name'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('employee_name')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" value="{{$emp->email}}" required>
                @if($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-validation   ">
                <label for="joining_date">Joining date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control {{$errors->has('joining_date')?'is-invalid':''}}" value="{{$emp->joining_date}}" required>
                @if($errors->has('joining_date'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('joining_date')}}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-validation">
                <label for="joining_salary">Joining salary</label>
                <input type="number" name="salary" placeholder="" id="joining_salary" class="form-control" value="{{$emp->salary}}" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <div class="form-group has-validation">
                <label for="is_active">Active</label><br>
                <input type="checkbox" name="is_active" id="is_active" value="{{$emp->is_active}}" {{$emp->is_active==1?'checked':''}}>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</div> -->
@endsection