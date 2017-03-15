<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                font-color: Black;
                font-weight: 20;
                height: 100vh;
            }

            .picture {
            	background:url("/pictures/boracay.jpg") no-repeat center center fixed;
            	-webkit-background-size: cover;
            	-moz-background-size: cover;
            	-o-background-size: cover;
            	background-size: cover;
               width: 100%;
                height: 230px;
            }

            .box {
                width: 40%;
                height: 455px;
                background-color: Grey;
                margin: 50px auto;
            }

            .box img {
                border: White dotted;
                width: 500px;
                height: 400px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                font-family: 'Cooper Black';
                font-size: 20px;
            }

            .title {
                padding-top: 25px;
                font-size: 100px;
                font-family: 'Harrington';
                text-shadow: 4px 3px Grey;
            }

            .links > a {
                color: Black;
                padding: 0 50px;
                font-size: 25px;
                font-weight: 900;
                font-style: bold;
                font-family: 'Centaur';
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
        <div class="picture">
                <div class="title m-b-md">
                    Top 10 TOURIST SPOT
                </div>

                <div class="links">
                    <a href="/home">Home</a>
                    <a href="/news">News</a>
                    <a href="/about">About Us</a>
                </div>
            </div>

        <h1><center>Choose, Explore, Tour Us!</center></h1>
        <h1><center>Just click it!</center></h1>

              
    <div class="box"><br>
            <img src="/pictures/tagaytay.jpg" >
           <h2><a href="/tagaytay">#10. Tagaytay</a></h2><br>
    </div>

        
    <div class="box"><br>
            <img src="/pictures/la union.jpg"><br>
           <h2><a href="/launion">#9. La Union</a></h2><br>
    </div>

    <div class="box"><br>
            <img src="/pictures/PG2.jpg"><br>
           <h2><a href="/puertogalera">#8. Puerto Galera</a></h2><br>
    </div>

    <div class="box"><br>
            <img src="/pictures/corregidor.jpg">
             <h2><a href="corregidor">#7. Corregidor Island</a></h2><br>
    </div>

        
    <div class="box"><br>
            <img src="/pictures/baguio.jpg"></a>
            <h2><a href="baguio">#6. Baguio City</a></h2><br>
    </div>

        
    <div class="box"><br>
            <img src="/pictures/b1.jpg" ></a>
            <h2><a href="boracay">#5. Boracay</a></h2><br>
    </div>

        
    <div class="box"><br>
            <img src="/pictures/banaue.jpg">
            <h2><a href="banaue">#4. Banaue Rice Terraces</a></h2><br>
    </div>

        
    <div class="box"><br>
            <img src="/pictures/sagada.jpg">
            <h2><a href="sagada">#3. Sagada</a></h2><br>
    </div>

        
    <div class="box"><br>
            <img src="/pictures/pagudpud.jpg"></a>
            <h2><a href="pagudpud">#2. Pagudpud</a></h2><br>
    </div>

        
    <div class="box"><br>
            <img src="/pictures/palawan.jpg"></a>
            <h2><a href="palawan">#1. Palawan</a></<h2><br>
    </div>
    
    </body>
</html>