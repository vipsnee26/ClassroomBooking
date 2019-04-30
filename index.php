<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include("condb.php")  ?>
    <?php
    if(isset($_POST["Submit"]))
    {
    	session_start();
    	$strSQL = "SELECT * FROM userlogin WHERE username = '".mysql_real_escape_string($_POST['txtUsername'])."' and password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
    	$objQuery = mysql_query($strSQL);
    	$objResult = mysql_fetch_array($objQuery);
    	if(!$objResult)
    	{
    			echo "Username and Password Incorrect!";
    	}
    	else
    	{
          $_SESSION["loginid"] = $objResult["login_id"];
    			$_SESSION["loginname"] = $objResult["login_name"];
    			$_SESSION["logintype"] = $objResult["login_type"];

          header("location:booking.php");

    			//session_write_close();

    			/*if($objResult["login_type"] == "A")
    			{
            echo "Admin";
    				//header("location:admin_page.php");
    			}
    			else
    			{
            echo "no Admin";
    				//header("location:user_page.php");
    			}*/
    	}
    	mysql_close();
    }
    ?>

    <form name="form1" method="post" action="">

      <h2>Login</h2>
      <table border="1" style="width: 300px">
        <tbody>
          <tr>
            <td> &nbsp;Username</td>
            <td>
              <input name="txtUsername" type="text" id="txtUsername">
            </td>
          </tr>
          <tr>
            <td> &nbsp;Password</td>
            <td><input name="txtPassword" type="password" id="txtPassword">
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <input type="submit" name="Submit" value="Login">
    </form>
  </body>
</html>
