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
        
        body {
            background-color: #86007D;            
        }
        
        .container {            
            margin: auto;
            display: block;                          
        }

        .mail {
            display: block;                                  
            margin-right: 15%;                    
            margin-left: 15%;
            margin-top: 5%;
            border-radius: 10%;
        }

        .head-mail {
            text-align: left;
            color: #000000;
            height: 20%;
            background-color: #9E3397;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .body-mail {
            min-height: 400px;
            height: auto;
            background-color: #FFE6FD;
        }

        .footer-mail {
            text-align: left;
            min-height: 25%;
            height: 25%;
            background-color: #9E3397;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;                      
        }

        .logo {
            text-align: center;
            font-size: 40px;
            font-family: Arial, Helvetica, sans-serif;            
            /* margin: auto; */
            top: 30%;            
            position: relative;
        }

        .body-text {
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 1em;
            padding-bottom: 1em;
            margin: 0;
            text-align: justify;
            text-justify: inter-word;
        }

        hr.separator {            
            margin: 10% 10% auto;
            border: 0.5px dashed #9E3397;
        }

    </style>

</head>
<body> 
    <div class="container">
        <div class="mail">
            <!-- cabeçalho -->
            <div class="head-mail">
                <div class="logo">
                    <a href="">
                        LBGT<sup>+</sup> Rural
                    </a>                    
                </div>
            </div>

            <div class="body-mail">
                <p class="body-text">Olá, {{$name}}.</p>
                
                <p class="body-text">
                    {{$answer}}                    
                </p>

                <hr class="separator">
                
                <p class="body-text">
                    <em>{{$text}}</em>
                </p>

            </div>

            <div class="footer-mail">
                <p class="body-text">Best Regards</p>                                           
                
            </div>
            
        </div>
    </div>      
    
</body>
</html>