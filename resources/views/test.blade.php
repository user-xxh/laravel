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
    <h2>现在是北京时间:</h2>
    {{date('Y-m-d H:i:s', $data)}}
    @if($day == 1)
        星期一
    @elseif($day == 2)
        星期二
    @elseif($day == 3)
        星期三
    @elseif($day == 4)
        星期四
    @elseif($day == 5)
        星期五
    @elseif($day == 6)
        星期六
    @else
        星期日
    @endif
</body>
</html>