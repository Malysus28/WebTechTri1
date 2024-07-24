function validateForm(event) {
    
    event.preventDefault();

    let form = document.forms['contactusform'];

    let fname = document.getElementById('fname').value;

    let lastname = document.getElementById('lastname').value;

    let ad = document.getElementById('ad').value;

    let emailad = document.getElementById('emailad').value;

    let msg = document.getElementById('msg').value;

let errormsg='';

if (fname == "") { 
    errormsg = errormsg + 'Please enter your first name \n';
}

if (lastname == "") { 
    errormsg = errormsg + 'Please enter your last name \n';
}

if (ad == "") { 
    errormsg = errormsg + 'Please enter your address \n';
}

if (emailad == "") { 
    errormsg = errormsg + 'Please enter your email address \n';
}

if (msg == "") { 
    errormsg = errormsg + 'Please enter your message for us \n';
}

// if then error message 
if (errormsg==""){

    form.submit ();

}else {
    alert (errormsg);
    
}

console.log (fname, lastname, ad, emailad, msg );
}

