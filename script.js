function val(){ 
	var regID = /^[a-zA-Z0-9#]+$/;
	var nonword = /^[a-zA-Z ]+$/;
    var IID = document.getElementById('ItemID').value;
    var IName = document.getElementById('ItemName').value;
    var SID = document.getElementById('SupplierID').value;
    var BID = document.getElementById('BatchID').value;
    var Quan = document.getElementById('Quantity').value;
    var EDate = document.getElementById('ExpiryDate').value;
    var Notes = document.getElementById('Note').value;
	var v1,v2,v3,v4,v5,v6,v7 = false;
    if(!IID){ 
		document.getElementById('ItemID').placeholder  = "special character is not allowed except #";
		document.getElementById('ItemID').style.borderColor = "red";
        v1 = false;
    }  
    else if(!IID.match(regID)){ 
		document.getElementById('ItemID').placeholder  = "special character is not allowed except #";
		document.getElementById('ItemID').style.borderColor = "red"; 
        v1 = false;
    }
    else{ 
		document.getElementById('ItemID').placeholder  = "";
		document.getElementById('ItemID').style.borderColor = "";
		v1 = true;
    }
    if(!IName){
        error += "Please fill the Item Name\n";
		document.getElementById('ItemName').placeholder  = "special character is not allowed except #";
		document.getElementById('ItemName').style.borderColor = "red";
        v2 = false;
    }    
    else if(!IName.match(nonword)){ 
		document.getElementById('ItemName').placeholder  = "special character is not allowed except #";
		document.getElementById('ItemName').style.borderColor = "red";
        v2 = false;
    }
    else{ 
		document.getElementById('ItemName').placeholder  = "";
		document.getElementById('ItemName').style.borderColor = "";
		v2 = true;
    }
    if(!SID){ 
		document.getElementById('SupplierID').placeholder  = "special character is not allowed except #";
		document.getElementById('SupplierID').style.borderColor = "red";
        v3 = false;
    }    
    else if(!SID.match(regID)){ 
		document.getElementById('SupplierID').placeholder  = "special character is not allowed except #";
		document.getElementById('SupplierID').style.borderColor = "red";
        v3 = false;
    }
    else{ 
		document.getElementById('SupplierID').placeholder  = "";
		document.getElementById('SupplierID').style.borderColor = "";
		v3 = true;
    }
    if(!BID){ 
		document.getElementById('BatchID').placeholder  = "special character is not allowed except #";
		document.getElementById('BatchID').style.borderColor = "red";
        v4 = false;
    }   
    else if(!BID.match(regID)){ 
		document.getElementById('BatchID').placeholder  = "special character is not allowed except #";
		document.getElementById('BatchID').style.borderColor = "red";
        v4 = false;
    }
    else{ 
		document.getElementById('BatchID').placeholder  = "";
		document.getElementById('BatchID').style.borderColor = "";
		v4 = true;
    } 
    if(!Quan){ 
		document.getElementById('Quantity').placeholder  = "Please fill the Quantity";
		document.getElementById('Quantity').style.borderColor = "red";
        v5 =  false;
    }    
	else{
		document.getElementById('Quantity').placeholder  = "";
		document.getElementById('Quantity').style.borderColor = "";
        v5 =  true;
	}
    if(!EDate){ 
		document.getElementById('ExpiryDate').placeholder  = "Please fill the Exiry Date";
		document.getElementById('ExpiryDate').style.borderColor = "red";
        v6 =  false;
    }   
	else{
		document.getElementById('ExpiryDate').placeholder  = "";
		document.getElementById('ExpiryDate').style.borderColor = "";
		v6 =  true;
	}
    if(!Notes){ 
		document.getElementById('Note').placeholder  = "Please fill the Note";
		document.getElementById('Note').style.borderColor = "red";
        v7 =  false;
    }
	else{
		document.getElementById('Note').placeholder  = "";
		document.getElementById('Note').style.borderColor = "";
		v7 = true;
	}
    if(v1 == false ||v2 == false ||v3 == false ||v4 == false ||v5 == false ||v6 == false ||v7 == false){ 
		alert('Invalid input, please check your information~');
    	return false;
    }
    else{
    	return true;    // in success case
    }
}  
function loginPage(){ 
	var regID = /^[a-zA-Z0-9]+$/;
	var nonword = /^[a-zA-Z ]+$/;
	var lUser = document.getElementById('LUsername').value;
	var lPass = document.getElementById('LPassword').value;	
	var v1,v2 = false;
	if(!lUser){
		document.getElementById('LUsername').style.placeholder = "symbol is not allowed";
		document.getElementById('LUsername').style.borderColor = "red";
		v1 = false;
	}  
	else if(!lUser.match(regID)){
		document.getElementById('LUsername').style.placeholder = "symbol is not allowed";
		document.getElementById('LUsername').style.borderColor = "red";
		v1 = false;
	}
	else{ 
		document.getElementById('LUsername').placeholder  = "";
		document.getElementById('LUsername').style.borderColor = "";
		v1 = true;
	}
	if(!lPass){  
		document.getElementById('LPassword').style.borderColor = "red";
		v2 = false;
	}  
	else if(!lPass.match(regID)){  
		document.getElementById('LPassword').style.borderColor = "red";
		v2 = false;
	}
	else{  
		document.getElementById('LPassword').style.borderColor = "";
		v2 = true;
	}
	if(v1 == false || v2 == false){ 
		alert('Please type the correct username and password');
		return false;
	}
	else{
		return true;    // in success case
	}
}