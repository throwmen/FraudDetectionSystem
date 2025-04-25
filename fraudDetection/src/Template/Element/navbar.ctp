<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <?php echo $this->Html->image('Logo.png', ['alt' => 'Logo']); ?>
        </a>
        
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
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