curpage=1

function next(page) {
	$("#p"+curpage).css("z-index","1");
	var k=0;
	for(var i=1;i<=3;i++)
	{
		if(i!=curpage && i!=page)
			k=i;
	}
	$("#p"+k).css("z-index","0");
	$("#p"+page).ready(function(){
		$("#p"+page).css("left","100%");
		$("#p"+page).css("z-index","2");
		$("#p"+page).css("display","inline-block");
		$("#p"+page).animate({left:'0px'},"fast");	
	});	
}

function navclick(no){
	if(no==curpage)return;
	$("#n1").attr("src","img/p1.png")
	$("#n2").attr("src","img/r1.png")
	$("#n3").attr("src","img/m1.png")
	if(no==1)
	{
		$("#n1").attr("src","img/p.png")
		next(1);
	}else if(no==2){
		$("#n2").attr("src","img/r.png")
		next(2);
	}else{
		$("#n3").attr("src","img/m.png")
		next(3);
	}
	curpage=no;
}


window.addEventListener("message",function(e){
	var d=e.data;
	window.parent.postMessage(d,"*");
},false);