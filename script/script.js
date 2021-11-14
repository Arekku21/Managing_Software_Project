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
    if(!IID || !IID.match(regID)){ 
		document.getElementById('ItemID').placeholder  = "special character is not allowed except #";
		document.getElementById('ItemID').style.borderColor = "red";
        v1 = false;
    }   
    else{ 
		document.getElementById('ItemID').placeholder  = "";
		document.getElementById('ItemID').style.borderColor = "";
		v1 = true;
    }
    if(!IName || !IName.match(nonword)){ 
		document.getElementById('ItemName').placeholder  = "special character is not allowed except #";
		document.getElementById('ItemName').style.borderColor = "red";
        v2 = false;
    }     
    else{ 
		document.getElementById('ItemName').placeholder  = "";
		document.getElementById('ItemName').style.borderColor = "";
		v2 = true;
    }
    if(!SID || !SID.match(regID)){ 
		document.getElementById('SupplierID').placeholder  = "special character is not allowed except #";
		document.getElementById('SupplierID').style.borderColor = "red";
        v3 = false;
    }    
    else{ 
		document.getElementById('SupplierID').placeholder  = "";
		document.getElementById('SupplierID').style.borderColor = "";
		v3 = true;
    }
    if(!BID || !BID.match(regID)){ 
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
	if(!lUser || !lUser.match(regID)){
		document.getElementById('LUsername').style.placeholder = "symbol is not allowed";
		document.getElementById('LUsername').style.borderColor = "red";
		v1 = false;
	}   
	else{ 
		document.getElementById('LUsername').placeholder  = "";
		document.getElementById('LUsername').style.borderColor = "";
		v1 = true;
	}
	if(!lPass || !lPass.match(regID)){  
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

// Sales Add validation
function Salesval(){ 
	var regID = /^[0-9]+$/;
	var nonchar = /^[a-zA-Z]+$/;
	var nonnumber = /^[0-9.]+$/;  
    var SD = document.getElementById('SDate').value; 
    var TA = document.getElementById('TAmount').value; 
    var PT = document.getElementById('PType').value; 
    var D = document.getElementById('Discount').value; 
    var PA = document.getElementById('PAmount').value; 
    var RA = document.getElementById('RAmount').value; 
	
	var v2,v3,v4,v5,v6,v7 = false; 
    if(!SD){  
		document.getElementById('SDate').style.borderColor = "red";
        v2 =  false;
    }   
	else{ 
		document.getElementById('SDate').style.borderColor = "";
		v2 =  true;
	}
    if(!TA || !TA.match(nonnumber)){ 
		document.getElementById('TAmount').value  = "only allowed number";
		document.getElementById('TAmount').style.borderColor = "red";
        v3 = false;
    }    
    else{  
		document.getElementById('TAmount').style.borderColor = "";
		v3 = true;
    }
    if(!PT || !PT.match(nonchar)){ 
		document.getElementById('PType').value  = "only allowed character";
		document.getElementById('PType').style.borderColor = "red";
        v4 = false;
    }   
    else{  
		document.getElementById('PType').style.borderColor = "";
		v4 = true;
    }
    if(!D || !D.match(regID) ){ 
		document.getElementById('Discount').value  = "only allowed number";
		document.getElementById('Discount').style.borderColor = "red";
        v5 =  false;
    }    
	else{ 
		document.getElementById('Discount').style.borderColor = "";
        v5 =  true;
	} 
    if(!PA|| !PA.match(nonnumber)){ 
		document.getElementById('PAmount').value  = "only allowed number";
		document.getElementById('PAmount').style.borderColor = "red";
        v6 =  false;
    }   
	else{ 
		document.getElementById('PAmount').style.borderColor = "";
		v6 =  true;
	} 
    if(!RA|| !RA.match(nonnumber)){ 
		document.getElementById('RAmount').value  = "only allowed number";
		document.getElementById('RAmount').style.borderColor = "red";
        v7 =  false;
    }
	else{ 
		document.getElementById('RAmount').style.borderColor = "";
		v7 = true;
	} 
    if(v2 == false || v3 == false || v4 == false || v5 == false || v6 == false || v7 == false){ 
		alert('Invalid input, please check your information~');
    	return false;
    }
    else{
    	return true;    // in success case
    }  
}  

function Supval(){
	var regID = /^[0-9]+$/;
	var nonchar = /^[a-zA-Z ]+$/;
	var nonnumber = /^[0-9-]+$/;
	var nonchar = /^[a-zA-Z ]+$/;
	var nonaddress = /^[a-zA-Z0-9\s,'-]*$/;
	var nonemail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
    var CName = document.getElementById('CompanyName').value;
    var MPhone = document.getElementById('MobilePhone').value; 
    var EmailAdd = document.getElementById('EmailAddress').value;  
    var Add = document.getElementById('Address').value; 
    var City = document.getElementById('City').value;  
	var v2,v3,v4,v5,v6 = false; 
    if(!CName || !CName.match(nonchar)){ 
		document.getElementById('CompanyName').value  = "only char and space is allowed";
		document.getElementById('CompanyName').style.borderColor = "red";
        v2 = false;
    }   
    else{  
		document.getElementById('CompanyName').style.borderColor = "";
		v2 = true;
    }
    if(!MPhone || !MPhone.match(nonnumber)){ 
		document.getElementById('MobilePhone').value  = "only number and - is allowed";
		document.getElementById('MobilePhone').style.borderColor = "red";
        v3 = false;
    }   
    else{  
		document.getElementById('MobilePhone').style.borderColor = "";
		v3 = true;
    }
    if(!EmailAdd || !EmailAdd.match(nonemail)){ 
		document.getElementById('EmailAddress').value  = "Please follow email format";
		document.getElementById('EmailAddress').style.borderColor = "red";
        v4 = false;
    }   
    else{  
		document.getElementById('EmailAddress').style.borderColor = "";
		v4 = true;
    }
    if(!Add || !Add.match(nonaddress)){ 
		document.getElementById('Address').value  = "only character is allowed";
		document.getElementById('Address').style.borderColor = "red";
        v5 = false;
    }   
    else{  
		document.getElementById('Address').style.borderColor = "";
		v5 = true;
    }
    if(!City || !City.match(nonchar)){ 
		document.getElementById('City').value  = "only character is allowed";
		document.getElementById('City').style.borderColor = "red";
        v6 = false;
    }   
    else{  
		document.getElementById('City').style.borderColor = "";
		v6 = true;
    }
    if(v2 == false || v3 == false || v4 == false|| v5 == false || v6 == false){ 
		alert('Invalid input, please check your information~');
    	return false;
    }
    else{
    	return true;    // in success case
    }  
}

// Reminder validation
function Reminderval(){
	
	var nonchar = /^[a-zA-Z0-9 ]+$/;
    var RName = document.getElementById('ReminderName').value; 
    var Desc = document.getElementById('Description').value;
    var DTime = document.getElementById('DateTime').value;  
	 
	var v1,v2,v3 = false;
	
    if(!RName || !RName.match(nonchar)){  
		document.getElementById('ReminderName').value  = "symbol is not allowed";
		document.getElementById('ReminderName').style.borderColor = "red";
		v1 = false;
	}
	else{ 
		document.getElementById('ReminderName').style.borderColor = "";
		v1 = true;
	}
    if(!Desc){   
		document.getElementById('Description').style.borderColor = "red";
		v2 = false;
	}
	else{ 
		document.getElementById('Description').style.borderColor = "";
		v2 = true;
	}
    if(!DateTime){   
		document.getElementById('DateTime').style.borderColor = "red";
		v3 = false;
	}
	else{ 
		document.getElementById('DateTime').style.borderColor = "";
		v3 = true;
	}
    if(v1 == false || v2 == false || v3 == false){ 
		alert('Invalid input, please check your information~');
    	return false;
    }
    else{
    	return true;    // in success case
    }  
}