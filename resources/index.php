<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Courses</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS styles (if any) -->

    <style>
        /* Add your custom styles here */
        body {
            padding-top: 56px; /* Adjust based on your navbar height */
        }

        .course-card {
            margin-bottom: 20px;
        }

        .course-card img {
            max-height: 200px; /* Adjust as needed */
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Your Logo/Brand</a>
        <!-- Add your navigation links or buttons here -->
    </nav>

    <!-- Course Listing Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Explore Our Courses</h2>
        <div class="row">
            <!-- Course Cards -->
            <?php
            // Assuming you have a database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "data1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch courses from the database
            $sql = "SELECT * FROM courses";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Display course cards
                    echo '<div class="col-lg-4">';
                    echo '<div class="card course-card">';
                    echo '<img src="' . $row["course_image"] . '" class="card-img-top" alt="' . $row["course_title"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["course_title"] . '</h5>';
                    echo '<p class="card-text">' . $row["course_description"] . '</p>';
                    echo '<p class="card-text"><small class="text-muted">Last Updated: ' . $row["last_updated"] . '</small></p>';
                    echo '<a href="#" class="btn btn-primary">Learn More</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your custom JS scripts (if any) -->

</body>

</html>
