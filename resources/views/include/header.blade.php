@extends('include/master')
@extends('style/headerstyle')

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!--------- <title>Responsive Navigation Menu</title>------>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
 
  
  </head>
  <body>


  
    <nav>

   
      <div class="logo">COVID-19</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="" href="#">Home</a></li>
        <li><a href="registration.blade.php">Registration</a></li>
        <li><a href="login.blade.php">Log in</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
    
    @yield('content')
  </body>
</html>
