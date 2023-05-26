<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore mySQL Data base</title>
</head>

<body>
    <?php


    // Connect mySQL database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'adil';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection Error' . $conn->connect_error);
    } else {
        echo 'database connection successfully';
    }



    // sql to create table

    /*  $sql = "CREATE TABLE school(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";



        if ($conn->query($sql) === TRUE) {
            echo '<br> Table School Created successfully f';
        } else {
            echo 'Error creating table: ' . $conn->error;
        } */


    // inset single data
    /*   $insertData = "INSERT INTO school (firstname, lastname, email)
        VALUES ('abul hassan', 'Rion', 'mehedihassanrion@gmail.com')";
    $insertData .= "INSERT INTO school (firstname, lastname, email)
        VALUES ('kabul Hassan 2', 'Rion', 'mehedihassanrion@gmail.com')";
    $insertData .= "INSERT INTO school (firstname, lastname, email)
        VALUES ('babul Hassan 3', 'Rion', 'mehedihassanrion@gmail.com')";
 */

    /*   $insertData = "INSERT INTO school (firstname, lastname, email)
    VALUES ('John 4', 'Doe', 'john@example.com');";
        $insertData .= "INSERT INTO school (firstname, lastname, email)
    VALUES ('Mary 5', 'Moe', 'mary@example.com');";
        $insertData .= "INSERT INTO school (firstname, lastname, email)
    VALUES ('Julie 6', 'Dooley', 'julie@example.com')";



    if ($conn->multi_query($insertData) === TRUE) {
        $insertId = $conn->insert_id;
        echo '<br> New data inserted, inset id:' . $insertId;
    } else {
        echo 'Error occur: ' . $insertData . '<br>' . $conn->error;
    }

 */

    /*   if ($conn->multi_query($insertData) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 */


    /*    $stmt = $conn->prepare("INSERT INTO school (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    // set parameters and execute
    $firstname = "rion";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    $firstname = "jion";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    $firstname = "fion";
    $lastname = "Dooley";
    $email = "adilmahmoudrion@gmail.com";
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close(); */

    // select row

    $query = "SELECT id, firstname, lastname, email FROM school";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($singleRow = $result->fetch_assoc()) {
            echo "id: " . $singleRow["id"] . "<br>First Name: " . $singleRow["firstname"] . "<br>Last  Name: " . $singleRow["lastname"]. "<br>email: ".$singleRow["email"]. "<br><br>";
        }
    }else{
        echo "0 result";
    }






    $conn->close();


    ?>
</body>

</html>