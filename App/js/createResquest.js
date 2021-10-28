var request = null

 function createResquest(){

 	try{
 		request = new XMLHttpRequest();
 	}catch(teymicrosoft){
 		try{
 			request = new AtiveXObject("Msxml2.XMLHTTP");
 		}catch(othermicrosoft){
 			try{
 				request = new AtiveXObject("Microsoft.XMLHTTP");
 			}catch(failed){
 				request = null;
 			}
 		}
 	}
	if(request == null){
		alert("Erro ao criar requisição");
	}

 }