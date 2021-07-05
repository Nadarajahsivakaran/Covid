@extends ('style/css')


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <!---<title> Responsive Registration Form | CodingLab </title>--->
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
    
            @if(session('success'))
            <div class="alert alert-primary" role="alert">
            {{session('success')}}
            </div>
             @endif


             @if(session('fail'))
            <div class="alert alert-primary" role="alert">
            {{session('success')}}
            </div>
             @endif

        <div class="container">
                          <div class="title">Sign up</div>
            <div class="content">
                <form action="{{route('registration.save')}}" method="POST">
                    @csrf
                    <div class="user-details">

                    <div class="input-box">
                            <span class="details">USER NAME</span>
                            <input type="text"  name="username" placeholder="Enter your username" value="{{old('username')}}" required>
                            <span class="text-danger">@error('username'){{$message}} @enderror</span>
                        </div>

                        <div class="input-box">
                            <span class="details">EMAIL</span>
                            <input type="email"  name="email" placeholder="Enter your email" value="{{old('email')}}" required>
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                        </div>

                        <div class="input-box">
                            <span class="details">PASSWORD</span>
                            <input type="password"  name="password" placeholder="Enter your password" value="{{old('password')}}"  required>
                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                        </div>

                        
                    </div>
                
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>

                        If you have already account
                        
                        <a href="{{route('login')}}">Sign in</a>
                        
                        
                </form>

            </div>
        </div>

    </body>
</html>

