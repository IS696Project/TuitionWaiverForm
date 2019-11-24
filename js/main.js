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
        if(className == "" || nCredit == "" || (gradLevel != null && gradLevel=="-1")){
            showValidationMessage("addClass", 0);
        }else{
            nCredit = Number(nCredit);
            if(isNaN(nCredit) || nCredit<1)
                showValidationMessage("addClass", 1);
            else{
                var classObj = {className:className, nCredit:nCredit};
                if(gradLevel!=null){
                    var levelText = $( "#gradLevel option:selected" ).text();
                    classObj.gradLevel = levelText;
                }

                classesList.push(classObj);
                buildClasses();
            }
        }

    });

});
function buildClasses() {
    $("#classesBody").html("");
    var html = '<tr ';
    var totalCredit = 0;
    for(var i=0;i<classesList.length;i++){
        html += 'id="class_'+i+'">';
        html += '<td>'+classesList[i].className+'</td>';
        html += '<td>'+classesList[i].nCredit+'</td>';
        if(classesList[i].gradLevel!=null)
            html += '<td>'+classesList[i].gradLevel+'</td>';
        html += '<td><button type="button" class="button-small del-class" id="delClass_'+i+'">Delete</button></td>';
        html+='</tr>';
        totalCredit+=Number(classesList[i].nCredit);
    }
    $("#classesBody").html(html);
    $("#totalCredit").text(totalCredit);

}
//show the validation message above the given element
//msgType: 0 "Please fill all required fields"
//         1 "Please enter a valid number of credit"
function showValidationMessage(elementID, msgType) {
    var elem = $("#"+elementID);
    var offset = elem.offset();
    //var height = elem.height();
    var vm = $(".validation-msg");
    switch (msgType) {
        case 0:
            vm.text("Please fill all required fields");
            break;
        case 1:
            vm.text("Please enter a valid number of credit");
            break;
    }
    vm.css({
               left:offset.left,
               top:offset.top-vm.outerHeight()-10
           });
    vm.fadeIn();
    setTimeout(function () {
        $(".validation-msg").fadeOut();
    },5000);
}
