
	<fieldset style="text-align: center">
    <legend>Personal Info</legend>
    <table style="margin: auto;">
      <tr><td width="150px"><strong>Username</strong></td><td><input type="text" name="username"></td></tr>
      <tr><td><strong>Create a password</strong></td><td><input type="password" name="password"></td></tr>
      <tr><td><strong>Confirm password</strong></td><td><input type="password" name="repassword"></td></tr>

    </table>
    </fieldset>


<fieldset style="text-align: center">
    <legend>Terms & conditions</legend>

    <textarea cols="50" rows="5">"Grove" Like a Pro!</textarea>
    <br/>
    I confirm that I agree with terms & conditions <input type="checkbox" name="agreeWithTerms" value="Y">
    <br/><br/>
    
    <?php
      if(array_key_exists('cumulativeErrorMessage', $_POST) && $_POST['cumulativeErrorMessage'] != '') {
    ?>
    <fieldset style="color: #ff0000;">
        <legend>There were errors</legend>
        <?php echo $_POST['cumulativeErrorMessage']?>
    </fieldset>
    <?php
      }
    ?>
    <br/>
    
    <input type="submit" value="Signup">
