@extends('layouts.app')
@section('content')

<section class="flex flex-col items-center justify-center h-screen">
    
<div class="bg-white relative overflow-hidden shadow rounded-lg border">
<a href="{{route('home')}}" class=" absolute top-3 pr-2 right-0 text-blue-700 pl-1 pb-1 underline text-sm">Go to Home&#x2192;</a>
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                User Profile
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                This is some information about the {{$emp->name}}.
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Full name
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$emp->name}}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                       {{ $emp->email}}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Phone number
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$emp->phone}}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Salary
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$emp->salary}}
                         
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Status
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$emp->is_active==1?'Active':'Inactive'}}
                         
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    </section>
        <!-- <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Employee details</p>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$emp->employee_name}}" readonly>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$emp->email}}" readonly>
                </div>

                <div class="form-group">
                    <label for="joining_date">Joining date</label>
                    <input type="date" class="form-control" value="{{$emp->joining_date}}" readonly>
                </div>

                <div class="form-group">
                    <label for="joining_salary">Joining salary</label>
                    <input type="number" class="form-control" value="{{$emp->salary}}" readonly >
                </div>

                <div class="form-group">
                    <label for="is_active" >Active</label><br>
                    <input type="checkbox"  readonly />
                </div>
                <a href="{{route('home')}}" class="btn btn-primary">Back</a>
            </div>
        </div> -->
@endsection