<?php
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form action="sendmail.php" method="POST">
        <button type="submit" name="btnSubmit">Submit [Don't Press]</button>
    </form>
    <form action="sendobject.php" method="POST">
        <button type="submit" name="sendObj">Send Object</button>
    </form>
</body>

</html>