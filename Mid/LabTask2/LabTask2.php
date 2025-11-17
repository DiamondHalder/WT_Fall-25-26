<!DOCTYPE html>
<html>
    <head>
        <title>
            Registrarion</title>
    </head>
     <body>
        <form id="one" onsubmit="return handlesubmit()">
        <h1 align="center">Participant Registration</h1>
        <div>
           Full Name: <br>
           <input type="text" id="name"> <br>
            Email: <br>
            <input type="text" id="email"><br>
            Phone Number: <br>
            <input type="number" id="number"><br>
            Password: <br>
            <input type="password" id="password"><br>
            Confirm Password: <br>
            <input type="password" id="cpassword"><br>
            <button type="submit">Register </button>

        </div>
        <div id="error"></div>
        <div id="output"></div>

        </form>
        <form id="two">
        <div id="activity">
            Activity Name: <br>
            <input type="text" id="activity"> <br>
            <button type="submit">Add Activity</button>

            <div id="activitylist"></div>
        </div>
        </form>


     </body>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            padding: 30px;
            background-color:aqua ;
        }
        #one {
            background-color:aliceblue;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            margin-bottom: 20px;
            box-shadow: inset;
        }
        #two {
            background-color:aliceblue;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            box-shadow: inset;
        }

    </style>
    <script>
    function handlesubmit()
    {
        let name=document.getElementById("name").value.trim();
        let email=document.getElementById("email").value.trim();
        let number=document.getElementById("number").value.trim();
        let pass=document.getElementById("password").value.trim();
        let cpass=document.getElementById("cpassword").value.trim();

        let errorDiv=document.getElementById("error");
        let outputDiv=document.getElementById("output");

        if(name===""|| email===""|| number===""|| pass===""|| cpass==="")
        {
            errorDiv.innerHTML="Please fill the form";
            return false;
        }
        if(!email.includes("@")){
            errorDiv.innerHTML="Invalid Email";
            return false;
        }
        if(pass !== cpass)
        {
             errorDiv.innerHTML="Incorrect Password";
            return false;
        }

        outputDiv.innerHTML=`
        <b>Registration Successful</b> <br>
        Name: ${name}<br>
        Email: ${email}<br>
        Phone: ${number}

        `; 
        return false;
    }
    </script>
    
</html>