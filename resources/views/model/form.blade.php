<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="model_form_add" method="post">
    <input type="text" name="name" placeholder="请输入姓名" id=""><br>
    <input type="number" name="age" placeholder="请输入年龄" id=""><br>
    <input type="email" name="email" placeholder="请输入邮箱" id=""><br>
    {{csrf_field()}}
    <input type="submit" value="提交">
</form>
</body>
</html>