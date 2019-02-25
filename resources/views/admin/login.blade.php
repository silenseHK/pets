<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>登录</title>

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">--}}
    <link rel="stylesheet" href="/admin/login/css/style.css">

    <script src="/admin/assets/js/jquery-1.10.2.js"></script>
    <script src="/admin/login/js/index.js"></script>
    <script src="/layui/layui.all.js"></script>

</head>

<body>

<div class="login">
    <h1>Login</h1>
    <form method="post" action="/admin/login/login" onsubmit="return login()">
        <input type="text" name="account" placeholder="Account" required="required" />
        <input id="password" type="password" name="password" placeholder="Password" required="required" />
        <input style="width:160px;" type="text" name="verify" placeholder="Verify" required="required" />
        <img id="verify" style="width:120px;height:37px;position: absolute;right: 0;border-radius: 4px;cursor:pointer;" src="{{captcha_src()}}" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>

    @include('admin/layout/error')
</div>



<script  src="/admin/login/js/index.js"></script>

<script>
    $('#verify').click(function(){
        var that = this
        $.post('/admin/login/verify',{},function(res){
            $(that).attr('src',res);
        },'text');

    })

    function login(){
        var _token = $('meta[name="csrf-token"]').attr('content');
        var account = $.trim($('input[name=account]').val());
        var password = $.trim($('#password').val());
        var verify = $.trim($('input[name=verify]').val());
        $.post('/admin/login/login',{_token:_token,account:account,password:password,verify:verify},function(res){
            if(res.code>0)
                layer.msg(res.msg)
            if(res.code==0)
                location.href = '/admin/index';
        },'json')
        return false;
    }
</script>




</body>

</html>
