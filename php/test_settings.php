<?php
$date = new DateTime();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Tuition Waiver Form</title>
    <link rel="stylesheet" href="css/main.css?ver=<?php echo $date->getTimestamp();?>">
    <link rel="stylesheet" href="css/component.css?ver=<?php echo $date->getTimestamp();?>">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js?ver=<?php echo $date->getTimestamp();?>"></script>
    <script src="../js/settings.js?ver=<?php echo $date->getTimestamp();?>"></script>
</head>


<body>
  <div class="container">
    <div class="header">
        <div>Human Resources</div>
    </div>
    <div class="title">Settings</div>
    <div class="form">
      <!-- optional and pending review -->
      <form  action="index.html" method="post" onSubmit="saveBtn()">
        <table class="form-table" width="50%">
          <tr>
            <td>
              <label for="eid">Employee ID</label>
            </td>
            <td>
              <input placeholder="Employee ID" type="text" id="eid" name="eid">
            </td>
          </tr>
          <tr>
            <td>
              <label for="due_date">Due date</label>
            </td>
            <td>
              <input placeholder="Due Date" type="date" id="due_date" name="due_date">
            </td>
          </tr>
          <tr>
            <td>
              <label for="sem_start_date">Semester Start Date</label>
            </td>
            <td>
              <input placeholder="Semester Start Date" type="date" id="sem_start_date" name="sem_start_date">
            </td>
          </tr>

          //Undergraduate Costs
          <tr>
            <td>
              <label for="under_grad_cost">Undergraduate Cost</label>
            </td>
            <td>
              <input placeholder="Undergraduate Cost" type="text" id="under_grad_cost" name="under_grad_cost">
            </td>
          </tr>
          <tr>
            <td>
              <label for="cs_under_grad_cost">CS Undergraduate Cost</label>
            </td>
            <td>
              <input placeholder="CS Undergraduate Cost" type="text" id="cs_under_grad_cost" name="cs_under_grad_cost">
            </td>
          </tr>

          //Graduate Costs
          <tr>
            <td>
              <label for="grad_cost">Graduate Cost</label>
            </td>
            <td>
              <input placeholder="Graduate Cost" type="text" id="grad_cost" name="grad_cost">
            </td>
          </tr>
          <tr>
            <td>
              <label for="cs_grad_cost">CS Graduate Cost</label>
            </td>
            <td>
              <input placeholder="CS Graduate Cost" type="text" id="cs_grad_cost" name="cs_grad_cost">
            </td>
          </tr>

          //Doctoral Costs
          <tr>
            <td>
              <label for="doc_cost">Doctoral Cost</label>
            </td>
            <td>
              <input placeholder="Doctoral Cost" type="text" id="doc_cost" name="doc_cost">
            </td>
          </tr>
          <tr>
            <td>
              <label for="cs_doc_cost">CS Doctoral Cost</label>
            </td>
            <td>
              <input placeholder="CS Doctoral Cost" type="text" id="cs_doc_cost" name="cs_doc_cost">
            </td>
          </tr>

        </table>

        <br><br>
        <input type="submit" class="button-large" name="submit" value="Submit">
      </form>

      <script>
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
      </script>

    </div>
  </div>
</body>
