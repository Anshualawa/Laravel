@extends('layouts.mainForm')
@push('title')
<title> Registration </title>
@endpush

@section('registration-form')
<div class="container my-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="row p-5">
                <div class="shadow bg-light p-5 rounded-3">
                    <form action="{{ url('/') }}/register" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" />
                            <span class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" value="{{old('email')}}" />
                            <span class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" />
                            <span class="text-danger">
                                @error('password')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                name="password_confirmation" />
                            <span class="text-danger">
                                @error('password_confirmation')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection