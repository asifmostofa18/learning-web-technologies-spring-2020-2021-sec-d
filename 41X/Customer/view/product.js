function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('nname').innerHTML = ' Please Write Down the Name!!!';
		
	}
	else if(data.length <3){
		document.getElementById('nname').innerHTML = 'Name required at least three letters';
	
	}

	else if (data >=0 && data <=9){
		document.getElementById('nname').innerHTML = ' Name is invalid';

	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('nname').innerHTML = 'Name seems Valid';

     }
    
    else{
		document.getElementById('nname').innerHTML = 'Name is invalid';

	}
	

}

function BuyingValidation(){

    let data= document.getElementById('bPrice').value;

	if(data == ''){
		document.getElementById('BPrice').innerHTML = ' Please Write Down the Price';		
	}
	else if(data.length <2){
		document.getElementById('BPrice').innerHTML = 'Price required at least two digit';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('BPrice').innerHTML = ' Price is valid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('BPrice').innerHTML = 'Price seems Invalid';
     }
    
    else{
		document.getElementById('BPrice').innerHTML = 'Price is valid';
	}
	

}

function validateform(){  
	const cPass = document.getElementById('name').value;
	const nPass = document.getElementById('bPrice').value;
	
		 
   if (cPass == null || cPass == "") {
	  alert("Product name can't be blank");  
	  return false; 
   }
   
   else if (nPass == null || nPass == "") {
	   alert("Price can't be blank");  
	  return false;
   }
  


   
   else {
	   alert("Are you confirm to add this product in your Cart????");
		return true;
   }

  }