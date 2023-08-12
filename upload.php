
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload your Document</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header><h1 class="logo"><a href="#">AssignmentKaro.com</a></h1></header>
    <h1 class ="upl">Upload your assignment instruction or material here!</h1>
<centre>
        <div class="main">
            <form action="uploadserv.php" method="POST" enctype="multipart/form-data" class="w-50">
                <input type="file"  name="file"><br><br>
                <button type="submit" name="btn">
                    UPLOAD
                </button>
            </form>
        </div>
</centre>
</body>
</html>
 