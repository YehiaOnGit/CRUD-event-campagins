<head>
<meta charset="UTF-8">
<title>delete campaign Form</title>
</head>
<body>

<h1>DELETE campaign Form</h1>
<form action="c.php" method="post">
</p>enter the id of the campagine you wanna delete</p>
    <p>
        <label for="id">event id:</label>
        <input type="text" name="id" id="id">
    </p>
    <input type="submit" value="Submit">
</form>

<?php
  $con = mysqli_connect('localhost','root','','charityfunding');
  $query = "SELECT * FROM campaign";
$results=mysqli_query($con,$query);
$row_count=mysqli_num_rows($results);
echo '<h1>campagins</h1>';
  echo "<table>";
  echo '<th><p>id</p></th>';
  echo '<th><p>name</p></th>';
  echo '<th><p>goalprice</p></th>';
  echo '<th><p>code</p></th>';
  echo '<th><p>description</p></th>';
  echo '<th><p>isdeleted</p></th>';
  echo '<th><p>createdat</p></th>';
  echo '<th><p>updatedat</p></th>';
while ($row = mysqli_fetch_array($results)) {
    //output a row here
    echo '<tr>';
    echo '<td>'.($row['id']).'</td><td>'.($row['name']).'</td><td>'.($row['goalprice']).'</td><td>'.($row['code']).'</td><td>'.($row['description']).'</td><td>'.($row['isdeleted']).'</td><td>'.($row['createdat']).'</td><td>'.($row['updatedat']).'</td><br>';
    echo '</tr>';
}
echo "</table>";
  $conn = NULL;
?>
<br><br>
</body>
</html>