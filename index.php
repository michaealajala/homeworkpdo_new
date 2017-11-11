<?php

$hostname = "sql2.njit.edu";
$username = "mda9";
$password = "oeNfkZ78z";
$connect = NULL;
try 
{
    $connect = new PDO("mysql:host=$hostname;dbname=mda9",
    $username, $password);
    echo "Connected Succesfully <br>";
}
catch(PDOException $e)
{
	 echo "Connection failed: " . $e->getMessage()."<br>";
	
}

$query = "SELECT * FROM accounts WHERE id<6";
$statement= $connect->prepare($query);
$statement->execute();
$id_list= $statement->fetchAll();
$statement->closeCursor();

echo '<table>';
foreach ($id_list as $id_list) {

echo '<tr>';
echo '<td>'. $id_list['id'].'</td>';
echo '<td> '. $id_list['email'].'</td>';
echo '<td>'. $id_list['fname'].'</td>';
echo '<td>'. $id_list['lname'].'</td>';
echo '<td>'. $id_list['phone'].'</td>';
echo '<td>'. $id_list['birthday'].'</td>';
echo '<td>'. $id_list['gender'].'</td>';
echo '<td>'. $id_list['password'].'</td>';
echo '</tr>';

}
echo '</table>';


?>
