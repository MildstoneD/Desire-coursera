<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
    <table>
    <h2>MEMBERS INFO</h2>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>username</th>
            <th>email</th>
            <th>gender</th>
            <th>password</th>
            <th>action</th>
        </tr>

        <?php
    include('db.php');
    $sql = "SELECT * FROM slmembers";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        
        echo '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["firstname"].'</td>
        <td>'.$row["lastname"].'</td>
        <td>'.$row["username"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["gender"].'</td>
        <td>'.$row["password"].'</td>
        <td><a href="edit-student.php?id='.$row["id"].'">edit</a> <a href="delete-student.php?id='.$row["id"].'">delete</a></td>
    </tr>';
      }
    } else {
      echo "<tr><td>0 results</td></tr>";
    }
    $conn->close();
    ?>
        
    </table>
</body>
</html>