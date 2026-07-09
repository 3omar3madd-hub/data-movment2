<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>user regestration</h2>

<form action="process.php?id=100" method="POST" enctype="multipart/form-data">
    <div class="box">
        <label for="name">name:</label>
        <input type="name" name="name" value="<?php echo $_SESSION['old']['name']??""?>">
        <span style="color: red;">*<?php echo$_SESSION['errors']['name']??""?></span>
    </div>

    <br><br>
    <div class="box">
        <label for="email">email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['old']['email']??""?>">
        <span style="color: red;">*<?php echo$_SESSION['errors']['email']??""?></span>
    </div>

    <br><br>
        <div class="box">
        <label for="password">password</label>
        <input type="password" name="password" value="<?php echo $_SESSION['old']['password']??""?>">
        <span style="color: red;">*<?php echo$_SESSION['errors']['password']??""?></span>
    </div>
    <br><br>
    <div class="box">
        <label for="language">language</label>
    <select name="lang" id="language">
        <option value="" <?php echo (($_SESSION['old']['lang']??"")==="")?   'selected': ''?> hidden></option>
        <option value="ar" <?php echo (($_SESSION['old']['lang']??"")==="ar")?   'selected': ''?>>Arabic</option>
        <option value="en"<?php echo (($_SESSION['old']['lang']??"")==="en")?   'selected': ''?>>English</option>
    </select>
        <span style="color: red;">*<?php echo$_SESSION['errors']['lang']??""?></span>
    </div>

    <br> <br>
    <div class="box">
        <label for="image">profile image:</label>
        <input type="file" name="image" id="image">
        <span style="color: red;"><?php echo$_SESSION['errors']['email']??""?>*</span>
    </div>
    <br>
    <button>send</button>
</form>

</body>
</html>