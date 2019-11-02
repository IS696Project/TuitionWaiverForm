var classesList = [];
$(document).ready(function () {
    $("input, select").focus(function () {
        $(".validation-msg").fadeOut();
    });
    $('body').on('click', '.del-class', function () {
        var btn = $(this);
        var id = btn.attr("id");
        var index = Number(id.split("_")[1]);
        if(!isNaN(index) && index>=0 && index <classesList.length){
            classesList.splice(index,1);
            buildClasses();
        }
    });
   $("#addClass").on("click",function () {
       var className = $("#className").val();
       var nCredit = $("#nCredits").val();
       var gradLevel = $("#gradLevel").val();
       //validate the classes
       if(className == "" || nCredit == "" || gradLevel=="-1"){
            showValidationMessage("addClass", 0);
       }else{
           nCredit = Number(nCredit);
           if(isNaN(nCredit) || nCredit<1)
               showValidationMessage("addClass", 1);
           else{
               var levelText = $( "#gradLevel option:selected" ).text();
               var classObj = {className:className, nCredit:nCredit, gradLevel:levelText};
               classesList.push(classObj);
               buildClasses();
           }
       }

   });

});

function onFormSubmit() {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var eClass = $("#eclass").val();
    var eid = $("#eid").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var dateOfHire = $("#dateOfHire").val();
    var semester = $("#semester").val();
    if(fname == "" || lname == "" || eClass=="-1" ||
        eid == "" || email == "" || semester == -1 || classesList.length == 0)
        showValidationMessage("submitBtn", 0);
    return false;
}
