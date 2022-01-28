<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
        }
        body {
            background-color: antiquewhite;
        }

        html, body, div, .fh {
            height: 100%;
        }

        .container {            
            margin: 0 auto;
            background-color: ;           
        }

        div {
            display: block;             
        }

        .mail {
            display: block;
            height: 100%;            
            margin-top: 4%;
            border-radius: 10%;
        }

        .head-mail {
            text-align: left;
            color: #000000;
            height: 20%;
            background-color: #d64dcfc0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            
        }

        .body-mail {
            min-height: 55%;
            height: auto;
            background-color: peru;
            
        }

        .footer-mail {
            height: 20%;
            background-color: royalblue;
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
            padding-top: 5%;
            padding-bottom: 5%;
            margin: 0;
            text-align: justify;
            text-justify: inter-word;
        }

    </style>

</head>
<body> 
    <div class="container">
        <div class="mail">
            <!-- cabeçalho -->
            <div class="head-mail">
                <div class="logo">
                    LBGT<sup>+</sup> Rural
                </div>
            </div>

            <div class="body-mail">
                <p class="body-text">Olá, {{$name}}.</p>

                <p class="body-text">{{$message}}</p>
            </div>

            <div class="footer-mail">
                <p>text</p>
            </div>
            
        </div>    
    </div>  
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>