<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Boite mail</title>
    <style>
        body {
            background: #fff;
            height: auto;
            width: auto;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid #b3d7ff;
            padding: 30px;

        }

        h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 28px;
            text-align: center;
        }

        li{
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: dimgrey;
            margin-top: 50px;
            line-height: 30px;
            margin-left: 50px;
            margin-right: 50px;
        }
        hr{
            border-top: lightslategray;
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
</head>
<body>
<div class="body-mail">
    <div class="body-card">
        <div class="card">
            <h2>Contactez-nous</h2>
            <hr>
            <ul>
            <li><strong>Fullname</strong> :  {{ $value['fullname'] }}</li>
            <li><strong>Phone number</strong> :  {{ $value['phonenumber'] }}</li>
            <li><strong>Email</strong> :   {{ $value['email'] }}</li>
            <li><strong>Message</strong> :   {{ $value['message'] }}</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
