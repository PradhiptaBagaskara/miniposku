<html>
<head>
<meta charset="utf-8">
<title>POS - Point Of Sale</title>
<link href="<?php echo base_url().'assets/' ?>login_style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script>
	function myFunction()
		{
			alert("Thanks for login");
		}
</script>
</head>
 
<body>
	<div class="main">
		<div class="user">
			<img src="<?php echo base_url().'assets/img/' ?>user.png" alt="">
		</div>
		<div class="login">
			<div class="inset">				
					<?php echo form_open('auth/login'); ?>
			         <div>
						<span><label>Username</label></span>
						<span><input type="text" name="username" class="textbox" id="active"></span>
					 </div>
					 <div>
						<span><label>Password</label></span>
					    <span><input type="password" name="password" class="password"></span>
					 </div>
					<div class="sign">
						<div class="submit">
						  <input type="submit" name="submit" onclick="myFunction()" value="LOGIN" >
						</div>
						<span class="forget-pass">
							<a href="#">Forgot Password?</a>							
						</span>
							<div class="clear"> </div>
					</div>
					</form>
				</div>
			</div>
		
		</div>
		 
   					<div class="copy-right">
						<p>Website : <a href="http://akbardesign.org">www.akbardesign.org</a></p> 
					</div>
				
	 
</body>
</html>