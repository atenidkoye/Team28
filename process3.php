// 

<?php
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

  
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_review'])) {
        $review_id = $_POST['review_id'];

        $sql = "DELETE FROM Customer_reviews WHERE id=$review_id";

        if ($conn->query($sql) === TRUE) {
            echo "Review deleted successfully.";
        } else {
            echo "Error deleting review: " . $conn->error;
        }
    }

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

    $conn->close();
    ?>