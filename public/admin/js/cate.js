
function uploadCateIcon(){
    var files = $(this).get(0).files[0];
    if(!files)return;
    var _token = $('input[name=_token]').val();
    var callback = function(res){
        if(res.code>0){
            alert(res.msg)
        }else if( res.code ==0 ){
            $('input[name=icon]').val(res.data[1])
            $('.img-icon').attr('src',res.data[0])
        }
    }
    uploadImg(files,_token,callback);
}

function uploadImg(files,_token,callback){
    var formData = new FormData();
    formData.append("file", files, files.name);
    formData.append('_token', _token);
    $.ajax({
        type: 'POST',
        url: '/admin/cate/uploadImg',
        dataType: "json",
        data: formData,
        processData: false,
        contentType: false,
        success: function(res){
            callback(res)
        },
        error: function(){

        }
    });
}