<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8">
<title>Image Launcher</title>
<style>
    body {
        margin: 0;
        background: #111;
        color: #fff;
        font-family: sans-serif;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 12px;
        padding: 20px;
    }
    .item {
        background: #222;
        border-radius: 10px;
        overflow: hidden;
        cursor: pointer;
        border: 1px solid #333;
        transition: 0.2s;
    }
    .item:hover {
        transform: scale(1.05);
    }
    img {
        width: 100%;
        height: 130px;
        object-fit: cover;
    }
    .label {
        padding: 8px;
        font-size: 12px;
        text-align: center;
        direction: ltr;
    }
</style>
</head>
<body>

<h2 style="padding:20px;">لانچر تصاویر</h2>

<div class="grid">
<?php
$folder = "images"; // نام پوشه عکس‌ها

$files = scandir($folder);

foreach ($files as $file) {
    if (preg_match("/\.(jpg|jpeg|png|gif|webp)$/i", $file)) {
        $path = "$folder/$file";
        echo "
        <div class='item' onclick=\"window.open('$path','_blank')\">
            <img src='$path'>
            <div class='label'>$file</div>
        </div>
        ";
    }
}
?>
</div>

</body>
</html>
