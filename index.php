<?php
namespace Model;

require_once 'Model/User.php';
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* For IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .text-custom-pink {
            color: #ff00ff;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    include('navbar.php');
    ?>

    <!-- Scrollable list Vertical-->
    <!-- <nav class="flex flex-col overflow-auto hover:overflow-scroll scrollbar-hide space-x-4">
        <a href="/reports"
            class="font-bold px-3 py-2 text-custom-pink rounded-lg hover:bg-slate-100 hover:text-slate-900">Reports</a>
        <a href="/reports"
            class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Reports</a>
        <a href="/reports" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Reports</a>
    </nav> -->


    <?php
    include('jstest.php');
    ?>

    <div>
        <?php
        $user = new User(1, "Sushant", "kalanki", 9823579122);
        echo $user->name;
        ?>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="LogoDark.svg" class="card-img-top" alt="Logo Dark">
        <div class="card-body">
            <h5 class="card-title">$200/48</h5>
            <h5 class="card-title">Fine Wine</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <button type="button" class="btn btn-primary btn-large btn-block">Block level button</button>
        </div>
    </div>

    <form action="sendmail.php" method="POST">
        <button type="submit" name="btnSubmit">Submit [Don't Press]</button>
    </form>
    <form action="sendobject.php" method="POST">
        <button type="submit" name="sendObj">Send Object</button>
    </form>
</body>

</html>