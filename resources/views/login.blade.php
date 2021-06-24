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
                          <div class="title">Log in</div>
            <div class="content">
                <form action="{{route('userlogin')}}" method="POST">
                    @csrf
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text"  name="username" placeholder="Enter your username" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password"  name="password" placeholder="Enter your password" required>
                        </div>

                        
                    </div>
                
                        <div class="button">
                            <input type="submit" value="login">
                        </div>
                </form>
            </div>
        </div>

    </body>
</html>
