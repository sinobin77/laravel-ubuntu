<!DOCTYPE html>
<html>
<head>
    <title>360网销</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <meta name="description" content="">

    <link rel="stylesheet" href="/css/weui.min.css">
    <link rel="stylesheet" href="/css/jquery-weui.css">
    <link rel="stylesheet" href="/css/demos.css">

    @yield("diy-css")

</head>

<body ontouchstart>

@yield("content")

<script src="/js/jquery-2.1.4.js"></script>
<script src="/js/fastclick.js"></script>
<script>
    $(function() {
        FastClick.attach(document.body);
    });
</script>
<script src="/js/jquery-weui.js"></script>

@yield("script")

</body>
</html>
