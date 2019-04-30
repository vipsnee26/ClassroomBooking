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

      <h2>Book</h2>
      <table border="1" style="width: 300px">
        <tbody>
          <tr>
            <td> &nbsp;Classroom</td>
            <td>
              <select name="ddlClassroom">
               <option value="">-- Select --</option>
               <?php
               $strSQL = "SELECT * FROM classroom ORDER BY classroom_name ASC";
               $objQuery = mysql_query($strSQL);
               while($objResuut = mysql_fetch_array($objQuery))
               {
               ?>
               <option value="<?php echo $objResuut["classroom_id"];?>"><?php echo $objResuut["classroom_name"];?></option>
               <?php
               }
               ?>
              </select>
            </td>
          </tr>
          <tr>
            <td> &nbsp;Start Time</td>
            <td>
            </td>
          </tr>
          <tr>
            <td> &nbsp;End Time</td>
            <td>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <input type="submit" name="Save" value="Save">
    </form>
  </body>
</html>
