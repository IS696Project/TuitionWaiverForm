function onFormSubmit() {
    var fname = $("#first_name").val();
    var lname = $("#last_name").val();
    var eClass = $("#e_class").val();
    var eid = $("#eid_number").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var dateOfHire = $("#hired_date").val();
    var semester = $("#semester").val();
    if(fname == "" || lname == "" || eClass=="-1" ||
        eid == "" || email == "" || semester == -1 || classesList.length == 0) {
        showValidationMessage("submitBtn", 0);
        return false;
    }
    $("#classes").val(JSON.stringify(classesList));
    return true;
}
