<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'tonklazz.mysql.database.azure.com', 'tonklazuzu2@tonklazz', 'Kla007as', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">NAME</div></th>
    <th width="350"> <div align="center">COMMENT </div></th>
    <th width="150"> <div align="center">LINK </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['NAME'];?></div></td>
    <td><?php echo $Result['COMMENT'];?></td>
    <td><?php echo $Result['LINK'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
