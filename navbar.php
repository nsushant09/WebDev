<!DOCTYPE html>
<html lang="en">

<!-- Light color : 
#182828 -->
<!-- Dark color :  
#f9f4f0-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .background-red {
            background-color: red;
        }

        .background-green {
            background-color: green;
        }

        .background-blue {
            background-color: blue;
        }

        .min-height-50 {
            min-height: 10px;
        }

        .min-height-800 {
            min-height: 80px;
        }

        .max-height-80 {
            max-height: 80px;
        }

        .margin-horizontal-8 {
            margin-left: 8px;
            margin-right: 8px;
        }

        .dropdown-content,
        .dropdown-content-categories {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-decoration: none;
        }

        .dropdown-content-categories a {
            color: black;
            text-decoration: none;
            display: block;
            padding: 4px 8px 4px 8px;
            border-radius: 16px;
        }

        .dropdown-content-categories a:hover {
            background-color: #cfcfcf;
        }

        .dropdownCategories:hover .dropdown-content-categories {
            display: block;
        }

        .pointer {
            cursor: pointer;
        }

        #navbarItems div {
            cursor: pointer;
        }
    </style>
    <title>Navigation Bar</title>
</head>

<body>

    <div class="container mx-auto flex flex-row align-middle items-center text-lg md:flex-col ">

        <img class="object-contain basis-[5%] " src="./LogoDark.svg" alt="Freeman Urban Store">

        <div class="basis-[45%] margin-horizontal-8 align-middle items-center">
            <ul class="flex flex-row md:flex-col md:space-x-8 mt-4 md:mt-0 md:text-lg md:font-medium" id="navbarItems">
                <div>Traders</div>
                <div class="dropdownCategories">Categories<div
                        class="dropdown-content-categories flex flex-col rounded-lg px-4 py-2">
                        <a href="#">Butcher</a>
                        <a href="#">Shoes</a>
                        <a href="#">Electronics</a>
                    </div>
                </div>
                <div>About Us</div>
                <div>Contact Us</div>
            </ul>
        </div>

        <div class="basis-[45%] margin-horizontal-8">
        </div>
    </div>

</body>

</html>