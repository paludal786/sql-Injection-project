<?php
include '../task/config.php';
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$user = $_POST['name'];
$pass = $_POST['password'];

// not prevent from sql injection
echo "<b>This query Not Prevent From sql injection</b><br/>";
$qry = "SELECT * from users WHERE name='$user' AND password = '$pass'";
$result = mysqli_query($db, $qry);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Hello, " . $row["name"] . "<br>";
    }
}



// prevent from sql injection
echo "<b>This query will prevent from sql injection</b><br/>";
$qry1 = $db->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
$qry1->bind_param('ss', $user, $pass); // 

$qry1->execute();

$result = $qry1->get_result();
while ($row = $result->fetch_assoc()) {
    echo "Hello," . $row["name"] . "<br/>";
}
