<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['indexnum']) 
    && isset($_POST['email']) && isset($_POST['gender']) 
    && isset($_POST['dateofbirth']) && isset($_POST['school']) 
    && isset($_POST['nationals']) && isset($_POST['xtracounty']) && isset($_POST['county'])) {

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
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT indexnum FROM register WHERE indexnum = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, indexnum, email, gender, dateofbirth, school, nationals, xtracounty, county) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $indexnum);
            $stmt->execute();
            $stmt->bind_result($resultindexnum);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssssssss",$username, $indexnum, $email, $gender, $dateofbirth, $school, $nationals, $xtracounty, $county);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registered using this index.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
