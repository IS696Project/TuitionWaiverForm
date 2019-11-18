function saveBtn() {
      $data = array(
        "cs_grad_cost" => "0"
        "under_grad_cost" => "0"
        "grad_cost" => "0"
        "cs_grad_cost" => "0"
        "doc_cost" => "0"
        "cs_doc_cost" => "0"
     );
      $db = new DB();
      echo $db->update("setting","",$data);
      alert("The data was submitted");
}
