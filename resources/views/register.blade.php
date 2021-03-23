@extends('layouts.user.master')


@section('content')
<div class="container col-10">
    <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 1rem;">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5">
                    <div class="p-5">
                        <div class="text-center">
                            <h2 class="h2 text-gray-900 mb-4">Hello!</h2>
                            <h4 class="h5 text-gray-900 mb-4">Create your account</h4>
                        </div>
                        <form id="user-create" method="POST" action="{{action('StudentController@store')}}" autocomplete="off" >
                            @csrf
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" name="category" id="category">
                                    <option selected disabled >Please Select One</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="first-name">First Name</label>
                                <input class="form-control" id="first-name" name="firstname" type="text" placeholder="John">
                            </div>

                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input class="form-control" id="last-name" name="lastname" type="text" placeholder="Snow">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Snow">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input class="form-control" id="mobile" name="mobile" type="text" placeholder="05000000505">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" id="city" name="city" type="text" placeholder="Riyadh">
                            </div>


                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success rounded-pill px-5">Start Learning</button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="#">Already have an account? signin now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 row bg-home-gredient d-flex align-items-center justify-content-center">
                    <h1 class="h1 text-white m-4 text-center">
                        Welcome to TeachCast
                    </h1>
                    <p class="h1 mx-3 text-center text-white">Start learning English and maintain and boost your career </p>
                    <div class="row">
                        <div class="col"><img src="{{asset('img/icons-01.png')}}" alt="" class="img-fluid"></div>
                        <div class="col"><img src="{{asset('img/icons-02.png')}}" alt="" class="img-fluid"></div>
                        <div class="col"><img src="{{asset('img/icons-03.png')}}" alt="" class="img-fluid"></div>
                        <div class="col"><img src="{{asset('img/icons-04.png')}}" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center col-2">
    <img class="img-fluid" src="{{asset('img/placement-test.png')}}" alt="placement test">
</div>
@endsection
