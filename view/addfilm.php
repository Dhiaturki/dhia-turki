<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            height: 40px;
            border-radius: 0;
        }
        .btn {
            border-radius: 0;
        }
    </style>

    <title>Cinema</title>
</head>

<body>
    <?php include 'admin_nav.php'; ?>

    <div class="container">
        <h2>Add a Film</h2>
        <form action="addfilm_action.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" id="director" name="director" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="reviews">Reviews:</label>
                <input type="text" id="reviews" name="reviews" class="form-control" required>
            </div>
            <div class="form-group">
            <div class="form-group">
              <label for="genre">Genre:</label>
                <select id="genre" name="genre" class="form-control" required>
                   <option value="">Select a genre</option>
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Romance">Romance</option>
                    <option value="Thriller">Thriller</option>
    </select>
</div>

            </div>
            <div class="form-group">
                <label for="img">Image:</label>
                <input type="file" id="img" name="img" class="form-control-file" accept=".jpg, .jpeg, .png" required>
            </div>
            <div class="form-group">
                <label for="duree">duree:</label>
                <input type="text" id="duree" name="duree" class="form-control" required>
            </div>
            <input type="submit" name="submit" value="Add Film" class="btn btn-primary">
        </form>
    </div>

</body>
</html>
