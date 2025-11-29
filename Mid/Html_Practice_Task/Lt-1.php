<!DOCTYPE html>
<head>
    <title>Portfolio</title>
</head>

<body>
    <header>
        <h1>Diamond Halder</h1>
        <nav>
            <ul>
                <li><a href="#bio" id="biography">Biography</a></li>
                <li><a href="#" id="educationb">Education</a></li>
                <li><a href="#" id="contactbtn">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="bio">
            <h2>About Me</h2>
            <img src="your-photo.jpg" alt="Diamond Halder">
            <p>I am Diamond Halder currently studing at AIUB</p>
            
        </section>

    </main>    

        <section id="education">
            <h2 align='center'>Education</h2>
            <table align='center'>
                <tr>
                    <th>Degree</th>
                    <th>Institution</th>
                    <th>Year</th>
                    <th>Result</th>
                </tr>

                <tr>
                    <td>Bachelor of Computer Science</td>
                    <td>American International University Bangladesh</td>
                    <td>2026</td>
                </tr>

                <tr>
                    <td>HSC</td>
                    <td>BM College</td>
                    <td>2022</td>
                </tr>

                <tr>
                    <td>SSC</td>
                    <td>K. M. Latif Institution </td>
                    <td>2019</td>
                </tr>


            </table>

        </section>

        
        <div id="overlay"></div>
        <div id="contactpopup">
            <h3>Contact Me</h2>
            <form action="#" method="post">
                <label for="email">Email:</label> 
                <input type="email" id="email" name="email"><br><br>
                <label for="message">Message:</label> <br>
                <textarea name="message" id="message"></textarea><br><br>
                <button type="submit">Send</button>
            </form>
            <button class="close">Close</button>
        </div>
        <footer >
            <P>&copy; 2025 Diamond Halder. All Rights Reserved</P>
        </footer>
   

    <style>

        html, body{
            height:100% ;
            margin: 0;
            padding: 0;
        }
        body{
            display: flex;
            flex-direction: column;

        }
        header{
            position: fixed;
            top: 0;
            left:0 ;
            width: 100%;
            height: auto;
            background-color:aliceblue;
            color:black;
            padding: 10px;
            text-align: center;
            z-index: 1000;
        }

        header nav ul {
            list-style: none;
            color:black;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        header nav ul li a {
            color:black;
            font-width:bold;
        }

        main{
            margin-top: 120px;
            text-align: center;
            flex:1;
        }
        
        
        
        #bio img {
            max-width: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        #contactpopup{
            display: none;
            position: fixed;
            top: 100px;
            left: 100px;
            background-color:aqua;
            border: 2 px solid blue;
            padding: 20px;
            z-index: 1001;
        }
        #contactpopup button.close{
            margin-top: 10px;
        }

        overlay{
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: auto;
            height: auto;
            background:aliceblue;
            z-index: 1000;
        }
        #education{
            display: none;
            position: absolute; 
            top:150px;  
            left:25%;
            margin: 0 auto;
    
            background-color: white;
            padding: 20px;
            
            z-index: 1000;
            text-align: center; 
        }
        #education table {
            
            border-collapse: collapse;
        }

        #education th, #education td {
             border: 1px solid black;
             padding: 10px;
             
        }

        footer{
            text-align: center;
        }

        
    </style>

    <script>
       
       let educationb = document.getElementById('educationb');
       let educationSection= document.getElementById('education');
       let bioSection= document.getElementById('bio');

       educationb.addEventListener('click', function(e){
                e.preventDefault();

                bioSection.style.display="none";

                educationSection.style.display="block";
                educationSection.scrollIntoView({ behavior:"smooth"});
       });

       biography.addEventListener('click',function(e){
                e.preventDefault();
                educationSection.style.display="none";
                bioSection.style.display="block";
       });



        let contactbtn = document.getElementById('contactbtn');
        let contactpopup = document.getElementById('contactpopup');
        let overlay = document.getElementById('overlay');
        let closebtn = document.querySelector('#contactpopup .close');


        contactbtn.addEventListener('click', function(e)
        {
            e.preventDefault();
            contactpopup.style.display = 'block';
            overlay.style.display = 'block';
        });

        closebtn.addEventListener('click', function()
        {
            contactpopup.style.display = 'none';
            overlay.style.display = 'none';
        });

        overlay.addEventListener('click', function()
        {
            contactpopup.style.display = 'none';
            overlay.style.display = 'none';
        });
    </script>

</body>