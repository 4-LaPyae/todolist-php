<?php
var_dump($_POST);
?>
<html>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <input type="hidden" name="_method" value="DELETE">
  <input type="hidden" name="id" value="1">
      Name: <input type="text" name="fname" id="fname"><br>
      <input type="submit">
</form>
 </html>