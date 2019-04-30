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
      <h2>Booking</h2>
      <?php
      $strSQL = "SELECT * FROM book
                left join classroom on classroom.classroom_id = book.classroom_id
                left join userlogin on userlogin.login_id = book.login_id";
      if($_SESSION["logintype"] != "A")
      {
        $strSQL .= " where book.login_id = '".$_SESSION["loginid"]."''";
      }
      $objQuery = mysql_query($strSQL) or die (mysql_error());
      ?>
        <a href="booking_form.php">Add Book</a>
      <table width="800px" border="1">
        <tr>
          <th>book_id</th>
          <th>classroom_id</th>
          <th>login_id</th>
          <th>book_start</th>
          <th>book_end</th>
          <th>last_update</th>
        </tr>
      <?php
      while($objResult = mysql_fetch_array($objQuery))
      {
      ?>
        <tr>
          <td><?php echo $objResult["book_id"];?></td>
          <td><?php echo $objResult["classroom_name"];?></td>
          <td><?php echo $objResult["login_name"];?></td>
          <td><?php echo $objResult["book_start"];?></td>
          <td><?php echo $objResult["book_end"];?></td>
          <td><?php echo $objResult["last_update"];?></td>
        </tr>
      <?php
      }
      ?>
      </table>

    </form>
  </body>
</html>
