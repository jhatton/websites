<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/blitzer/jquery-ui-1.10.3.custom.min.css">
<title>myBlog</title>
</head>

 <body>
 <!--main title-->
 <div id="main">  
   <h1>Welcome to myBlog</h1>
   
   <p class="desc">Login and create a blog of anything that you want to blog about. The site is free and open to everyone</p>
    
     <!-- Login form -->
    <form name="form1" method="post" action="">
      <p>Please Login to begin blogging!</p>
      <p id="user"> 
        <label for="userID">username</label>
        <input type="text" name="userID" id="userID">
      </p>
      <p id="class">
        <label>password
          <input type="text" name="password1" id="password1">
          <br>
          <input type="submit" name="LOGIN" id="LOGIN" align="right" value="LOGIN">
          <br> <br>
          
        </label>
      </p>
    </form>
     <!-- New Users -->
    <div id="new">
    <p id="registration">Not Registrated?</p> <br>
    
    <div class="register">
    <button id="create-user">Create new user</button>
    </div>
    
    <div id="dialog-form" title="Create new user">
  <p class="validateTips">All form fields are required.</p>
 
  <form>
  <fieldset>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
  </fieldset>
  </form>
</div>
 
      
     <!--check login and apply new user information -->
     <?php  
	  	
	?>     
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
    <footer>
    <p>&copy; 2013 Jim Hatton || Full Sail University || BDF1312</p>
    </footer>
    
</div>  
</body>
</html>