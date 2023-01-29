<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updates</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/news.css">
</head>
<body>
    <?php include_once('nav.php') ?>

    <div class="container">
        <div class="heading">Latest News</div>
        
        <div class="news-row">
           
           <?php
                include_once("conn.php");
                $sql = "SELECT * FROM `news` order by `date` desc";   
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $img = $row['image'];
                    $title = $row['title'];
                    $descript = $row['descript'];
                    $date = $row['date'];
            ?>

            <div class="news-card">
                <div class="image">
                    <img src="news_img/<?php echo $img; ?>" alt="img">
                </div>
                <div class="content">
                    <div>
                        <div class="news-heading"><?php echo $title; ?></div>
                        <div class="news-text"><?php echo $descript; ?></div>
                    </div>
                    <div class="btn-group">
                        <div class="btn"><b>Date:</b> <?php echo $date; ?></div>
                        <input type="checkbox" class="read-more btn">
                    </div>
                </div>
            </div>

            <?php
                }
            ?>
        </div>
    </div>

    <?php include_once('footer.php') ?>
</body>
</html>