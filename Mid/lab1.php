<!DOCTYPE html>
<head>
    <title>Student Registration Form</title>
    <style>
        h1{
            color: red;
        }
        hr{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Student Registration Form</h1>
    <hr>
    <br>
    <b>First Name</b> <br>
    <input type="text"> <br> <br>
    <b>Last Name</b> <br>
    <input type="text"> <br> <br>
    <b>Student ID</b><br>
    <input type="number"> <br> <br>
    <b>Program/Major</b> <br>
    <input type="text" placeholder="BSc CSE"> <br> <br>
    <b>Department</b> <br>
    <select>
        <option>CSE</option>
        <option>BBA</option>
        <option>EEE</option>
        <option>IPE</option>
    </select> 
    <br> <br>
    <b>Phone</b> <br>
    <input type="number"> <br> <br>
    <b>University Email</b><br>
    <input type="text"> <br> <br>
    <b>Create Password</b> (min 8 characters) <br> 
    <input type="password"> <br> <br>
    <b>Confirm Password</b> <br>
    <input type="password"> <br> <br>
    <b>Semester Selection</b> <br>
    <input type="radio">Summer 2024
    <input type="radio">Fall 2024
    <input type="radio">Spring 2025
    <input type="radio">Other/Special Term
    <br> <br>
    <b>Requested Credit Load (Max 15)</b> <br>
    <input type="number" placeholder="e.g., 9 or 12"> <br> <br>
    <input type="checkbox"> I require academic advising before final registration. 
    <br> <br>
    <h1>Course Selection</h1>
    <hr/><br>
    <input type="checkbox"> MATH 1201 (Calculus II)
    <input type="checkbox"> CS 2105 (Data Structures)
    <input type="checkbox"> ECON 1001 (Microeconomics)
    <input type="checkbox"> PHY 1102 (Physics Lab)
    <br><br>
    Comments / Special Requests <br>
    <textarea rows="10" cols="160"></textarea>
    <br><br>
    <button> Submit </button>
</body>
</html>