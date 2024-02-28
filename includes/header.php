<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h1><a href="/Team28/index.php" style="color: black;">Team28</a></h1>
            <div class="container">
                <div class="search-bar">
                    <form method="GET" action='/Team28/process2.php'>
                        <input id="query" type="search" name="query" placeholder="search">
                        <button type="submit">
                            <span id="SearchError" class="material-symbols-outlined">search</span>
                        </button>
                    </form>    
                </div>

                <div class="button">
                    <a href="/team28/forms/login.php">
                     <button class="btn1">Login</button>
                    </a>
                    <a href="/team28/forms/signup.php">
                     <button class="btn1">SignUp</button>
                    </a>
                </div>
            </div>    
        </nav>
    </header>



