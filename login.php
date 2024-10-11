<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container shadow">
                    <!-- Tabs for Login and Sign Up -->
                    <ul class="nav nav-tabs" id="authTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab">Sign Up</button>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content p-4" id="authTabsContent">
                        <!-- Login Form -->
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <h2 class="text-center mb-4">Login</h2>
                            <?php
                            // Menampilkan pesan kesalahan jika ada
                            if (isset($_GET['error'])) {
                                echo '<div class="alert alert-danger">' . htmlspecialchars($_GET['error']) . '</div>';
                            }
                            ?>
                            <form action="login_process.php" method="POST">
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                        </div>

                        <!-- Sign Up Form -->
                        <div class="tab-pane fade" id="signup" role="tabpanel">
                            <h2 class="text-center mb-4">Sign Up</h2>
                            <form action="signup_process.php" method="POST">
                                <div class="mb-3">
                                    <label for="signupName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="signupName" name="name" placeholder="Enter your full name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="signupEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="signupPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Enter your password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="signupConfirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="signupConfirmPassword" name="confirm_password" placeholder="Confirm your password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
