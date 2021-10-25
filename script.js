function val(){
	var error= "";
	var regID = /^[a-zA-Z0-9#]+$/;
	var nonword = /^[a-zA-Z ]+$/;; 
    var IID = document.getElementById('ItemID').value;
    var IName = document.getElementById('ItemName').value;
    var SID = document.getElementById('SupplierID').value;
    var BID = document.getElementById('BatchID').value;
    var Quan = document.getElementById('Quantity').value;
    var EDate = document.getElementById('ExpiryDate').value;
    var Notes = document.getElementById('Note').value;
	var validation = true;
    if(!IID){
        error += "Please fill the Item ID\n";
        validation = false;
    }  
    else if(!IID.match(regID)){
    	error += "The Item ID special symbol and space is not allowed except symbol#\n";
        validation = false;
    }
    else{ 
    }
    if(!IName){
        error += "Please fill the Item Name\n";
        validation = false;
    }    
    else if(!IName.match(nonword)){
    	error += "The Item Name number and symbol is not allowed \n";
        validation = false;
    }
    else{ 
    }
    if(!SID){
        error += "Please fill the Supplier ID\n";
        validation = false;
    }    
    else if(!SID.match(regID)){
    	error += "The supplier ID character, number and symbol # is allowed\n";
        validation = false;
    }
    else{ 
    }
    if(!BID){
        error += "Please fill the Batch ID\n";
        validation = false;
    }   
    else if(!BID.match(regID)){
    	error += "The BatchID ID character, number and symbol # is allowed\n";
        validation = false;
    }
    else{ 
    } 
    if(!Quan){
        error += "Please fill the Quantity\n";
        validation =  false;
    }    
    if(!EDate){
        error += "Please fill the Exiry Date\n";
        validation =  false;
    }    
    if(!Notes){
        error += "Please fill the Note\n";
        validation =  false;
    }       
    if(validation == false){
    	alert(error);
    	return false;
    }
    else{
    	return true;    // in success case
    }
} 