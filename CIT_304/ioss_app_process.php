<?php
$sql = "SELECT * FROM ";
$result = $conn ->query($sql);

if ($result -> num_rows>0){
    while ($row = $result->fetch_assoc()){

?>
<html>

<head>
    <title>Integrated Students Selection System</title>
</head>

<body>
    <div id="container">
        <div class="head">
            <?php echo $row['name']; ?>
        </div>
        <div class="marks">
            <h3>CANDIDATES SCORES</h4>
        </div>
        <div class="details">
            <h4>CANDIDATES Details</h4>
            
        </div>
    </div>

</body>

<?php } } ?>

</html>