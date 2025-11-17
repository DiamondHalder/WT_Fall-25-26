<!DOCTYPE html>
<head>
 <title>Student Registration</title>
</head>
<body>
    <center><h1>Student Registration</h1></center>
    <br>
    <form onsubmit="return validateForm()">
        Full Name: <br>
        <input type="text" id="fullName" required> <br> <br>
        Email: <br>
        <input type="text" id="email" required> <br> <br>
        Password: <br>
        <input type="password" id="password" required> <br> <br>
        Confirm Password: <br> 
        <input type="password" id="confirmPassword" required> <br> <br>
        <button type="submit">Register </button>
    </form>
    
    <div id="successMsg" style="display:none;">
        <br><br>
        Registration Successful!<br>
        Name: <span id="displayName"></span><br>
        Email: <span id="displayEmail"></span>
    </div>
    <center><h1>Course Registration</h1></center>
    <button>Add Course</button>
    
</body>
</html>