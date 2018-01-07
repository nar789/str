
function update(no,cnt)
{
	$.post("chat_update.php",
    {
        no:no,
        content:encodeURIComponent($('#'+cnt+"content").val())
    },
    function(data, status){
        alert('업데이트 완료되었습니다.');
        location.replace('chat.php');
    });
}

function save(){
    var content=encodeURIComponent($("#content").val());
    if(content!=''){
        $.post("chat_update.php",
        {
            no:1,
            content:content
        },
        function(data, status){
            alert('금지단어 추가가 완료되었습니다.');
            location.replace('chat.php');
        });   
    }else{
        alert('내용을 채워주세요.');
    }
}

function init(){
    $.post("clear.php",{},function(d,s){});
}

window.onload=init();