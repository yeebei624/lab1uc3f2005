<html>
  <head>
    <title>List of KL Restaurant</title>
  </head>
  
  <body>
    <center>
      <h1>List of KL Restaurant</h1><!--create table structure using HTML first-->
      <table border="1">
        <tr>
          <th>Restaurant ID</th>
          <th>Restaurant Name</th>
          <th>Address</th><th>Phone</th>
        </tr>
        
        <tr>
          <th>0</th>
          <th>Subway Restaurant</th>
          <th>Menara Standard Chartered, TPM</th>
          <th>03-22441234</th>
        </tr>
        
        <?php  
        $connectionInfo = array("UID" => "APUAdmin", "pwd" => "Sixfourtwo624", "Database" => "APULab2Exercise",
        "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "lab2exercisetp049935.database.windows.net";
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        //Establishes the connection
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if (!$conn)
        {
        die("Error connection: ".sqlsrv_errors());
        }
        ?>
        
      </table>
    </center>
  </body>
</html>
