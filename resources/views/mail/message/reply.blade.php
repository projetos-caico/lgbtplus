<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
            height: 100%;
            
        }

        .container {            
            margin: auto;
            display: block;                          
        }

        .mail {
            display: block;                                  
            margin-right: auto;                    
            margin-left: auto;
            margin-top: 1%;
            max-width: 700px;            
        }

        .head-mail {
            text-align: left;            
            color: #000000;
            height: auto;
            min-height: 150px;
            background-color: #9E3397;           
        }

        .body-mail {
            min-height: 400px;
            height: auto;
            background-color: #FFE6FD;
        }

        .footer-mail {
            text-align: center;
            min-height:15%;
            height: 15%;
            background-color: #9E3397;    
            color: white;       
        }

        .logo {
            text-align: center;
            font-size: 40px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 1em;                                               
        }

        .body-text {
            padding-left: 10%;
            padding-right: 10%;           
            margin: 0;
            text-align: justify;
            text-justify: inter-word;
        }
       

        .separator {            
            padding-left: 10%;
            padding-right: 10%;
            margin: 0;
        }

        a {
            color: white;
        }

        a:link {
            text-decoration: none;            
        }

    </style>

</head>
<body> 
    <div class="container">
        <div class="mail">
            <!-- cabeçalho -->
            <div class="head-mail">
                <p class="logo">
                    <a href="">
                        LBGT<sup>+</sup> Rural
                    </a>                    
                </p>
            </div>

            <div class="body-mail">
                <p class="body-text" style="padding-top: 50px; padding-bottom: 60px">Olá, {{$name}}.</p>
                
                <p class="body-text" style="padding-bottom: 30px;">
                    {{$answer}}                    
                </p>

               <p class="separator" style="padding-bottom: 0px;">--------</p>
                
                <p class="body-text" style="padding-top: 3px; padding-bottom: 60px">
                    <em>{{$text}}</em>
                </p>

                <p class="body-text" style="padding-bottom: 50px;">
                    Atencionsamente, equipe Lgbt Rural.
                </p>

            </div>

            <div class="footer-mail">
                <p style="padding: 2em;">Copyright © LGBT+ {{now()->year}}</p>                
            </div>
            
        </div>
    </div>      
    
</body>
</html>