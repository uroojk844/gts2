<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/services.css">
</head>
<body>
    <?php include_once("nav.php"); ?>
    
    <section id="services" class="container services">   
        <div class="heading">Our Services</div>
        <div class="row"></div>
    </section>

    <?php include_once("footer.php"); ?>
    <script src="https://kit.fontawesome.com/a24ff9630f.js" crossorigin="anonymous" defer></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/index.js"></script>
    <script>
       for (let i = 0; i < serviceList.length; i++) {
            $('.services .row').append(`<div class="card">
                <img src="${serviceList[i].img}" alt="img">
                <div class="content">
                    <div class="title">${serviceList[i].title}</div>
                    <div class="desc">${serviceList[i].desc}</div>
                    <input type='checkbox' class="read">
                </div>
            </div>`);
        }
    </script>
</body>
</html>