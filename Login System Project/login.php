
<!DOCTYPE html>
<head>

<title> Login System</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    * {
  box-sizing: border-box;
}
   
        body {
           
  background-image: url(6.jpg) ;
  background-repeat: no-repeat;
  background-size: cover;
      
    } 
    header {
   
  background-image: url(9.jpg) ;
  background-repeat: no-repeat;
  background-size: cover;
  font-weight: bold;
  padding: 20px;
  text-align: center;
  font-size: 20px;
  color: sandybrown;
  margin: auto ;
}
section {
  display: -webkit-flex;
  
    display:flex;
  margin-top: 50px;

    
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4267b2;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

input[type=submit]:hover {
  background-color: #45a049;
}
    a {
  background-color: #4267b2;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
         text-decoration: none;
}

a:hover {
  background-color: coral;
}


.container {
    width: 500px;
    height: 333px;
 background: white;
  border-radius: 5px;
  
  padding: 20px;
        position: relative ;
    top:0;
    right: 0;
    bottom: 0;
    left:0;
    margin: auto;
    
}

.col-50 {
          position: relative ;
    top:0;
    right: 0;
    bottom: 0;
    left:0;
    margin: auto;
  width: 50%;
    margin-top: 10px;
 
}

.col-50 {
          position: relative ;
    top:0;
    right: 0;
    bottom: 0;
    left:0;
    margin: auto;
    margin-top: 10px;
  width: 50%;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

    #logintext{
       font-display: block;
        font-size: 20px;
        font-weight: bold;
         background-color: #4267b2;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px; 
        
        
    }
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
    
    
    
    
</style>    
          
</head>

<body>
<header> <h1> Welcome To testing Module </h1> </header>

   


<section>
    
  
    
    
    
    <div class="container">
  <form action="/action_page.php">
      <div class="row" id="logintext">
          <center>Login</center>
      </div>
    <div class="row">
      <div class="col-50">
        <span class="label">Username</span>
      </div>
      <div class="col-50">
        <input type="text" id="fname" name="firstname" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-50">
       <span class="label">Password</span>
      </div>
      <div class="col-50">
        <input type="password" id="lname" name="lastname" placeholder="">
      </div>
    </div>
 
      
    <div class="row">   
        <div class="col-50">
      <input type="submit" value="Login"> 
            
        </div>
                <div class="col-50">
                    <a href="register.php"  value="Register">Register</a>
      
        </div>
    </div>
        
      
  </form>
</div>
    
    
    
    
    
    </section>    

</body>


</html>
