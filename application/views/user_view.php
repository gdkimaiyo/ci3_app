<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<title>Users</title>
</head>
<body>

<h2>Users</h2>
<ul>
  <?php
    // echo $results;
    foreach ($results as $key) {
      echo "<li>";
      echo $key->username;
      echo "</li>";
    }
  ?>
</ul>

</body>
</html>
