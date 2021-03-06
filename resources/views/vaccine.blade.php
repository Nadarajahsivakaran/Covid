



<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <!---<title> Responsive Registration Form | CodingLab </title>--->
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background-color:white;

  background-image: url("https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2020/12/26/Pictures/_01f597a2-478b-11eb-b4f2-1df98d963a79.jpg");
  background-repeat: no-repeat;
  background-position: center; 
  background-size: cover;
  justify-content: center;
  align-items: center;
  padding: 10px;
  
 
}


.container{
    
  
  max-width: 700px;
  width: 100%;
   /* background-color:white; */
   /* opacity:0.5; */
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   width: 50%;
   
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }

  
}

</style>



        
    </head>

    <body>

    

    <h1> VACCINE</h1>

    <p>WHO believes that everyone, everywhere who could benefit from safe and effective COVID-19 vaccines should have access as quickly as possible, starting with those at highest risk of serious disease or death. </p>

     <p>WHO???s Strategic Advisory Group of Experts on Immunization (SAGE) has released two key documents to help guide the allocation and prioritization of populations to receive COVID-19 vaccines:</p>
    
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
                          <div class="title">User Details</div>
            <div class="content" >
                <form action="{{route('vaccineAction')}}" method="POST">
                    @csrf
                    <div class="user-details">

                    <div class="input-box">
                            <span class="details text-dark">Name with initial</span>
                            <input type="text"  name="name" placeholder="Enter your name" value="{{old('name')}}" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text"  name="fullname" placeholder="Enter your name" value="{{old('fullname')}}" required>
                        </div>

                        <div class="input-box">
                            <span class="details">GS Division</span>
                            <input type="text"  name="gs" placeholder="Enter your GS Division" value="{{old('gs')}}" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text"  name="address" placeholder="Enter your Address" value="{{old('address')}}" required>
                        </div>

                        <div class="input-box">
                            <span class="details"> Occupation</span>
                            <input type="text"  name="occupation" placeholder="Enter your Occupation"value="{{old('occupation')}}"required>
                        </div>

                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text"  name="phonenumber" placeholder="Enter your number"value="{{old('phonenumber')}}"required>
                        </div>

                        <div class="input-box">
                            <span class="details">Do you have any diseaese</span>
                            <input type="text"  name="diseases" placeholder="Any diseases"value="{{old('diseases')}}"required>
                        </div>

                        <div class="input-box">
                            <span class="details">Any comments</span>
                            <input type="text"  name="comment" placeholder="Comments..."value="{{old('comment')}}"required>
                        </div>

                        

                        

                        
                        
                    </div>
                
                        <div class="button">
                            <input type="submit" value="Submit">
                        </div>

                        
                        
                        
                        
                        
                </form>

            </div>
        </div>
       
    </body>
</html>

