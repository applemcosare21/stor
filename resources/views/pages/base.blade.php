<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wp7888159.jpg');
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
        }

        nav {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgb(0, 0, 0);
        }



        nav h1 {
            color: #fff;
            font-size: 8rem;
            margin-right: 20px;
        }

        .nav-list {
            margin-right: 10px;
            text-align: center;
        }

        .nav-link {
            color: #000000;
            transition: color 0.3s ease;
            font-size: 30px;
            background-color: #ffffff;
            border: 4px solid #000000;
            border-radius: 15px;
        }
        .nav-link:hover {
  color: #ff8c00; /* Change the color on hover to your desired color */
  background-color: #f7989849; /* Change the background color on hover to your desired color */
}

        .nav-link:hover,
        .nav-link.active {
            color: #0b0b0a;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            background-color: #28e48300;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .navbar {
            height: 100px;
            background-color: #007bff00;
        }

        .btn-primary {
    --bs-btn-color: #d5ff06;
    --bs-btn-bg: #749fed;
    --bs-btn-border-color: #000000;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #000000;
    --bs-btn-hover-border-color: #0e5bf6;
    --bs-btn-focus-shadow-rgb: 49,132,253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #000000;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0d6efd;
    --bs-btn-disabled-border-color: #0d6efd;
    background-color: #00000080;
    color: #f7f7f7;
    transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
}




        .success {
            background-color: #8595e7;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn-primary {
            transition: transform 0.2s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
        }
        h1{
            text-align: center;
            background-color: #00000041;
        }
        .row{
            justify-content: center;
            border: 1px solid black;
            border-radius: 10px;
            background-color: rgba(240, 221, 136, 0);
        }
        .table {
    --bs-table-color-type: initial;
    --bs-table-bg-type: initial;
    --bs-table-color-state: initial;
    --bs-table-bg-state: initial;
    --bs-table-color: #d5d5d5;
    --bs-table-bg: var(--bs-body-bg);
    --bs-table-border-color: var(--bs-border-color);
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: #fff;
    --bs-table-striped-bg: rgba(var(--bs-emphasis-color-rgb), 0.05);
    --bs-table-active-color: #fffbfb;
    --bs-table-active-bg: rgba(var(--bs-emphasis-color-rgb), 0.1);
    --bs-table-hover-color: var(--bs-emphasis-color);
    --bs-table-hover-bg: rgba(var(--bs-emphasis-color-rgb), 0.075);
    width: 100%;
    margin-bottom: 1rem;
    vertical-align: top;
    border-color: var(--bs-table-border-color);
}
.table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color)));
    background-color: #605656a8;
    border-bottom-width: var(--bs-border-width);
    box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg)));
}

    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: rgb(239, 155, 76, 0)">
        <div class="container d-flex justify-content-center"> <!-- Added d-flex and justify-content-center classes -->
            <ul class="nav">
                <li class="nav-list">
                    <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link {{Route::is('users') ? 'active' : ''}}" href="{{url('/users')}}">Customers</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link {{Route::is('orders') ? 'active' : ''}}" href="{{url('/orders')}}">Orders</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link {{Route::is('products') ? 'active' : ''}}" href="{{url('/products')}}">Products</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
