<!DOCTYPE html>
<html>
<head>
    <title>backend-search</title>
    <style type="text/css">
        a{
            text-decoration: none;
            color: red;
            font-size: 20px;

        }
        a:hover{
            color: green;
        }
    </style>
</head>
<body>

</body>
</html>



<?php

$link = mysqli_connect("localhost", "root", "", "search");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM countries WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        
        $param_term = $_REQUEST["term"] . '%';
    
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        
                    echo '<a href="'. $row["name"] .'.php">'.$row["name"].'</a>';
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
mysqli_close($link);
?>