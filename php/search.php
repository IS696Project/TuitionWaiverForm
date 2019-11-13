<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Tuition Waiver Form</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/component.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>

</head>
<body>
    <div class="container">
        <div class="header">
            <div>Human Resources</div>
        </div>
        <div class="title">Search Tuition Waiver Form</div>
        <div class="form">
           <form onsubmit="return onFormSubmit()">
               <table class="form-table" width="75%">
                   <tr>
                       <td>
                           <input placeholder="Employee ID" type="text" id="eid" name="eid">
                       </td>
                       <td>
                           <input placeholder="Employee First Name" type="text" id="fname" name="fname">
                       </td>
                       <td>
                           <input placeholder="Employee Last Name" type="text" id="lname" name="lname">
                       </td>
                       <td>
                           <select id="eclass" name="eclass" class="fit">
                               <option value="-1" selected>eClass</option>
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
                           <input placeholder="Student ID" type="text" id="seid" name="seid">
                       </td>
                       <td>
                           <input placeholder="Student First Name" type="text" id="sfname" name="sfname">
                       </td>
                       <td>
                           <input placeholder="Student Last Name" type="text" id="slname" name="slname">
                       </td>
                       <td>
                           <select id="gradLevel" name="gradLevel" class="fit">
                               <option value="-1" selected>Grad. Level</option>
                               <option value="undergrad">Undergraduate</option>
                               <option value="grad">Graduate</option>
                               <option value="doc">Doctoral</option>
                           </select>
                       </td>
                   </tr>
                   <tr>
                       <td colspan="4">
                           <table width="100%">
                               <tr>
                                   <td>
                                       <select id="semester" name="semester">
                                           <option value="-1" selected>Semester</option>
                                           <option value="fall">Fall</option>
                                           <option value="winter">Winter</option>
                                           <option value="summer">Summer</option>
                                       </select>
                                   </td>
                                   <td>
                                       <select id="status" name="status">
                                           <option value="-1" selected>Status</option>
                                           <option value="new">New</option>
                                           <option value="valid">Valid</option>
                                           <option value="Invalid">Invalid</option>
                                       </select>
                                   </td>
                                   <td>
                                       <select id="formType" name="formType" style="width: 120px;">
                                           <option value="-1" selected>Form Type</option>
                                           <option value="employee">Employee</option>
                                           <option value="sd">Spouse/Dependent</option>
                                       </select>
                                   </td>
                                   <td>
                                       <input placeholder="From" type="date" id="fromDate" name="fromDate" >
                                   </td>
                                   <td>
                                       <input placeholder="To"  type="date" id="toDate" name="toDate" >
                                   </td>
                                   <td>
                                       <button type="button" class="button-small" id="search">Search</button>

                                   </td>
                               </tr>
                           </table>
                       </td>
                   </tr>
               </table>
           </form>
            <table class="form-table" width="75%">
                <tr>
                    <td align="left">
                        <button type="button" class="button-medium" id="view">View Selected</button>
                        <button type="button" class="button-medium" id="export">Export Selected</button>
                    </td>
                </tr>
            </table>
            <div class="horz-scroll-div">
                <table class="list-table search-result-table" width="100%">
                    <thead>
                    <tr>
                        <th width="3%"><input type="checkbox" id="selectAll"> </th>
                        <th width="12%">Emp. Name</th>
                        <th width="10%">Emp. ID</th>
                        <th width="12%">Std. Name</th>
                        <th width="10%">Std. ID</th>
                        <th width="10%">Grad. Level</th>
                        <th width="8%">Status</th>
                        <th width="8%">Value</th>
                        <th width="10%">Class</th>
                        <th width="10%">Semester</th>
                        <th width="8%">Date</th>
                    </tr>
                    </thead>
                    <tbody id="classesBody">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="validation-msg">Please fill all required fields</div>
</body>
</html>