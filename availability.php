<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include("condb.php")  ?>

    <?php include("header.php")  ?>

    <form name="form1" method="post" action="">
      <h2>Availability</h2>

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
