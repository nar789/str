function no() {
	location.replace('p.php');
}

function call() {
	num="tel:"+num;
	window.parent.postMessage(num,"*");
}

function ani(){
	$("#back").animate({left:'0px'},"fast");	
}