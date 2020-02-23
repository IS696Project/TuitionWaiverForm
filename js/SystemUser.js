function onFormSubmit() {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $("#email").val();
    if(fname == "" || lname == "" ||email=="")
        showValidationMessage("CreateBtn", 0);
    return false;
}
