<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1e8dd;
            padding: 100px;
            margin: inherit;
            margin-top: 20px;
        }
        .container {
            max-width: 400px;
            margin: inherit;
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
        }
        .result {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
        }
        .result p {
            margin: 0;
        }
        .no-result {
            color: red;
        }
    </style>
</head>
<body>
<?php
include 'includes/top.php';
?>
    <div class="container">
        <h2>Search Results</h2>
        <?php
            // Check if the search query parameter is set and not empty
            if (isset($_GET['query']) && !empty($_GET['query'])) {
                // Get the search query from the URL parameter
                $search_query = $_GET['query'];

                // Connect to your database
                include  'includes/connect_to_db.php';

                // Query to search for items matching the search query
                $sql = "SELECT DISTINCT(flower), price FROM products WHERE flower LIKE '%$search_query%'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="result">';
                        echo '<p><strong>Flower:</strong> ' . $row["flower"] . ' - <strong>Price:</strong> €' . $row["price"] . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p class="no-result">No result(s)</p>';
                }
                $conn->close();
            } else {
                // If the user did not input anything but clicked the search button
                echo '<p class="no-result">Please enter flower name</p>';
            }
        ?>
    </div>
</body>
</html>
