<?php
include '../task/config.php';
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$user = $_POST['name'];
$pass = $_POST['password'];

// not prevent from sql injection

$qry = "SELECT * from users WHERE name='$user' AND password = '$pass'";
print_r($qry);
$result = mysqli_query($db, $qry);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Hello, " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}



// prevent from sql injection

$qry1 = $db->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
$qry1->bind_param('ss', $user, $pass); // 

$qry1->execute();

$result = $qry1->get_result();
while ($row = $result->fetch_assoc()) {
    echo "Hello," . $row["name"];
}
