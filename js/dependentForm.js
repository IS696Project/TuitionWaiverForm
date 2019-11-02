

function onFormSubmit() {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var eClass = $("#eclass").val();
    var eid = $("#eid").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var dateOfHire = $("#dateOfHire").val();
    var semester = $("#semester").val();
    var sfname = $("#sfname").val();
    var slname = $("#slname").val();
    var seid = $("#seid").val();
    if(fname == "" || lname == "" || eClass=="-1" ||
        eid == "" || email == "" || semester == -1 ||
        sfname == "" || slname == "" || seid == "")
        showValidationMessage("submitBtn", 0);
    return false;
}
