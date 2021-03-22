<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<style>
    input[type = text]{
        width: 300px;
        font-size: 16px;
        border: 2px solid red;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }
    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>
<body>
<h2><b>English - Vietnamese Dictionary</b></h2>
<form method="post" >
    <p>@csrf</p>
    <input type="text" name="search" placeholder="Enter words to find"/>
    <input type="submit" id="submit" value="Find"/>
</form>

</body>
</html>