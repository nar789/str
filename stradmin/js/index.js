
function menuclick(obj) {
	if(obj.id=="header"){ $("#ifr").attr('src','start.htm'); }
	else if(obj.id=="m1"){ $("#ifr").attr('src','member.php'); }
	else if(obj.id=="m2"){ $("#ifr").attr('src','chat.php'); }
	else if(obj.id=="m3"){ $("#ifr").attr('src','member2.php'); }
	else if(obj.id=="m4"){ $("#ifr").attr('src','ad.php'); }
}