<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>

* {
box-sizing: border-box;
}

*:focus {
	outline: none;
}
body {
font-family: Arial;
background-color: #3498DB;
padding: 50px;
}
.login {
margin: 20px auto;
width: 300px;
}
.login-screen {
background-color: #FFF;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #3498DB;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 120px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
	margin-top: 12px;
}

</style>

<body>
<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Remote Arm</h1>
			</div>

			<div class="login-form">
<div>
                    <button onclick=<?php exec("python python/GrapOpen.py") ?>Run Perl</button>
                    <button onclick=<?php exec('python python/GrapStop.py') ?>Run Stop</button>

                    </div>

                <a class="btn btn-primary btn-large btn-block" id="GrapOpen"   href="#">Grap Open</a>
                <br>
                <a class="btn btn-primary btn-large btn-block" id="GrapClose"  href="#">Grap Close</a>


		</div>
	</div>



</body>

<script>


    $(document).ready(function() {

    $("#GrapOpen").click(function(){
        $.ajax({
          type: "POST",
          url: "python/GrapOpen.py",
          data: {  }
        }).done(function( o ) {
           // do something

        });
    });

    $("#GrapOpen").mouseleave(function() {
               $.ajax({
          url:"python/GrapStop.py", success: function(){

                   }
        });
    })



    $("#GrapClose").click(function(){
        $.ajax({
          url:"python/GrapClose.py", success: function(){

            }
        });
    });

    $("#GrapClose").mouseleave(function() {
               $.ajax({
          url:"python/GrapStop.py", success: function(){
             // alert("Mouse up");
          }
        });
    })


    });

</script>
</html>