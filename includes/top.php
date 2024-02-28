<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }

        html {
            font-size: medium;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }

        header nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #f1e8dd;
            padding: 1rem 9%; 
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            box-shadow: 0 .5rem 1rem rgb(0,0,0,.1);
        }

        form {
            background-color: hsl(252, 30%, 95%);
            border-radius: 2rem;
            padding: 0.3rem 0.5rem; 
            display: flex;
            align-items: center;
        }

        form input[type="search"] {
            background: transparent;
            width: 15vw; 
            font-size: 0.8rem; 
            color: hsl(252, 30%, 17%);
            border: none;
            padding: 0.2rem; 
            margin-right: 0.5rem; 
        }

        form button[type="submit"] {
            background: transparent;
            border: none;
            cursor: pointer;
            color: hsl(252, 30%, 17%);
            font-size: 1.2rem;
        }

        .material-symbols-outlined {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1><a href="/Team28/index.php" style="color: black;">Team28</a></h1>
            <form method="GET" action='/Team28/process2.php'>
                <input id="query" type="search" name="query" placeholder="Search">
                <button type="submit">
                    <span id="SearchError" class="material-symbols-outlined">search</span>
                </button>
            </form>
        </nav>
    </header>
</body>
</html>