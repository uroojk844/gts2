<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Trans Solutions</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include_once("nav.php"); ?>

    <section class="landing">
        <div class="content">
            <div class="name">Global Trans Solutions</div>
            <div class="about">We are one of the premium freight forwarding companies in Riyadh, KSA, led by a professionally experienced team.</div>
            <a href="#services" class="btn">Get Started</a>
            <div class="btn open-btn">Express </div>
        </div>
    </section>

    <section id="services" class="container services">
        <div class="heading">Our Services</div>
        <div class="row"></div>
    </section>

    <section class="container why">
        <div class="heading">Why Choose Us</div>
        <div class="row"></div>
    </section>

    <section class="container">
        <div class="row client">
            <div class="heading">Our Client</div>
        </div>
    </section>

    <div class="model-box">
        <h3>Share your inquiry</h3>
        <div class="group">
            <label for="serviceBox"><i class="fas fa-fw fa-box"></i> Select a service</label>
            <select id="serviceBox">
                <option value="Air Freight">Air Freight</option>
                <option value="Sea Freight">Sea Freight</option>
                <option value="Transportation">Transportation</option>
                <option value="Custom Clearance">Custom Clearance</option>
                <option value="Door to Door Cargo">Door to Door Cargo</option>
                <option value="Project Logistics">Project Logistics</option>
                <option value="Warehousing & Storage">Warehousing & Storage</option>
                <option value="Logistics Consultation">Logistics Consultation</option>
            </select>
        </div>

        <div class="group">
            <label for="from"><i class="fas fa-fw fa-map-marker-alt"></i> From</label>
            <input type="text" id="from" placeholder="Pickup point">
        </div>

        <div class="group">
            <label for="to"><i class="fas fa-fw fa-map-marker-alt"></i> To</label>
            <input type="text" id="to" placeholder="Drop point">
        </div>

        <hr>

        <div class="group">
            <label for="email"><i class="fas fa-fw fa-envelope"></i> Email</label>
            <input type="email" id="email" placeholder="abc@example.com">
        </div>  
        
        <div class="btn-group">
            <input type="button" class="close-btn" value="Close">
            <input type="button" id="send" value="Submit">
        </div>
    </div>

    <a href="tel:+966556828900" class="call_now">
        <img src="img/call.png" alt="call">
    </a>

    <div class="sideSocial">
        <div class="social-item">
            <div class="icon"><i class="fas fa-phone"></i></div>
            <a href="tel:+966556828900" class="data">+966556828900</a>
        </div>
    </div>

    <?php include_once("footer.php"); ?>

    <script src="https://kit.fontawesome.com/a24ff9630f.js" crossorigin="anonymous" defer></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/index.js"></script>
    <script>
            var whyList = [
            {
                icon: "icons8-tools.gif",
                title: "We Got Tools"
            },
            {
                icon: "icons8-certificate.gif",
                title: "Certified Experience"
            },
            {
                icon: "cost.png",
                title: "Cost Effective"
            },
            {
                icon: "professional.png",
                title: "Highly Skilled Professionals"
            },
            {
                icon: "track.png",
                title: "Project Tracking"
            },
            {
                icon: "icons8-clock.gif",
                title: "50 years of experience"
            },
            {
                icon: "global.png",
                title: "Global Reach"
            },
            {
                icon: "insurance.png",
                title: "Comprehensive Insurance Coverage"
            },
        ];

        for (let i = 0; i < serviceList.length; i++) {
            $('.services .row').append(`<div class="card hero" style="background-image: url('${serviceList[i].img}')">
                    <div class="title">${serviceList[i].title}</div>
            </div>`);
        }

        for (let i = 0; i < whyList.length; i++) {
            $('.why .row').append(`<div class="card">
                <div class="content">
                    <img src="img/${whyList[i].icon}">
                    <div class="title">${whyList[i].title}</div>
                </div>
            </div>`);
        }

        for (let i = 1; i <= 9; i++) {
            $('.client').append(`<div class="card">
                <div class="content dflex">
                    <img src="img/clients/${i}.png">
                </div>
            </div>`);
        }

        var isOpen = false;
        $(".open-btn, .close-btn").click(function (e) { 
            if(!isOpen)
            $('.model-box').css('display','grid');
            else
            $('.model-box').slideToggle();

            isOpen = !isOpen;
        });

        $('#send').click(function (e) { 
            let service = $('#serviceBox').val();
            let email = $('#email').val();
            let from = $('#from').val();
            let to = $('#to').val();
            if (service.length ==0  || email.length == 0 || from.length==0 || to.length==0){
                alert("Please fill all fields!");
                return;
            } 
                
            window.open(`http://wa.me/+918114076364?text=Service:%20${service}%0aFrom:%20${from}%0aTo:%20${to}%0aEmail:${email}`, '_blank');
        });
    </script>
</body>
</html>