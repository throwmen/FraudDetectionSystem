<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextShield</title>
    <?php echo $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'); ?>
    <?php echo $this->Html->css('navbarStyles'); ?>
    <?php echo $this->Html->css('styles'); ?>
    <?php echo $this->Html->css('footerStyles'); ?>
    <?php echo $this->Html->css('https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css');?>
    <?php echo $this->Html->script('https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'); ?>
</head>
<body>
    <header>
        <?php echo $this->element('navbar'); ?>
    </header>
    <section id="home" class="min-vh-100 container position-relative overflow-hidden">
        <div id="mobile-background-animation">
                <lottie-player
                    src="/animations/welcomeBackground.json"
                    background="transparent"
                    speed="1"
                    loop
                    autoplay>
                </lottie-player>
        </div>
        <div id="home-content" class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-1 fw-bold ">Welcome</h1>
                <p id="welcome-text">Welcome to NextShield, where we prioritize your safety and security. Our cutting-edge fraud detection technology is here to protect you from threats, ensuring peace of mind in every transaction. Let us help you stay safe, every step of the way.</p>
            </div>
            <div id="home-image-col" class="col-md-6 text-center">
                <lottie-player
                    src="/animations/welcomeAnimation.json"
                    background="transparent"
                    speed="1"
                    style="width: 100%; max-width: 400px; height: auto;"
                    loop
                    autoplay>
                </lottie-player>
            </div>
        </div>
    </section>
    <section id="mission" class="min-vh-100 container text-center d-flex align-items-center rounded-5">
        <div>
            <h1 class="display-1 fw-bold">Mission</h1>
            <p id="mission-text">Our mission is to empower businesses with cutting-edge fraud detection, ensuring security, trust, and seamless transactions through AI-driven insights.</p>
        </div> 
    </section>
    <section id="how" class="min-vh-100 container align-items-center">
        <h1 class="display-1 fw-bold mb-5">How It Works</h1>
        <div class="row justify-content-center">
            <div class="how-card col-10 col-sm-6 col-md-4 mb-5">
                <div class="how-img-container">
                    <img class="how-img" src="/img/uploadImage.png" alt="Upload">
                </div>
                <h3 class="how-title">Upload</h3>
                <p class="how-description">Seamlessly upload your data through our secure platform for instant analysis.</p>
            </div>
            <div class="how-card col-10 col-sm-6 col-md-4 mb-5">
                <div class="how-img-container">
                    <img class="how-img" src="/img/analyzeImage.png" alt="Analyze">
                </div>
                <h3 class="how-title">Analyze</h3>
                <p class="how-description">Our AI engine processes your data, identifying patterns and potential fraud risks.</p>
            </div>
            <div class="how-card col-10 col-sm-6 col-md-4 mb-5">
                <div class="how-img-container">
                    <img class="how-img" src="/img/actImage.png" alt="Act">
                </div>
                <h3 class="how-title">Act</h3>
                <p class="how-description">Receive actionable insights and take immediate steps to protect your business.</p>
            </div>
        </div>
    </section>
    <section id="about" class="min-vh-100 container align-items-center">
        <h1 class="display-1 fw-bold text-center">About Us</h1>
        <div class="card-container">
            <div class="card">
                <img class="devPhoto" src="/img/" alt="LuisMi">
                <div class="card-body">
                    <h3 class="about-us-title">Luis Miguel</h3>
                </div>
            </div>
            <div class="card">
                <img class="devPhoto" src="/img/JuanOliveros.png" alt="JuanDa">
                <div class="card-body">
                    <h3 class="about-us-title">Juan David Oliveros Morales</h3>
                </div>
            </div>
            <div class="card">
                <img class="devPhoto" src="/img/" alt="Pj">
                <div class="card-body">
                    <h3 class="about-us-title">Pedro Juan Henao</h3>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php echo $this->element('footer'); ?>
    </footer>
    <?php echo $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'); ?>
</body>
</html>