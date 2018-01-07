function imgclick(obj)
{
	window.open(obj.src,'_blank');
}


function update()
{
    var url=$("#url").val();
    var pos=url.indexOf("details?id");
    if(pos>=0){
        url=url.substr(pos,url.length);
        url="market://"+url;
    }
	$.post("ad_update.php",
    {
        url:url
    },
    function(data, status){
        alert('업데이트 완료되었습니다.');
        location.replace('ad.php');
    });
}