var id=0;
var target=0;
var tfind=null;
var ttarget=null;

function adclick(url){
	window.parent.postMessage(url,"*");	
}

function connect(){

	if(tfind!=null)return;
	if(ttarget!=null)clearInterval(ttarget);
	id=0; target=0;
	$(".chatbox").html("");
	$(".find").css("display","block");
	$(".find").css("opacity","0.5");
	//삽입 
	$.post("r_insert.php",{},function(d,s){
		id=d;
		//타겟물색	
		setInterval(function(){
			$.post("r_update.php",{id:id},function(d,s){});
		},1000);
		tfind=setInterval(function(){
			if(target==0){
				$.post("r_select.php",{id:id},function(d,s){
					target=d;
					if(target!=0){
						talkstart();
					}
				});
			}
		},1000);
	});
	
}

function talkstart(){
	
	clearInterval(tfind); tfind=null;
	$(".chatbox").html("<center><div class=sysmsg>대화를 시작합니다.</div></center>");
	scrolldown();
	$(".find").css("display","none");
	$(".find").css("opacity","1.0");
	ttarget=setInterval(function(){

		$.post("r_target.php",{target:target},function(d,s){
			var t=JSON.parse(d);
			if(t.time>3){//target is logout
				$(".chatbox").html($(".chatbox").html()+"<br><center<div class=sysmsg>상대방이 나갔습니다.</div></center>");
				$.post("r_target_update.php",{target:id},function(d,s){});
				scrolldown();
				clearInterval(ttarget);
				target=0;
				return;
			}
			if(t.upd==1)
			{
				$.post("r_target_update.php",{target:target},function(d,s){
					var msg=decodeURIComponent(t.msg);
					$(".chatbox").html($(".chatbox").html()+"<div class=line><div class=targetmsg>"+msg+"</div></div>");
					scrolldown();
				});
				
			}
		});

	},1000);
}

function scrolldown(){
	$(".chatbox").scrollTop($(".chatbox")[0].scrollHeight);
}

function send(){
	var msg=$("#msg").val();
	if(msg=="")return;
	if(checkword(msg)==1){
		$("#msg").val("");
		alert("욕설 및 금지어를 사용할 수 없습니다.")
		return;
	}
	if(id==0 || target==0)return;
	$(".chatbox").html($(".chatbox").html()+"<div class=line><div class=mymsg>"+msg+"</div></div>");
	scrolldown();
	msg=encodeURIComponent(msg);
	$.post("sendmsg.php",{id:id,msg:msg},function(d,s){});
	$("#msg").val("");
}

function checkword(msg){
	for(var i=0;i<cut.length;i++)
	{
		if(msg.indexOf(cut[i])>=0)
			return 1;
	}
	return 0;
}

function init(){
	$.post("getban.php",{},function(d,s){

		var b=decodeURIComponent(d);
		cut=b.split(',');
		for(var i=0;i<cut.length;i++){
			cut[i]=cut[i].trim();
		}
	});
}

window.onload=init();

