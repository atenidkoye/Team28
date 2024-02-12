<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" action="search.php">
        <input type="text" name="query" placeholder="Search...">
        <button type="submit">Search</button>
    </form>

    <?php
    // Check if the search query parameter is set
    if (isset($_GET['query'])) {
        // Get the search query from the URL parameter
        $search_query = $_GET['query'];

        // Connect to your database
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "database_name";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to search for items matching the search query
        $sql = "SELECT * FROM your_table WHERE column_name LIKE '%$search_query%'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
            }
        } else {
            echo "0 results found";
        }
        $conn->close();
    }
    ?>


<!-- <form autocomplete="off" action="#" method="get" accept-charset="utf-8" 
class="mform form-inline simplesearchform">
        <input type="hidden" name="areaids" value="">
    <div class="input-group">
        <label for="#">
            <span class="sr-only">Search products</span>
        </label>
        <input type="text" id="#" class="form-control" placeholder="#" 
        aria-label="" name="q" 
        data-region="input" autocomplete="off" value="">
        <div class="input-group-append">
            <button type="submit" class="btn  btn-primary search-icon">
                <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                <span class="sr-only">Search products</span>
            </button>
        </div>

    </div>
    </form> -->
</body>
</html>