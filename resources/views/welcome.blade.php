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
                            <h4 class="h5 text-gray-900 mb-4">Sign in to your account</h4>
                        </div>
                        <form class="user" autocomplete="off" >
                            <div class="form-group">
                                <input type="text" name="domain" class="form-control form-control-user" id="domain" placeholder="Domain">
                            </div>
                            <div class="form-group">
                                <input type="text" name="user_mobile" autocomplete="off" class="form-control form-control-user" id="mobile" placeholder="Mobile Number" value="">
                            </div>
                            <div class="form-group">
                                <input type="password" autocomplete="off" name="user_password" class="form-control form-control-user" id="user-password" placeholder="Password" value="">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary rounded-pill px-5">Sign In</button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="#">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{route('student.create')}}">Don't have an account? create one now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 row bg-home-gredient d-flex align-items-center justify-content-center">
                    <h1 class="h1 text-white m-4 text-center">
                        Welcome to TeachCast
                    </h1>
                    <p class="h1 mx-3 text-center text-white">We will walk you through the process of learning English with deffirence</p>
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
<div class="container text-center col-2 py-4">
    <img class="img-fluid" src="{{asset('img/placement-test.png')}}" alt="placement test">
</div>

<div class="container col-10" id='courses'>
    <h1 class="h1 text-grey-900 text-center pt-3">Choose Your Course</h1>
    <div class="card o-hidden border-0 shadow-lg my-5 bg-home-gredient" style="border-radius: 1rem;">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-8 d-flex my-5">
                    <div class="col-3 mx-3">
                        <div class="card h-100 shadow" id="new-headway" onmouseenter="changeText(this.id)">
                            <img class="card-img-top" src="{{asset('https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')}}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">New Headway</h5>
                                <p class="card-text">This is am example of a default Bootstrap image card with an image above the card body content.</p>
                                    <a href="#" class="btn btn-info btn-block">Read more</a>
                                    <a href="#" class="btn btn-info btn-block">Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mx-3">
                        <div class="card h-100 shadow" id="lets-go" onmouseenter="changeText(this.id)">
                            <img class="card-img-top" src="{{asset('https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')}}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Let's Go</h5>
                                <p class="card-text">This is am example of a default Bootstrap image card with an image above the card body content.</p>
                                    <a href="#" class="btn btn-info btn-block">Read more</a>
                                    <a href="#" class="btn btn-info btn-block">Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mx-3">
                        <div class="card h-100 shadow" id="business-venture" onmouseenter="changeText(this.id)">
                            <img class="card-img-top" src="{{asset('https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')}}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Business Venture</h5>
                                <p class="card-text">This is am example of a default Bootstrap image card with an image above the card body content.</p>
                                    <a href="#" class="btn btn-info btn-block">Read more</a>
                                    <a href="#" class="btn btn-info btn-block">Demo</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 row d-flex align-items-center justify-content-center">
                    <h1 class="h1 text-white m-4 text-center">
                        Welcome to TeachCast
                    </h1>
                    <p class="h1 mx-3 text-center text-white">We will walk you through the process of learning English with deffirence</p>
                    <p class="h4 mx-3 text-center text-white" id="course-info-text"></p>
                    <div class="container text-center col-6">
                        <img class="img-fluid" src="{{asset('img/placement-test.png')}}" alt="placement test">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container d-flex justify-content-between align-items-center">
    <img class="img-fluid" src="{{asset('img/course-icons-01.png')}}" style="max-width: 150px; height:100%" alt="placement test">
    <img class="img-fluid" src="{{asset('img/course-icons-02.png')}}" style="max-width: 150px; height:100%" alt="placement test">
    <img class="img-fluid" src="{{asset('img/course-icons-03.png')}}" style="max-width: 150px; height:100%" alt="placement test">
</div>
@endsection

@section('page_script')
    <script>
        let text = {
            'new-headway':'hello I am New Headway course',
            'lets-go':'hello I am Let\'s Go course',
            'business-venture':'hello I am Business Venture course',
        }
        const changeText = (course) => {
            console.log(text[course]);
            document.getElementById('course-info-text').innerHTML = text[course]
        }
    </script>
@endsection

