<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include_once("nav.php"); ?>

    <section class="banner">
        <div class="name">Contact Us</div>
    </section>
    
    <section class="about">
        <img src="img/contact.webp" alt="contact">
        <div class="content">
            <div class="heading">Contact Us</div>
            <input type="text" id="name" placeholder="Name">
            <input type="email" id="mail" placeholder="Email">
            <input type="tel" id="phone" placeholder="Mobile">
            <textarea rows="5" id="message" placeholder="Your query"></textarea>
            <input type="submit" id="send" value="Send message">
        </div>
    </section>

    <?php include_once("footer.php"); ?>
    <script src="https://kit.fontawesome.com/a24ff9630f.js" crossorigin="anonymous" defer></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script>
        $('#send').click(function (e) { 
            let name = $('#name').val();
            let mail = $('#mail').val();
            let phone = $('#phone').val();
            let message = $('#message').val();
            if (name.length ==0  || mail.length == 0 || phone.length==0 || message.length==0){
                alert("Please fill all fields!");
                return;
            } 
                
            window.open(`http://wa.me/+918114076364?text=Name:%20${name}%0aEmail:%20${mail}%0aPhone:%20${phone}%0aMessage:${message}`, '_blank');
        });
    </script>
</body>
</html>