<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TUTION WAIVER BACKEND LOGIN</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/component.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/employeeForm.js"></script>

</head>
<body>
    <div class="container">
        <div class="header">
            <div>Human Resources</div>
        </div>
        <div class="title">TUITION WAIVER BACKEND LOGIN</div>
		<br>
        <div class="form">
           <form onsubmit="return onFormSubmit()">
               <table class="form-table" width="35%">
                   
                   <tr>
                       <td>
                           <label for="email" class="required">Email</label>
                       </td>
                       <td>
                           <input type="email" id="email" name="email">
                       </td>
                   </tr>
				   
				   <tr>
                       <td>
                           <label for="password" class="required">Password</label>
                       </td>
                       <td>
                           <input type="text" id="password" name="password">
                       </td>
                   </tr>
                   
               </table>
			   <br><br>
               <button type="submit" class="button-large" id="submitBtn" >Submit</button>
			   <br><br>
			   <a href="url">Forgot your password</a>
			   
               

       
    <div class="validation-msg">Please fill all required fields</div>
	</form>
</body>
</html>