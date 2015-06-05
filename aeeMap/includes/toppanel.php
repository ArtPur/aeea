<header>
<!-- Login -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
            	
				<h2>Regional Representative Login</h2>
						
				<p class="grey">This is the login portal for Regional Representatives only</p>
                <p>&nbsp</p>
                <p class="grey">~ Please login with the details you were sent.</p>
                <p class="grey">~ Please login from the same computer every time.</p>
                <p class="grey">~ You may change your details once you login.</p>               
				
			</div>
			<div class="left">
            	<form class="clearfix" action="login.php" method="post"><!--#login.php-->
					<h2 class="padlock">Member Login</h2>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="log" id="username" value="" size="23" /><!--log to username-->
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="password" size="23" /><!--pwd to password-->
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="login" class="btnlogin" />
					<a class="lost-pwd" href="core/recover.php">Lost your password?</a>
				</form>
			</div>
			<div class="left right">            	
				<form action="#" method="post">
                	<h2>Registration is closed!</h2>
                    <label class="grey">Sorry, you are not allowed to register by yourself on this site!</label>
                    <label class="grey">You must be invited by one of our team members.</label>  
					<!--<h2>Not a member yet? Sign Up!</h2>				
					<label class="grey" for="signup">Username:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>A password will be e-mailed to you.</label>
					<input type="submit" name="submit" value="Register" class="btnregister" />-->
				</form>
			</div>
		</div>
	</div> <!-- /login -->	

    <!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
	    	<li class="left">&nbsp;</li>
	        <li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#" target="_parent">Log In</a>
				<a id="close" style="display: none;" class="close" href="#" target="_parent">Close Panel</a>			
			</li>
	    	<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

<div class="clear"></div>

</header>