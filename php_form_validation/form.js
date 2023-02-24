var submitallow = false;
$(document).ready(function(){
    $('#submitbutton').on('click',function(event){
          event.preventDefault();

          validationForm();
          
          // Continue the form submit
          if(submitallow == true){
            $('#form').submit();
          }
    });
});

function validationForm(){
    var name = document.forms["employeeForm"]["name"].value;
    var email = document.forms["employeeForm"]["email"].value;
    var age = document.forms["employeeForm"]["age"].value;
    var gender = document.forms["employeeForm"]["gender"].value;
    var role = document.forms["employeeForm"]["role"].value;
    var technology = document.forms["employeeForm"]["technology"].value;


    // name validation
    var namereg = /^[a-zA-Z ]+$/;
    if(name == null || name == ""){
        alert("Name is Must!!!");
        document.forms["employeeForm"]["name"].focus();
        return false;
    }
    if(name.length < 3 || name.length > 16){
        alert("To less/much character in name!!!");
        document.forms["employeeForm"]["name"].focus()
        return false;
    }
    if(!namereg.test(name)){
        alert("Invalid Name given!!!")
        document.forms["employeeForm"]["name"].focus();
        return false;
    }

    // email validation
    var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email.match(emailFormat)) {
        document.forms["employeeForm"]["email"].focus();
        alert("Invalid Email given!!!");
        return false;
    }

    // age validation
    var ageReg = /^[0-9]+$/;
    if(age == "null" || age == ""){
        alert("Age is must!!!");
        document.forms["employeeForm"]["age"].focus();
        return false;
    }
    if(!ageReg.test(age)){
        alert("Please Provide Valid Age!!!");
        document.forms["employeeForm"]["age"].focus();
        return false;
    }

    // gender validation
    if (gender == null || gender == ""){
        alert("Please provide gender!!!");
        var gender = document.forms["employeeForm"]["gender"].focus();
        return false;
    }

    // role validation
    if(role == null || role == ""){
        alert("Please select your role in this orgination!!!");
        document.forms["employeeForm"]["role"].focus();
        return false;
    }

    // technology Validation
    if(technology == null || technology == ""){
        alert("Please provide your technology!!!");
        document.forms["employeeForm"]["technology"].focus();
        return false;
    }

    submitallow  = true;
}