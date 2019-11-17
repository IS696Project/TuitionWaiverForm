

function onFormSubmit() {
    var fname = $("#first_name").val();
    var lname = $("#last_name").val();
    var eClass = $("#e_class").val();
    var eid = $("#eid_number").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var dateOfHire = $("#hired_date").val();
    var semester = $("#semester").val();
    var sfname = $("#s_first_name").val();
    var slname = $("#s_last_name").val();
    var seid = $("#s_eid_number").val();
    if(fname == "" || lname == "" || eClass=="-1" ||
        eid == "" || email == "" || semester == -1 ||
        sfname == "" || slname == "" || seid == "") {
        showValidationMessage("submitBtn", 0);
        return false;
    }
    $("#classes").val(JSON.stringify(classesList));
    return true;
}
