<?php
$date = new DateTime();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPOUSE / DEPENDENT APPLICATION FOR TUITION WAIVER</title>
    <link rel="stylesheet" href="../css/main.css?ver=<?php echo $date->getTimestamp();?>">
    <link rel="stylesheet" href="../css/component.css?ver=<?php echo $date->getTimestamp();?>">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js?ver=<?php echo $date->getTimestamp();?>"></script>
    <script src="../js/dependentForm.js?ver=<?php echo $date->getTimestamp();?>"></script>

</head>
<body>
    <div class="container">
        <div class="header">
            <div>Human Resources</div>
        </div>
        <div class="title">SPOUSE / DEPENDENT APPLICATION FOR TUITION WAIVER</div>
        <div class="sub-title">Employee Information</div>
        <div class="form">
           <form onsubmit="return onFormSubmit()" method="post" action="formsubmit.php">
               <table class="form-table" width="50%">
                   <tr>
                       <td>
                           <label for="e_class" class="required">Employee Class</label>
                       </td>
                       <td>
                           <select id="e_class" name="e_class">
                               <option value="-1" selected>Please Select</option>
                               <option value="AC">AC</option>
                               <option value="AH">AH</option>
                               <option value="AP">AP</option>
                               <option value="CA">CA</option>
                               <option value="CP">CP</option>
                               <option value="CS">CS</option>
                               <option value="FA">FA</option>
                               <option value="FM">FM</option>
                               <option value="LE">LE</option>
                               <option value="LL">LL</option>
                               <option value="PE/PT">PE/PT</option>
                               <option value="PS">PS</option>
                           </select>
                       </td>
                   </tr>
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
                           <label for="eid_number" class="required">EID Number</label>
                       </td>
                       <td>
                           <input type="text" id="eid_number" name="eid_number">
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
                   <tr>
                       <td>
                           <label for="phone">Phone Number</label>
                       </td>
                       <td>
                           <input type="tel" id="phone" name="phone">
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <label for="hired_date">Date of Hire</label>
                       </td>
                       <td>
                           <input type="date" id="hired_date" name="hired_date">
                       </td>
                   </tr>
                   <tr>
                       <td colspan="2" class="top-border"></td>
                   </tr>
                   <tr>
                       <td colspan="2">
                        <div class="sub-title">Spouse / Dependent Information</div>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <label for="s_first_name" class="required">Spouse/Dependent First Name</label>
                       </td>
                       <td>
                           <input type="text" id="s_first_name" name="s_first_name">
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <label for="s_last_name" class="required">Spouse/Dependent Last Name</label>
                       </td>
                       <td>
                           <input type="text" id="s_last_name" name="s_last_name">
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <label for="s_eid_number" class="required">Spouse/Dependent EID Number</label>
                       </td>
                       <td>
                           <input type="text" id="s_eid_number" name="s_eid_number">
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <label for="semester" class="required">Semester for Tuition Waiver</label>
                       </td>
                       <td>
                           <select id="semester" name="semester">
                               <option value="-1" selected>Please Select</option>
                               <option value="Fall">Fall</option>
                               <option value="Winter">Winter</option>
                               <option value="Summer">Summer</option>
                           </select>
                       </td>
                   </tr>
               </table>
               <table class="list-table classes-table" width="75%">
                   <thead>
                   <tr>
                        <th width="45%">Name of Class (6 or up to 12<br>credits allowed only)</th>
                        <th width="45%">Number of Credit Hours</th>
                       <th width="10%"></th>
                   </tr>
                   </thead>
                   <tbody id="classesBody">

                   </tbody>
                   <tfoot>
                       <tr>
                           <td align="right"><b>Total Number of Credit Hours:</b></td>
                           <td><span id="totalCredit" class="bold">0</span></td>
                           <td></td>
                       </tr>
                   </tfoot>
               </table>

               <table class="list-table classes-table no-border" width="75%" border="0">
                   <tbody>
                   <tr>
                       <td width="45%">
                           <input type="text" id="className" name="className" placeholder="Class Name"><label
                               class="required"></label>
                       </td>
                       <td width="45%">
                           <input type="number" min="1" max="4" id="nCredits" name="nCredits"
                                  placeholder="Number of Credit"><label
                               class="required"></label>
                       </td>
                       <td width="10%">
                           <button type="button" class="button-small" id="addClass">Add</button>
                       </td>
                   </tr>
                   </tbody>
               </table>
               <div class="guidelines">
                   <ul>
                       <li><b>Changes in credit hours requested must be made in writing to the Benefits Office as soon as the change is made</b>.</li>
                       <li>Failure to submit an application for approval before the 100% Drop Deadline will forfeit eligibility for that term.</li>
                       <li>It is employee and spouse/dependent’s responsibility to review the guidelines prior to submitting an application for tuition waiver.</li>
                   </ul>
                   <h2>IMPORTANT, READ BEFORE SIGNING:</h2>
                   <p>
                       I hereby agree that tuition waiver benefits are contingent upon my acceptance of the terms and limitations listed herein and on the Tuition Waiver Guidelines, and completion of all courses for which I register. Tuition waiver benefits will be forfeited and the employee and the student will be responsible to pay back the full cost to the university for any course for which waiver is granted if:
                   </p>
                   <ol>
                       <li>I fail to achieve a grade of "C" or above for courses, or "Pass" for courses utilizing the "Pass/Fail" option. (Grade of "C-" is unacceptable.)</li>
                       <br>
                       <li>I receive a mark of "Incomplete" ("I") and I do not convert this mark to a passing grade within one calendar year following termination of the semester in which the course was taken.</li>
                       <br>
                       <li>I receive a mark of "In Progress" ("IP") and/or “No Grade” (“N”) and I do not convert this mark to a passing grade or an “Incomplete” within one semester following termination of the semester in which the course was taken.</li>
                       <br>
                       <li>I withdraw from my course(s) after the date specified in the Class Schedule Book for a 100% tuition refund.</li>
                   </ol>
                   <h2>FOR EMPLOYEE:</h2>
                   <p>I verify that my spouse/dependents are currently covered as dependent(s) under my health or dental plan with the university; if not, I understand I must provide proof of marriage or IRS dependency to the Benefits (copy of tax form, birth/adoption certificate) in advance.</p>
               </div>
               <br><br>
               <input type="submit" class="button-large" id="submitBtn" name="submit">
               <input type="hidden" id="classes" name="classes">
           </form>
        </div>
<!--        <button class="button-large" style="float: left">Continue as Employee</button>
        <button class="button-large" style="float: right">Continue as Spouse/Dependent</button>-->
    </div>
    <div class="validation-msg">Please fill all required fields</div>
</body>
</html>