<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css3.css">
    <title>Flower Shop Reviews</title>
    
</head>
<body>
    <?php
    include 'connect_to_db.php';
    include 'Header2.php'
    ?>

<div class="container">
    <h2>Customer Reviews</h2>
   
    <h2>Add a Review</h2>
    <form method="post" action="process3.php">
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