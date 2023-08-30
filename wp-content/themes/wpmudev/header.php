<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>wpmudev</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php wp_head(); ?>
</head>

<!-- sample of navbar code with WordPress logo and pages -->

<header>
    <nav>
        <div class="wp">
            <ion-icon name="logo-wordpress"></ion-icon>
        </div>
    </nav>

    <nav>
        <div class="menucover">
            <div class="pages">
                <ul><a href="http://localhost/wpmudev/">Homepage</a></ul>
                <ul><a href="http://localhost/wpmudev/blog-2/">Blog</a></ul>
                <ul><a href="http://localhost/wpmudev/sample-page/">Sample page</a></ul>
            </div>
        </div>
    </nav>

    <div class="search">
        <div class="input">
            <label for="search"></label>
            <input type="text" placeholder="">
        </div>
        <div>
            <button
                style="color: #000; background-color: #c95200;border: none;padding:2px;margin-top:24px;">Search</button>
        </div>
    </div>
</header>

<body>

    <style>
        header {
            background-color: #6FABAC;
            margin-bottom: 360px;
            height: 220px;
            text-decoration: none;
        }

        nav {
            height: 75px;
            padding: 5px;
        }

        .wp {
            font-size: 50px;
            text-align: center;
        }

        .menucover {
            display: flex;
            justify-content: center;
        }

        ol,
        ul {
            padding-left: 20px !important;
        }

        .pages {
            display: flex;
            flex-direction: row;
            width: 450px;
            height: 30px;
            background-color: #fff;
            gap: 0px !important;
            padding-left: 175px;

        }

        .search {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        input {
            display: flex;
            width: 400px;
        }

        a {
            text-decoration: none;
        }
    </style>