let p_popup = document.getElementById("ProfilePOPUP");

function openpopup(){
    p_popup.classList.add("open-popup"); 
}

function closepopup(){
    p_popup.classList.remove("open-popup");  
}

let E_popup = document.getElementById("EmployerPOPUP");

function openEmployerpopup(){
   p_popup.classList.remove("open-popup");
    E_popup.classList.add("openForm-popup");

}

function closeEmployerpopup(){
    E_popup.classList.remove("openForm-popup");
}

//enables submistion of forms
function enable(){
	if (document.getElementById("Policycheckbox").checked){
		document.getElementById("submitCreate").disabled=false;
	}else{
		document.getElementById("submitCreate").disabled=true;
	}
	
	
}