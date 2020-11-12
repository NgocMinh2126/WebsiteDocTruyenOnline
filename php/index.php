<?php
$conn = mysqli_connect('localhost', 'ngocminh2621', '1', 'tmtmanga');
if (!$conn) {
    echo 'Fail to connect to the database ' . mysqli_connect_error();
} else {
    $sqlString = "SELECT * FROM truyen";
    $result = mysqli_query($conn, $sqlString);
    $truyen = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MTmanga.css">
</head>

<body>
    <div class="main-dstruyen-detail">
        <?php foreach ($truyen as $ten) { ?>
            <a href="#" class="main-dstruyen-detail-a">
                <img src="<?php echo htmlspecialchars($ten['AnhBia']) ?>" class="main-dstruyen-img">
                <div class="main-dstruyen-detail-tentruyen"><?php echo htmlspecialchars($ten['TenTruyen']) ?></div>
            </a>
        <?php } ?>
    </div>
</body>

</html>