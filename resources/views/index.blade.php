@extends('layouts.app')
@section('content')
<!-- @if(session('message'))
<div class="alert alert-success">
  {{session('message')}}
</div>
@endif -->
<section class="px-2 min-h-screen sm:p-6 bg-gray-100 flex flex-col items-center justify-center" >
@if(session('message'))
                  <span>{{session('message')}}</span>
                  @endif
    <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl   border sm:w-11/12 mx-auto ">
       
        <h1 class="text-center font-bold text-2xl py-3 bg-red-200">Basic Laravel CRUD</h1>
        <div class="flex sm:items-end justify-between px-3 items-center gap-5 sm:gap-0  ">
           <h1 class="sm:text-xl font-medium py-3 ">Employee Registration</h1>
          
            <a href="{{route('employee.create')}}" class="hidden sm:block bg-blue-600 text-white   px-2 py-1 px-3 py-1 rounded">Create Employee</a>
            <a href="{{route('employee.create')}}" class="sm:hidden bg-blue-600 text-white   px-2 py-1 px-3 py-1 rounded"><i class="fa-solid fa-plus text-white"></i> Employee</a>
        </div>
        <table class="table-auto text-left">
            <tr class=" border-b-2">
                <th class="py-3  px-3">#</th>
                <th class="py-3  px-3">Name</th>
                <th class="py-3  px-3 hidden sm:table-cell">Email</th>
                <th class="py-3  px-3 hidden sm:table-cell">Phone</th>
                <th class="py-3  px-3 hidden sm:table-cell">Salary</th>
                <th class="py-3  px-3 hidden md:table-cell">Joined on</th>
                <th class="py-3  px-3 hidden lg:table-cell">Status</th>
                <th class="py-3  px-3">Actions</th>
            </tr>
            @if($employees)
            @foreach($employees as $key =>$emp)
            <tr class="border-b border-slate-300">
                <td class="py-2 px-3">{{$key+1}}</td>
                <td class="py-2 px-3" >{{$emp->name}}</td>
                <td class="py-2 px-3 hidden sm:table-cell" >{{$emp->email}}</td>
                <td class="py-2 px-3 hidden sm:table-cell" >{{$emp->phone}}</td>
                <td class="py-2 px-3 hidden sm:table-cell" >&#x20b9;{{$emp->salary}}</td>
                <td class="py-2 px-3 hidden md:table-cell" >{{$emp->joining_date}}</td>
                <td class="py-2 px-3 hidden lg:table-cell" >{{$emp->is_active==1?'Active':'Inactive'}}</td>
                <td class="py-2 px-3">
                  <div class="flex w-full">
                  <a href="{{route('employee.show',$emp->id)}}" class="p-1">
                        <i class="fa-solid fa-eye text-blue-700 hover:text-blue-900"></i>
                    </a>
                    <a href="{{route('employee.edit',$emp->id)}}" class="p-1">
                        <i class="fa-regular fa-pen-to-square text-yellow-500 hover:text-yellow-700"></i>
                    </a>
                    <form action="{{route('employee.destroy',$emp->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-1">
                        <i class="fa-solid fa-trash text-red-700 hover:text-red-900"></i>
                    </button>
                    </form>
                  </div>
                </td>
            </tr>
            @endforeach
            @endif
            </table>
           
            <div class="px-3 py-2 bg-blue-300">
            {{$employees->links()}}  
            </div>
           
        
    </article>
</section>
<!-- 
<div class="row">
  <div class="col-2"></div>
  <div class="col-8" style="width: 100%;">
    <div class=" card w-fit">
      <div class="card-body w-fit">
        <strong>Employee List</strong>
        <a href="{{route('employee.create')}}" class="btn btn-primary btn-xs float-end py-0">Create Employee</a>
        <table class="table table-responsive table-bordered table-stripped w-full" style="margin-top:10px;">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th class="hidden  sm:table-cell md:table-cell lg:table-cell">Joining Date</th>
              <th class="hidden  sm:table-cell md:table-cell lg:table-cell">Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if($employees)
            @foreach($employees as $key => $employee)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$employee->employee_name}}</td>
              <td>{{$employee->email}}</td>
              <td class="text-nowrap  hidden  sm:table-cell md:table-cell lg:table-cell">{{$employee->joining_date}}</td>
              <td><span type="button" class="btn {{$employee->is_active==1?'btn-success':'btn-danger'}}  btn-xs py-0 w-100 hidden sm:table-cell md:table-cell lg:table-cell">{{$employee->is_active==1?'Active':'Inactive'}}</span></td>
              <td>
                <div class="d-flex">
                  <a href="{{route('employee.show',['id'=>$employee->id])}}" class="btn btn-primary btn-xs py-0 "><i class="fa-solid fa-eye text-white"></i></a>
                  <a href="{{route('employee.edit',['id'=>$employee->id])}}" class="btn btn-warning btn-xs py-0 mx-1"><i class="fa-solid fa-pen-to-square "></i></a>
                  <form action="{{route('employee.destroy',$employee->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-xs py-0 "><i class="fa-solid fa-trash "></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
        {{$employees->links()}}
      </div>
    </div>
  </div>
</div> -->

@endsection






