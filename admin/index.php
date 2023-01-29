<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload NEWS</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <?php
        include_once("nav.php");
        include_once("../conn.php");
        $msg = "";
        $date = date("d-m-Y");
        if(isset($_POST['submit'])){
            echo "fsf";
            $title = $_POST['title'];
            $descript = $_POST['descript'];
            $image = $_FILES['image']['name'];
            if(move_uploaded_file($_FILES['image']['tmp_name'], "news_img/$image")){
                $sql = "INSERT INTO `news`(`title`,`descript`,`image`,`date`) VALUES ('$title','$descript','$image','$date')";
                mysqli_query($conn, $sql);
                $msg = "Uploaded!!";
            }else{
                $msg = "Something went wrong!!";
            }
        }
    ?>

    <div class="container">

        <div class="heading">Upload NEWS</div>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="NEWS Title" name="title">
            <textarea placeholder="Write NEWS here..." name="descript"></textarea>
            <input type="file" name="image">
            <input type="submit" name="submit">
            <p><?php echo $msg; ?></p>
        </form>
    </div>

    <?php include_once("../footer.php"); ?>
</body>
</html>