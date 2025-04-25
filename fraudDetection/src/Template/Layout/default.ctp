<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextShield</title>
    <?php echo $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'); ?>
    <?php echo $this->Html->css('navbarStyles'); ?>
    <?php echo $this->Html->css('https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css');?>
</head>
<body>
    <header>
        <?php echo $this->element('navbar'); ?>
    </header>

    <section id="home" class="container">
        <h1>Hi HELLO WORLD</h1>
    </section>
    <section id="mission" class="container">

    </section>
    <section id="how"></section>
    <section id="aboutUs"></section>

    <?php echo $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'); ?>
</body>
</html>