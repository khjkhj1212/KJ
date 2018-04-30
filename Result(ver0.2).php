<?php
$conn = mysqli_connect('localhost', 'root', 'rlagus', 'ftas');
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$a = $_REQUEST['HS'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">
    <title></title>
    <body>
      <h1>검색결과</h1>
      <h2>입력값 <?php echo $a?></h2>
        <table border = "1">
            <tr>
                <th>HS Code</th>
                <th>Country</th>
                <th>Item</th>
                <th>CTC</th>
            </tr>
              <?php
                while($row = mysqli_fetch_array($result)){
                  if($row['HSCode'] === $a){
                  echo"
                    <tr>
                      <td>{$row['HSCode']}</td>
                      <td>{$row['country']}</td>
                      <td>{$row['item']}</td>
                      <td>{$row['standard']}</td>
                    </tr>";
                  }
                  }
              ?>
        </table>
      <p>version 0.2</p>
      <p>Made by K&J</p>
    </body>
  </head>
</html>
