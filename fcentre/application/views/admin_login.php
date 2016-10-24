
<!-- Admin login -->
<div classs="adminlogin">
<fieldset name="adminFieldset" id="adminFieldset">
<legend>Administrator Login</legend>

<form action="http://localhost:8888/fcentre/index.php/admin_login/validate" id="adminForm" method="post" accept-charset="utf-8">
	<label for="username"><font color="red">*</font> Username: </label>	<input type="text" name="username" value="" id="username"  />

	 <br/>

	<label for="password"><font color="red">*</font> Password: </label>	<input type="password" name="password" value="" id="password"  />

<br><p class="errors">(<font color="red">*</font>) Required fields.</p><br>
	 <button id="adminlogin_button" type="submit" name="adminlogin"value="Log in">Log in </button></br>
	 <!-- <input type="submit" name="submit" value="Log In"  /> -->


</form>
</fieldset>
</div>


<br>