
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:nannypakistan.database.windows.net,1433; Database = jpmc", "daniyal", "zxcvb0987Z");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO jpmc (firstname,lastname)
    VALUES (' uid ,passid ,uname ,uadd ,ucountry ,uzip  ,uemail , umsex , ufsex')";
     $conn->exec($sql);
     echo "New record created successfully";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "daniyal", "pwd" => "zxcvb0987Z", "Database" => "jpmc", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:nannypakistan.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
