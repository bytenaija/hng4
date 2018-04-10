<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>HNG Internship 4</title>

    <script>
        function updateClock(){
            console.log("called ")
            let d = new Date().toUTCString();
            d = d.substr(0, d.indexOf("GMT")-9)
             d += " - " + new Date().toLocaleTimeString();
            document.getElementById('time').innerText = d;
            
            return 0;

               
        }

         window.onload = function(){
            updateClock();
          var j=  setInterval(updateClock, 1000);
         }
    </script>
</head>
<body>
    <header>
        <h1>Welcome to HNG  <br />Internship 4</h1>
    </header>

    <section class="content">
        <div class="left">
        <h2>My name is Everistus.</h2>
        <h3>It is great to be part of <br />HNG Internship 4</h3>
        </div>

        <aside>
            <img src="public/img/me.jpg" alt="Me" />


            <h4 id="time"> 
               
        
        
    </h4>
        </aside>

        
    <div class="clear">&nbsp;</div>
    </section>


</body>
</html>