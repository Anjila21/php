<html>
    <head>
        <title> Form Validation</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        background-color: #D3D3D3;
        margin:0px;
        padding: 0px;
    }
    .form
    {
        font-size: 15px;
        background-color:white;
        height:350px;
        width: 350px;
        padding:10px;
        margin: 50px auto;
        border-top: 5px solid blue;
        box-shadow: 0 0 7px 5px rgba(0,0,0,0.5);
        border-radius:20px;
        
    }
    .form h1
    {
        text-align: center;
    }
    .a{
        padding:5px;
        
    }
    .icon
{
    color: blue;
   
}
/* label{
    width:50px;
    display:inline-block;
} */
</style>
    </head>
    <body>
        
        <div class="form">
        <h1>Registration Form</h1>
<div class="a">
        <form method="post" action="#">
            <div>
        <i class="fa fa-user icon"></i>
        User:
        <input type= "text" value=""> <br>
        </div>

<div class="a">
        <i class="fa fa-address-card-o icon"></i></i>
       Address:
        <input type= "text" value=""> <br>
</div>
<div class="a">
       <i class="fa fa-envelope email icon"></i>
        Email:
        <input type="email" value=""><br>
</div>
<div>
       <i class="fa fa-lock icon"></i>
       <label > Password: </label> <input type="password" value=""><br>
</div>
<div class="a"> 
 Gender: 
        <label for="Male">
        <i class="fa fa-male icon"></i>
            <input type="radio" value="Male" name="gender" id="Male">Male
        </label>
        <label for="Female">
        <i class="fa fa-female icon"></i> 
             <input type="radio" value="Female" name="gender" id="Female"> Female
        </label> <br>
</div>
<div class="a">
        <input type="submit" value="Sumbit">
</div>

        </form>
</div>
    </body>






</html>