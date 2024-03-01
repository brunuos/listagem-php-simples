<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h2>Contact List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        <?php
            include 'conexao.php';
            // Prepare the SQL query
            $query = "SELECT * FROM contacts";

            // Execute the query
            if ($result = $mysqli->query($query)) {
                // Loop through the result set and display the records
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Phone'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "</tr>";
                }

                // Close the result set and the statement
                $result->close();
            } else {
                echo "Error: " . $mysqli->error;
            }

            // Close the database connection
            $mysqli->close();
        ?>
    </table>
</body>
</html>


