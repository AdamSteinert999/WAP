<!DOCTYPE html>
<html>
  <head>
    <title>Town Table</title>
  </head>
  <body>
    <h1>Town Table</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Population</th>
          <th>State</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $servername = "localhost";
          $username = "username";
          $password = "password";
          $dbname = "database";

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM town";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["id"]. "</td>";
              echo "<td>" . $row["name"]. "</td>";
              echo "<td>" . $row["population"]. "</td>";
              echo "<td>" . $row["state"]. "</td>";
              echo "</tr>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
  </body>
</html>