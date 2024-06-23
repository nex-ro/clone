<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="" style="display: flex;justify-content: center; align-items: center; height: 500px">
    <div class=""style=' padding:20px;' >
        <a href="index.php?page=dashboard"><button style="width: 100% ;padding: 10px; border-radius: 10px; margin: 5px;">Masuk</button></a>
    <?php 

    echo '<a href="'.$client->createAuthUrl().'"><button style="width: 100%;padding: 10px; border-radius: 10px;margin: 5px;">Login With Google</button></a>'
    ?>
    </div>
    </div>
</body>
</html>