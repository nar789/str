function imgclick(obj)
{
	window.open(obj.src,'_blank');
}

function del(no)
{
	$.post("member2_del.php",
    {
        no:no
    },
    function(data, status){
        alert('삭제가 완료되었습니다.');
        location.replace('member2.php');
    });
}

function update(no,cnt)
{
    var url=$('#'+cnt+"url").val();
    var pos=url.indexOf("details?id");
    if(pos>=0){
        url=url.substr(pos,url.length);
        url="market://"+url;
    }
	$.post("member2_update.php",
    {
        no:no,
        title:encodeURIComponent($('#'+cnt+"title").val()),
        url:url,
        content:encodeURIComponent($('#'+cnt+"content").val())
    },
    function(data, status){
        alert('업데이트 완료되었습니다.');
        location.replace('member2.php');
    });
}

function save(){
    if(pfurl!='')
    {
        var url=$("#url").val();
        var pos=url.indexOf("details?id");
        if(pos>=0){
            url=url.substr(pos,url.length);
            url="market:"+url;
        }
        var title=encodeURIComponent($("#title").val());
        var content=encodeURIComponent($("#content").val());
        if(url!=''&&content!=''&&title!=''){
            $.post("member2_insert.php",
            {
                pfurl:pfurl,
                title:title,
                url:url,
                content:content
            },
            function(data, status){
                alert('회원추가가 완료되었습니다.');
                location.replace('member2.php');
            });   
        }else{
            alert('내용을 채워주세요.');
        }
    }else{
        alert('프로필 사진을 선택해주세요.');
    }
}