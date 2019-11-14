<?php

include '../task/config.php';
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$search = $_POST['search'];

//  not prevent from sql injection
echo "<b>This query not prevent from sql injection</b><br/>";
$query = "SELECT * from users WHERE name='$search'";

$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "NAME :-" . $row["name"] . "<br>";
        echo "Age :-" . $row["age"] . "<br>";
        echo "NUMBER :-" . $row["number"] . "<br>";
    }
} else {
    echo "Not Found !..";
}


// prevent from sql injection
echo "<b>This query will prevent from sql injection</b><br/>";

$qry1 = $db->prepare('SELECT * FROM users WHERE name = ?');
$qry1->bind_param('s', $user);

$qry1->execute();

$result = $qry1->get_result();
while ($row = $result->fetch_assoc()) {
    echo "NAME :-" . $row["name"] . "<br>";
    echo "Age :-" . $row["age"] . "<br>";
    echo "NUMBER :-" . $row["number"] . "<br>";
}
