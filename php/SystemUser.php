<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>System User UI</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/component.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/SystemUser.js"></script>

</head>
<body>
    <div class="container">
        <div class="header">
            <div>Human Resources</div>
        </div>
        <div class="title">System User UI</div>
		<br>
        <div class="form">
           <form onsubmit="return onFormSubmit()">
               <table class="form-table" width="35%">
                   <tr>
                       <td>
                           <label for="first_name" class="required">Employee First Name</label>
                       </td>
                       <td>
                            <input type="text" id="first_name" name="first_name">
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <label for="last_name" class="required">Employee Last Name</label>
                       </td>
                       <td>
                           <input type="text" id="last_name" name="last_name">
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <label for="email" class="required">Email</label>
                       </td>
                       <td>
                           <input type="email" id="email" name="email">
                       </td>
                   </tr>
                 </tr>

                 <tr>
                     <td>
                         <label for="password" class="required">Password</label>
                     </td>
                     <td>
                         <input type="text" id="password" name="password">
                     </td>
                 </tr>
                   <tr>
                       <td>
                           <label for="admin">Admin</label>
                       </td>
                       <td>
                           <input type="checkbox" id="subscribeNews" name="admin" value="admin">
                       </td>
                     </tr>
<tr>

                       <td>
                           <label for="active">Active</label>
                       </td>
                       <td>
                           <input type="checkbox" id="subscribeNews" name="active" value="active">
                       </td>
                   </tr>

               </table>
			   <br><br>
               <button type="create" class="button-large" id="CreateBtn">Create</button>


		<button type="cancel" class="button-large" id="CancelBtn">Cancel</button>
			   <br><br>



    <div class="validation-msg">Please fill all required fields</div>
	</form>
</body>
</html>
