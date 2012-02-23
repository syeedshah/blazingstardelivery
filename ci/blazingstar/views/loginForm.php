<div id="page-wrap">
<div id="contact-area">
  <?php echo validation_errors(); ?>
	   <?php echo form_open('verifylogin'); ?>
	     <label for="username">Username:</label>
	     <input type="text" size="20" id="username" name="username"/>
	     <br/>
	     <label for="password">Password:</label>
	     <input type="password" size="20" id="passowrd" name="password"/>
	     <br/>
	     <input class="submit" type="submit" value="Login"/>
   </form>
</div>
</div>