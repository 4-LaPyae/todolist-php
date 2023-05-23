<?php
include('./connect.php');
$con = getConnection();
global $name ;
global $derc;
global $option;
if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $derc = $_POST['desc'];
    $option = $_POST['opt'];
    try {
        $query = "insert into categories (name,description,status) values  (:name,:desrciption,:status)";
        $stm = $con->prepare($query);
        $result = $stm->execute([":name"=>$name,":description"=>$derc,":status"=>$option]);
        if(!empty($result)){
         header('location:index.php');
        }
       } catch (Exception $e) {
         echo $e->getMessage();
       }
  }
 

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
            <label for="name">Enter name:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="opt">Choose:</label>
            <select id="opt" name="opt">
                <option value="1">active</option>
                <option value="0">inactive</option>
            </select><br><br>
            <label for="desc">Enter Description:</label>
            <textarea id="desc" name="desc" rows="4" cols="50">
            </textarea><br><br>
            </label>
            <input type="submit" value="Submit" name="submit">
        </form>
</body>
</html>