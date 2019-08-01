function verifyAlls(form) {

	//var form = document.form1;

	msg = "";

	focusto = '';

	counter = 1;

	

	for (i = 0; i < form.elements.length; i++) {

			if(form.elements[i].className !=''){

				rules =	form.elements[i].className.split(" ");

				for(var r=0;r<rules.length;r++){

					switch(rules[r]){

						case 'required'	  :

											if(form.elements[i].value == ""){

												msg += counter +". कृपया  " +  form.elements[i].title + "\r\n";

												if(counter==1){	focusto = form.elements[i];	}

												counter++;

											}break;

						case 'numberOnly' : 

											if(isNaN(form.elements[i].value)){

												errorString= "Only Numeric Values allowed in " + form.elements[i].title;

												msg += counter + ". "+ errorString + "\r\n";

												if(counter==1){

													focusto = form.elements[i];

												}

												counter++;

											}

											break;

						case 'minLimit' :

										minLimit = rules[r+1];

										r++;

										if(parseInt(form.elements[i].value)<minLimit){

											errorString= "Value must be greater than or equal to " + minLimit + " for " + form.elements[i].title;

											msg += counter + ". "+ errorString + "\r\n";

											if(counter==1){

												focusto = form.elements[i];

											}

											counter++;

										}

										break;

						case 'maxLimit' :

										maxLimit = rules[r+1];

										r++;

										if(parseInt(form.elements[i].value)>maxLimit){

											errorString= "Value must be less than or equal to " + maxLimit + " for " + form.elements[i].title;

											msg += counter + ". "+ errorString + "\r\n";

											if(counter==1){

												focusto = form.elements[i];

											}

											counter++;

										}

										break;



						case 'checkEmail' :

										if(eCheck(form.elements[i].value)===false){

											errorString= " Invalid " + form.elements[i].title;

											msg += counter + ". "+ errorString + "\r\n";

											if(counter==1){

												focusto = form.elements[i];

											}

											counter++;

										}

										break;

						

						

						

						

										

						case 'minLength' :

										if(form.elements[i].value!=""){

										minlength = rules[r+1];

										r++;

										if(form.elements[i].value.length<minlength){

											errorString= "Value must be greater than or equal to " + minlength + " for " + form.elements[i].title;

											msg += counter + ". "+ errorString + "\r\n";

											if(counter==1){

												focusto = form.elements[i];

											}

											counter++;

										}

										}

										break;

										

						case 'checkboxValidation'  :

										if(!form.elements[i].checked){

										msg += counter +". Please Check  " +  form.elements[i].title + "\r\n";

										if(counter==1){	focusto = form.elements[i];	}

										counter++;

										}break;	



						case 'validateEmail' :

										if(form.elements[i].value!=""){

												if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.elements[i].value))){

												errorString= "Invalid Mail Format " + form.elements[i].title;

												msg += counter + ". "+ errorString + "\r\n";

												if(counter==1){

													focusto = form.elements[i];

													}

										counter++;

											}break;

										}



						case 'checkMail'  :

										if(form.elements[i].value !=""){

										if((form.elements[i].value)!=(form.email.value))

										{

											errorString= " Not Match with " + form.email.title;

											msg += counter + ". "+ errorString + "\r\n";

											if(counter==1){

												focusto = form.elements[i];

											}

											counter++;

											

										}break;	

										}

						

						

						case 'noNumber' : 

											if(form.elements[i].value!=""){

											if(isNaN(form.elements[i].value)){

											}

											else {

												errorString= "No Numeric Values allowed in " + form.elements[i].title;

												msg += counter + ". "+ errorString + "\r\n";

												if(counter==1){

													focusto = form.elements[i];

												}

												counter++;

											}}

											break;

						

						

								

				

				case 'checkPassword'  :

										if(form.elements[i].value!=""){

										if((form.elements[i].value)==(form.senderemail.value))

										{

											errorString= " Email Address Allready Exit<br><br><br>" + form.elements[i].title;

											msg += counter + ". "+ errorString + "\r\n";

											if(counter==1){

												focusto = form.elements[i];

											}

											counter++;

											

										}break;	

										}

										

										

										

										

						

						

					}// End switch

				}//End For Statement

			}

	}

	

	if(counter>1) {

		alert("-: Please Fill The Detail(s) occured :- \r\n" +msg);

		if(focusto){

			focusto.focus();

		}

		return false;

	}

	return true

}