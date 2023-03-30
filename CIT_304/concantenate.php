<?php
if (isset($_POST['nationals']) && isset($_POST['xtracounty']) && isset($_POST['county'])) {
    
    $username = $_POST['username'];
    $indexnum = $_POST['indexnum'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dateofbirth = $_POST['dateofbirth'];
    $school = $_POST['school'];
    $nationals = $_POST['nationals'];
    $xtracounty = $_POST['xtracounty'];
    $county = $_POST['county'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "ssch";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    $query = "INSERT INTO register(username, indexnum, email, gender, dateofbirth, school, nationals, xtracounty, county) values(?, ?, ?, ?, ?, ?, '$nationals', '$xtracounty', '$county')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "New record inserted sucessfully.";
    }
    else {
        echo $stmt->error;
    }
}
else {
    echo "All field are required.";
    die();
}
?>
