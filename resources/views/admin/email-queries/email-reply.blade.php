
<html>
<head>

</head>
<body>
<div class="container">
<div class="logo">
    <img src="{{ asset('front/assets/img/logo/white.png') }}">
</div>
<div class="card">
    <div class="card-header">
         Hello {{ $request->name }}!
    </div>
    <div class="card-body">
            <pre>
            {{ $request->message }}
            </pre>
    </div>
    <div class="card-footer">
        <div class="regards">Regards,<br/>sunztech</div>
        <div class="footer">
            © 2020 Sunztech. All rights reserved.
        </div>
    </div>
</div>
</div>
</body>
</html>
<style>
    body{
        background: #0000000d;
    }
    .container{
        max-width: 100%;
    }
    .logo{
        text-align: center;
        padding: 20px;
        background: #000000c4;
    }
    .card{
        font-family: sans-serif;
        background: white;
    }
    .card-header{
        padding: 16px ;
        font-size: 29px;
        font-weight: 800;
    }
    .card-body{
        padding: 20px 20px 0 20px;
        margin-left: 25px;
        margin-right: 25px;
        font-size: 19px;
    }
    .card-footer{
        font-size: 18px;
    }
    .footer{

        background: #000000c4;
        color: white;
        padding: 20px;
        text-align: center;
        font-size: 14px;
    }
    .regards{
        padding: 16px;
    }
    pre{
        word-break: break-all;
        word-wrap: break-word;
        white-space: normal;
    }
</style>
