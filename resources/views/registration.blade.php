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
                          <div class="title">Registration</div>
            <div class="content">
                <form action="{{route('registration.save')}}" method="POST">
                    @csrf
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text"  name="fullname" placeholder="Enter your name" value="{{old('name')}}" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email"  name="email" placeholder="Enter your email" value="{{old('email')}}" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text"  name="phonenumber" placeholder="Enter your number"value="{{old('phonenumber')}}"required>
                        </div>

                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text"  name="username" placeholder="Enter your username" value="{{old('username')}}" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password"  name="password" placeholder="Enter your password" value="{{old('password')}}"  required>
                        </div>

                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password"  name="confirmpassword" placeholder="Confirm your password" value="{{old('confirmpassword')}}" required>
                        </div>
                        
                    </div>
                
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>

                        If you have already account
                        
                        <a href="login.blade.php">Log in</a>
                        
                        
                </form>

            </div>
        </div>

    </body>
</html>

