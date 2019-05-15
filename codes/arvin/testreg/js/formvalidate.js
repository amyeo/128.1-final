$(document).ready(function(){

  $("#addemployee").click(validate);
  $("#addapplicant").click(validate);
  $("#editemployee").click(validate);
  
    function validate(){

    if($("[name=first_name]").val()=="" || $("[name=last_name]").val()=="" || $("[name=middle_initial]").val()=="" || $("[name=full_address]").val()==""||
      $("[name=birthday]").val()=="" || $("[name=place_of_birth]").val()=="" || $("[name=phone_number]").val()=="" || $("[name=email]").val()=="" ||$("[name=nationality]").val()==""||
      $("[name=SSN]").val()=="" || $("[name=applying_for]").val()=="" || $("[name=birth_cert_id]").val()==""){

      alert("Required fields must be filled!");
    }
    else if(!isDigit($("[name=phone_number]").val())){
      alert("Phone Number must only contain digits!");
    }
    else if(!isDigit($("[name=SSN]").val())){
      alert("SSN must only contain digits!");
    }

  else {
	if (((document.location).toString()).includes("add_employee")){
		$("#addform").submit();
		//////Writing other fields for other tables on a CSV
			
			
		
		
		//////
		//to do after form submits
		$("#addform").reset();
	}
   else if (((document.location).toString()).includes("register")){
    $("#addnew").submit();
	//////Writing other fields for other tables on a CSV
		
		
	
	
	//////
    //to do after form submits
    $("#addnew").reset();
  }
  else if (((document.location).toString()).includes("add_employee")){
    $("#addform").submit();
	//////Writing other fields for other tables on a CSV
		
		
	
	
	//////
    //to do after form submits
    $("#addform").reset();
  }
  else {
    $("#editform").submit();
    //to do after form submits
    $("#editform").reset();
  }
  }
  }

  function isDigit(text){
    if (text.match("[0-9]+")) {
      return true;
  }
  else {
    return false;
  }
}

	

});
