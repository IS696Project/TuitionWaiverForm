function onFormSubmit() {
  var due_date = $("#due_date").val();
  var sem_start_date = $("#sem_start_date").val();
  var under_grad_cost = $("#under_grad_cost").val();
  var cs_under_grad_cost = $("#cs_under_grad_cost").val();
  var grad_cost = $("#grad_cost").val();
  var cs_grad_cost = $("#cs_grad_cost").val();
  var doc_cost = $("#doc_cost").val();
  var cs_doc_cost = $("#cs_doc_cost").val();
    if(under_grad_cost == "" || cs_under_grad_cost == "" || grad_cost=="" ||
        cs_grad_cost == "" || doc_cost == "" || cs_doc_cost == "") {
        showValidationMessage("submitBtn", 0);
        return false;
    }
    return true;
}
