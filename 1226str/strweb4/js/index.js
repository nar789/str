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
	chgnavcolor();
	navsel(no);
	next(no);
	curpage=no;
}

function navsel(no){
	$("#n"+no).css("background-color","#62108d");
	$("#n"+no).css("color","white");
}

function chgnavcolor() {
	for(var i=1;i<=3;i++){
		$("#n"+i).css("background-color","white");
		$("#n"+i).css("color","#4d4845");
	}
}

function init(){
	navsel(1);
}

window.onload=init();

window.addEventListener("message",function(e){
	var d=e.data;
	window.parent.postMessage(d,"*");
},false);