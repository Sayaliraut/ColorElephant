function checkfname(){
	var x = document.getElementById("name");
	var y = x.value;
	var letter = /^[A-Za-z]+$/;
	if(!y) {
		var error = document.getElementById("demo");
		error.innerHTML = " Please Enter the First Name";
	}else if(!y.match(letter)){
		var error = document.getElementById("demo");
		error.innerHTML = " First name Must be Character only";
	} else {
		var error = document.getElementById("demo");
		error.innerHTML = " ";
	}
}
function checkmail(){
	var x = document.getElementById("mail");
	var y = x.value;
	var letter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!y) {
		var error = document.getElementById("mail-err");
		error.innerHTML = " Please Enter the Email";
	}else if(!y.match(letter)){
		var error = document.getElementById("mail-err");
		error.innerHTML = " Invalid Email Id";
	} else {
		var error = document.getElementById("mail-err");
		error.innerHTML = " ";
	}
}
function checkurl(){
	var x = document.getElementById("url");
	var y = x.value;
	var letter = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
	if(!y) {
		var error = document.getElementById("url-err");
		error.innerHTML = " Please Enter the URL";
	}else if(!y.match(letter)){
		var error = document.getElementById("url-err");
		error.innerHTML = " Invalid URL";
	} else {
		var error = document.getElementById("url-err");
		error.innerHTML = " ";
	}
}
function checkletter();{
	var x = document.getElementById("letter");
	var y = x.value;
	var letter = /^[A-Za-z]+$/;
	if(!y) {
		var error = document.getElementById("mail-err");
		error.innerHTML = " Please Type Cover Letter";
	}else if(!y.match(letter)){
		var error = document.getElementById("mail-err");
		error.innerHTML = " Must be character only";
	} else {
		var error = document.getElementById("mail-err");
		error.innerHTML = " ";
	}
}
$(function(){
    $('input[name="rad"]').click(function(){
        var $radio = $(this);
        
        // if this was previously checked
        if ($radio.data('waschecked') == true)
        {
            $radio.prop('checked', false);
            $radio.data('waschecked', false);
        }
        else
            $radio.data('waschecked', true);
        
        // remove was checked from other radios
        $radio.siblings('input[name="rad"]').data('waschecked', false);
    });
});
function validation(){
	//alert("hell0");
	var inp = document.getElementById('browse');
    if(inp.files.length == 0){
       	var error = document.getElementById("upload-err");
		error.innerHTML = " Please Choose a File";
   		inp.focus();
   		return false;
    }
}