<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextShield</title>
    <?php echo $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'); ?>
    <?php echo $this->Html->css('navbarStyles'); ?>
    <?php echo $this->Html->css('styles'); ?>
    <?php echo $this->Html->css('https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css');?>
    <?php echo $this->Html->script('https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'); ?>

</head>
<body>
    <header>
        <?php echo $this->element('navbar'); ?>
    </header>
    <section id="home" class="container position-relative overflow-hidden">
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
    <section id="mission" class="container">
    </section>
    <section id="how"></section>
    <section id="aboutUs"></section>

    <?php echo $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'); ?>
</body>
</html>