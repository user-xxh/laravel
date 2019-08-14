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
<form action="model_form_add" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="请输入姓名" id=""><br>
    <input type="number" name="age" placeholder="请输入年龄" id=""><br>
    <input type="email" name="email" placeholder="请输入邮箱" id=""><br>
    <input type="file" name="touxiang" id=""><br>
    <input type="text" name="yzm" maxlength="5" id=""><img src="{{captcha_src()}}" alt=""><br>
    {{csrf_field()}}
    <input type="submit" value="提交">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors -> all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
</body>
<script src="/js/app.js"></script>
<script>
    $(function () {
        $('img').click(function () {
            $(this).attr('src', '{{captcha_src()}}' + '&' + Math.random())
        })
    })
</script>
</html>