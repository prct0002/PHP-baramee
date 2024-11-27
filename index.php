<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบสมัครงาน - นายบารมี</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .main-container1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #007bff;
        }
        h1 {
            margin: 10px 0;
            color: #333;
        }
        p {
            margin: 5px 0;
            color: #555;
            font-size: 1em;
        }
        .portfolio-container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #007bff;
            max-width: 400px;
            width: 100%;
        }
        .portfolio-img {
            width: 100%;
            max-width: 300px;
            margin: 10px 0;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- 1 -->
        <div class="container">
            <?php
            $profileImg = "img/BB.jpg";
            $name = "นาย บารมี หาดอน";
            $position = "ตัดต่อ";
            $education = "วิทยาลัยพณิชยการพลาญชัยร้อยเอ็ด";
            ?>

            <img src="<?php echo $profileImg; ?>" alt="Profile Image" class="profile-img">
            <h1><?php echo $name; ?></h1>
            <p><strong>ตำแหน่งที่ต้องการ:</strong> <?php echo $position; ?></p>
            <p><strong>จบการศึกษาที่:</strong> <?php echo $education; ?></p>
            <p><strong>อายุ 18 / 20/5/2007</strong>
        </div>
        <div class="main-container">
        <!-- 2 -->
        <div class="container">
            <?php
            $name = "Skills";
            $X1 = "มีความสามารถด้านการตัดต่อ";
            $X2 = "เข้าหาสังคมเก่ง";
            ?>
            <h1><?php echo $name; ?></h1>
            <h3><?php echo $X1; ?></p></h3>
            <h3><?php echo $X2; ?></p></h3>
        </div>

        <div class="portfolio-container">
            <h2>ตัวอย่างผลงาน</h2>
            <?php
            $portfolioImg1 = "img/B.jpg";
            ?>
            <img src="<?php echo $portfolioImg1; ?>" alt="ผลงาน 1" class="portfolio-img">
        </div>
    </div>
</body>
</html>
