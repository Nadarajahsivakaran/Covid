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

            


        <div class="container">
                          <div class="title">Sign in</div>
            <div class="content">
                <form action="{{route('userlogin')}}" method="POST">
                    @csrf
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">USER NAME</span>
                            <input type="text"  name="username" placeholder="Enter your username" required>
                        </div>

                        <div class="input-box">
                            <span class="details">PASSWORD</span>
                            <input type="password"  name="password" placeholder="Enter your password" required>
                        </div>

                        
                    </div>
                
                        <div class="button">
                            <input type="submit" value="login">
                        </div>

                        If you don't have an account. create new one
                        
                        <a href="{{route('registration')}}">Sign up</a>
                </form>
            </div>
        </div>

    </body>
</html>
