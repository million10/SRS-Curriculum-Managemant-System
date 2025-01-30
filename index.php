<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Curriculum Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">SREB-(Curriculum Management System)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="cms/index.php">Admin</a></li>
                        <li class="nav-item"><a class="nav-link active" href="cmsw/index.php">Woreda Office</a></li>
						                        <li class="nav-item"><a class="nav-link active" href="shool/index.php">schools Office</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Section -->
        <header class="py-5">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left Side: Chart -->
                    <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                        <div>
                            <h3 class="text-center">Statistics for SREB </h3>
                            <canvas id="chartCanvas" style="max-width: 100%;"></canvas>
                        </div>
                    </div>

                    <!-- Right Side: Background Image -->
                    <div class="col-md-6 bg-image-full" style="background-image: url('images/images2.jpeg'); min-height: 400px; background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>
        </header>

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Somali Regional Education Bureau</p></div>
            <div class="container"><p class="m-0 text-center text-white">Jigjiga Ethiopia</p></div>
            <div class="container"><p class="m-0 text-center text-white">&copy; 2024</p></div>
        </footer>

        <!-- Bootstrap core JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS -->
        <script src="js/scripts.js"></script>

        <!-- Chart.js Script -->
        <script>
            const ctx = document.getElementById('chartCanvas').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar', // You can change to 'line', 'pie', etc.
                data: {
                    labels: ['Total Woreda', 'Total Schools', 'Books Distributed', 'Students Using  Resources'],
                    datasets: [{
                        label: 'Statistics',
                        data: [1200, 4500, 10000, 3500], // Replace these values with dynamic data if needed
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </body>
</html>
