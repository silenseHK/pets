

function changePwd(id){

    layer.prompt({title: '请输入新密码', formType: 1}, function(pass, index){

        if(!$.trim(pass))
            return layer.msg('请输入新密码')
        layer.close(index);
        var _token = $('meta[name="csrf-token"]').attr('content');
        $.post('/admin/admin/changePwd',{pwd:$.trim(pass),id:id,_token:_token},function(res){
            layer.msg(res.msg)
        },'json')
    });

}