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
<form action="{{'csrf'}}" method="post">
    收款人：<input type="text" name="name" placeholder="请输入收款人" id="">
    金额：<input type="text" name="money" placeholder="请输入转账金额" id="">
    <input type="submit" value="转账">
    {{csrf_field()}}
</form>
</body>
</html>