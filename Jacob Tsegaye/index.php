<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISO Upload Image</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>