var elm=document.getElementById('db');

elm.addEventListener('change',loadpage);

function loadpage(){
    var ulist=document.getElementById('ulist');
    
    
    var selval=elm.value;
    
    if(selval=="1"){
        ulist.childNodes[0].style.color="red";
    }
    else if(selval=="2"){
        ulist.childNodes[1].style.color="green";
    }
    else if(selval=="3"){
        ulist.childNodes[2].style.color="blue";
    }
	else if(selval=="none"){
		///uncoloring all the nodes
		for(var ind=0;ind<ulist.childNodes.length;ind++){
			ulist.childNodes[ind].style.color="black";
		}
	}
}