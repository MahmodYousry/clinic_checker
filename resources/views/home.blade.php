<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: sans-serif;
            }
            /* Add a black background color to the top navigation */
            .topnav {
            background-color: #333;
            overflow: hidden;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }

            /* Change the color of links on hover */
            .topnav a:hover {
            background-color: #ddd;
            color: black;
            }

            /* Add a color to the active/current link */
            .topnav a.active {
            background-color: #04AA6D;
            color: white;
            }
        </style>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="{{ route('home') }}">Home</a>
            <a href="{{ route('admin_home') }}">Admin Dashboard</a>
            <a href="{{ route('patient.index') }}">Patient Dashboard</a>
            <a href="#about">About</a>
        </div>
    </body>
</html>
