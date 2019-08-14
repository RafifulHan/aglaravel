<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: cursive;
            background: url(img/silver.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
        header{
            width: 100%;
            background-color: #17202A;
            box-shadow: 0 1px 2.5px #A6ACAF;
        }
        header nav{
            width: 95%;
            margin: auto;
        }
        header nav .title-bar{
            display: inline-block;
            color: #ECF0F1;
            padding: 18px 22px;
        }
        header nav ul{
            display: inline-block;
            float: right;
        }
        header nav ul a{
            text-decoration: none;  
            color: whitesmoke;
            font-size: 14pt;
            width: 120px;
            line-height: 70px;
            display: inline-block;
            text-align: center;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container main{
            width: 95%;
            padding: 35px;
            
        }
        .container main form #address{
            background-color: #17202A;
            color: whitesmoke;
            padding: 8px 10px;
            margin-left: 68px;
            border-radius: 10px;
        }
        .container main form #name,.container main form #age{
            display: block;
            width: 250px;
            border: none;
            border-bottom: 2px solid #17202A;
            padding: 12px 18px;
            outline: none;
            margin-left: 60px;
            margin-bottom: 60px;
            font-family: cursive;
        }
        .container main form .search{
            display: inline-block;
            width: 250px;
            border: none;
            border-bottom: 2px solid #17202A;
            padding: 12px 18px;
            outline: none;
            margin-left: 60px;
            margin-bottom: 60px;
            font-family: cursive;
        }
        .container main form textarea{
            display: block;
            width: 250px;
            border: none;
            border: 5px solid #17202A;
            padding: 12px 18px;
            outline: none;
            margin-left: 60px;
            margin-bottom: 60px;
            font-family: cursive;
            border-radius: 10px;
            background-color: #17202A;
            color: whitesmoke; 
        }
        /* font-size: 13pt;
            border-radius: 8px; 
            padding: 0 10px;   
            margin-left: 25px;
            color: #17202A;
            background: white;
            margin-top: -10px;
            position: absolute; */

        .container main form button{
            border: 0;
            font-family: cursive;
            font-size: 12pt;
            margin: 20px 10px;
            padding: 10px 12px;
            border-radius: 8px;
            background: #17202A;
            color: whitesmoke;
            display: inline-block;
        } 
        .container main table{
            margin: auto;
            border-spacing: 0;
            border: 2px solid #17202A;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .container main table a{
            text-decoration: none;
            background-color: #17202A;
            padding: 8px;
            color: whitesmoke;
            border-radius: 5px; 
        }
        .container th{
            background-color: #17202A;
            color: whitesmoke;
        }
        .container th,td{
            padding: 20px;
            border: 1.5px solid #17202A;
            border-spacing: 0;
        }
        .container main .paginate{
            display: block;
            text-align: center;
            margin-top: 35px;
        }
        .container main .paginate li{
            list-style: none;
            display: inline-block;
            padding: 5px 10px;
            color: whitesmoke;
            background-color: #17202A;
            border-radius: 8px;
        }
        .container main .paginate a{
            color: whitesmoke;
            text-decoration: none;
            line-height: 10px;
        }
        footer{
            width: 100%;
            background-color:  #17202A;
            padding: 25px 0;
        }
        footer p{
            margin: auto;
            width: 95%;
            color: whitesmoke;
            text-align: center;
        }
        footer p a{
            color: whitesmoke;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <div class="title-bar"><h2>AGLARAVEL</h2></div>
            <ul>
                <a href="home">Home</a>
                <a href="{{ route('register') }}">Register</a>
                <a href="{{ route('login') }}">Login</a>
            </ul>
        </nav>
    </header>

    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        <p>Copyright &copy; <?php echo date("Y"); ?><a href=""> aglaravel.com</a></p>
    </footer>
</body>
</html>