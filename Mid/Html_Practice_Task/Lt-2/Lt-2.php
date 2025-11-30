<!DOCTYPE html>
<html>
<head>
    <title>Admission Form</title>
</head>

<body>

    <h1>University Admission Form</h1>
    <form action="#" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Personal Information</legend>
         <input type="text" id="name" placeholder="Name:" required maxlength="50"><br>
         <input type="email" id="email" placeholder="Email:" required><br>
          Gender:
         <input type="radio" name="gender" value="Male" required >Male
         <input type="radio" name="gender" value="Female" required >Female<br>
         <label for="dob">Date of Birth:</label>
         <input type="date" id="dob" required>
    </fieldset>

    <fieldset>
        <legend>Academic Background</legend>
        <input type="text" id="highschool" placeholder="High School Name:" required><br>
        <input type="text" id="college" placeholder="College Name:" required><br>
        <input type="text" id="varsity" placeholder="University Name:" required><br>
        
    </fieldset>
    
    <fieldset>
        <legend>Upload Document</legend>
        <label for="resume">Resume:</label>
        <input type="file" id="resume" required><br>
        <label for="transcript">Transcript:</label>
        <input type="file" id="transcript" required><br>

    </fieldset>

    <button type="submit">Submit</button><br>
    <button type="reset">Clear</button><br>

    </form>

</body>
</html>