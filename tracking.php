<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/services.css">
</head>
<body>
    <?php include_once("nav.php"); ?>

    <section class="banner">
        <div class="name">Take your service</div>
    </section>

    <section id="services" class="container services">
        <div class="row"></div>
    </section>

    <?php include_once("footer.php"); ?>
    <script src="https://kit.fontawesome.com/a24ff9630f.js" crossorigin="anonymous" defer></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script>
        var serviceList = [
            {
                img: "img/air.png",
                title: "Air Freight"
            },
            {
                img: "img/sea.png",
                title: "Sea Freight"
            },
            {
                img: "img/transport.png",
                title: "Transportation"
            },
            {
                img: "img/door.png",
                title: "Door to Door"
            },
            {
                img: "img/custom.png",
                title: "Custom Clearance"
            },
            {
                img: "img/logistics.png",
                title: "Logistics Services"
            },
            {
                img: "img/project.png",
                title: "Project Cargo"
            },
            {
                img: "img/warehousing.png",
                title: "Warehousing Services"
            },
        ];

       for (let i = 0; i < serviceList.length; i++) {
            $('.services .row').append(`<div class="card">
                <img src="${serviceList[i].img}" alt="img">
                <div class="content">
                    <div class="title">${serviceList[i].title}</div>
                    <div class="desc">GTS develops comprehensive air freight service plans tailored to meet customer’s specific requirements.</div>
                </div>
            </div>`);
        }
    </script>
</body>
</html>