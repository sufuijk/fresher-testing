
$("#infoForm").submit(function(e){

	var name = document.getElementById("yourName");
	var phone = document.getElementById("phone");
	var email = document.getElementById("email");
	var company = document.getElementById("company");
	var message = document.getElementById("message");

	if( name.value != "" 
		&& validatePhone(phone.value) && phone.value!= "" 
		&& validateEmail(email.value) && email.value!= ""
		&& company.value != ""
		&& message.value != "")
	{
		var form = this;
 		e.preventDefault();
		swal({
	      title: "Success",
	      text: "You email has been sent.",
	      icon: "success",
	      buttons:'Continue',
	      className:"button-alert-success"
	    }).then(function(isConfirm) {
	      if (isConfirm) {
	        form.submit();
	      } 
	    })
	}else{
		swal({
			title:"Face-plant!",
			text: "Ooops, something went wrong.",
		    icon: "error",
		    buttons:'Try again',
		    className:"button-alert-error"
		});
		return false;
	}
});


	function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	function validatePhone(numberPhone) {
		var re = /^[0-9 ()-]+$/;
		return re.test(numberPhone);
	}

