<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Tuition Waiver Form</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/component.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/settings.js"></script>
</head>


<body>
  <div class="container">
    <div class="header">
      <div>Settings</div>
    </div>
    <div class="title">Settings</div>
    <div class="form">
      <!-- optional and pending review -->
      <form class="settings" action="index.html" method="post">
        <table>
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
              <input placeholder="Semester Start Date" type="text" id="sem_start_date" name="sem_start_date">
            </td>
          </tr>
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
              <label for="under_grad_cost">Undergraduate Cost</label>
            </td>
            <td>
              <input placeholder="Undergraduate Cost" type="text" id="under_grad_cost" name="under_grad_cost">
            </td>
          </tr>
          <tr>
            <td>
              <label for="doc_cost">Doctoral Cost</label>
            </td>
            <td>
              <input placeholder="Doctoral Cost" type="text" id="doc_cost" name="doc_cost">
            </td>
          </tr>
        </table>

      </form>

    </div>

  </div>
</body>
