<?php
    // Backend logic bisa dimasukkan di sini jika diperlukan
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Ticket Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styledashboard1.css"> <!-- Link to external CSS file -->
</head>

<body>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <div class="hero-section text-center">
        <div>
            <h1>Book Your Movie Tickets Now!</h1>
            <a href="#" class="btn btn-primary btn-lg mt-3">Explore Movies</a>
        </div>
    </div>

    <!-- Movies Section -->
    <div class="container my-5 movies-section">
        <h2>Now Showing</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card movie-card">
                    <img src="https://via.placeholder.com/350x500" class="card-img-top" alt="Movie 1">
                    <div class="card-body">
                        <h5 class="card-title">Movie 1</h5>
                        <p class="card-text">Description for Movie 1.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card movie-card">
                    <img src="https://via.placeholder.com/350x500" class="card-img-top" alt="Movie 2">
                    <div class="card-body">
                        <h5 class="card-title">Movie 2</h5>
                        <p class="card-text">Description for Movie 2.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card movie-card">
                    <img src="https://via.placeholder.com/350x500" class="card-img-top" alt="Movie 3">
                    <div class="card-body">
                        <h5 class="card-title">Movie 3</h5>
                        <p class="card-text">Description for Movie 3.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
