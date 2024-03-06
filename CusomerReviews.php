<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            height: 90%;
            margin: 20% auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .review {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .review p {
            margin: 5px 0;
        }
        .delete-btn {
            background-color: #ff6666;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #cc0000;
        }
        textarea {
            width: 100%;
            min-height: 100px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            resize: vertical; /* Allow vertical resizing */
        }
        .add-review-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .add-review-btn:hover {
            background-color: #45a049;
        }
        .edit-review-form {
            display: none;
            margin-top: 10px;
        }
        .edit-review-form label,
        .edit-review-form textarea {
            display: block;
            margin-bottom: 10px;
        }
        .edit-review-form textarea {
            width: 100%;
        }
        .edit-review-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .edit-review-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    include 'Header2.php'
    ?>

<div class="container">
    <h2>Customer Reviews</h2>

    <?php
    include 'connect_to_db.php';
 

    // Add review if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_review'])) {
        $name = $_POST['name'];
        $comments = $_POST['comments'];

        $sql = "INSERT INTO Customer_reviews (name, comments) VALUES ('$name', '$comments')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='review'>";
            echo "<p><strong>$name:</strong> $comments</p>";
            echo "<button class='edit-btn' onclick='showEditForm($conn->insert_id)'>Edit</button>";
            echo "<button class='delete-btn' onclick='deleteReview($conn->insert_id)'>Delete</button>";
            echo "</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }

    // Update review if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_review'])) {
        $review_id = $_POST['review_id'];
        $updated_comments = $_POST['edit_comments'];

        $sql = "UPDATE Customer_reviews SET comments='$updated_comments' WHERE id=$review_id";

        if ($conn->query($sql) === TRUE) {
            echo "Review updated successfully.";
        } else {
            echo "Error updating review: " . $conn->error;
        }
    }

    // Delete review if requested
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_review'])) {
        $review_id = $_POST['review_id'];

        $sql = "DELETE FROM Customer_reviews WHERE id=$review_id";

        if ($conn->query($sql) === TRUE) {
            echo "Review deleted successfully.";
        } else {
            echo "Error deleting review: " . $conn->error;
        }
    }

    // Fetch and display Customer_reviews from database
    $sql = "SELECT id, name, comments FROM Customer_reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review'>";
            echo "<p><strong>{$row['name']}:</strong> {$row['comments']}</p>";
            echo "<button class='edit-btn' onclick='showEditForm({$row['id']})'>Edit</button>";
            echo "<button class='delete-btn' onclick='deleteReview({$row['id']})'>Delete</button>";
            echo "<form class='edit-review-form' id='editForm{$row['id']}' method='post' style='display: none;'>";
            echo "<input type='hidden' name='review_id' value='{$row['id']}'>";
            echo "<label for='edit_comments'>Edit Review:</label><br>";
            echo "<textarea id='edit_comments' name='edit_comments'>{$row['comments']}</textarea><br>";
            echo "<input type='submit' class='add-review-btn' name='update_review' value='Update Review'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "No Customer_reviews yet.";
    }

    $conn->close(); // Close database connection
    ?>

    <h2>Add a Review</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Your Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="comments">Your Review:</label><br>
        <textarea id="comments" name="comments" required></textarea
        ></textarea><br>
        <input type="submit" class="add-review-btn" name="add_review" value="Add Review">
    </form>
</div>

<script>
    function showEditForm(reviewId) {
        var editForm = document.getElementById('editForm' + reviewId);
        editForm.style.display = 'block';
    }

    function deleteReview(reviewId) {
        if (confirm("Are you sure you want to delete this review?")) {
            var form = document.createElement('form');
            form.method = 'post';
            form.action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>';
            
            var reviewIdInput = document.createElement('input');
            reviewIdInput.type = 'hidden';
            reviewIdInput.name = 'review_id';
            reviewIdInput.value = reviewId;
            
            var deleteReviewInput = document.createElement('input');
            deleteReviewInput.type = 'hidden';
            deleteReviewInput.name = 'delete_review';
            deleteReviewInput.value = 'Delete Review';
            form.appendChild(reviewIdInput);
            form.appendChild(deleteReviewInput);
            
            document.body.appendChild(form);
            form.submit();
        }
    }
</script>


<?php
include 'footer2.php'
?>

</body>
</html>