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

    </script>
    
</html>