<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- RemixIcon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="navbarStyles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/Logo.png" alt="Logo">
                </a>
                
                <button class="navbar-toggler collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ri-menu-line"></i>
                    <i class="ri-close-line"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">How</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                    </ul>
                    
                    <div class="btn-container">
                        <a href="#" class="btn btn-custom">Sign In</a>
                        <a href="#" class="btn btn-custom">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Bootstrap JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>