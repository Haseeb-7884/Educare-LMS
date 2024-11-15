<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .category_main_section {
            position: relative;
            padding-top: 5px;
        }

        .category_main_one {
            height: 6vh;
            width: 100%;
            z-index: 0;
        }

        .category_main_one>ul {
            height: 100%;
            padding: 5px 0px 9px 0px;
            background-color: white;
            color: black;
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 100px;
            width: 96%;
            margin: 0 auto;
            border-top:1px solid grey;
            border-bottom:1px solid grey;
            list-style: none;
            /* background-color: orange; */
        }

        .category_main_one>ul>li>a {
            text-decoration: none;
            color: black;
        }

        .category_main_one>ul>li>a:hover {
            text-decoration: none;
            color: purple;
            font-weight: 700;
        }

        .category_main_two {
            height: 4vh;
            width: 100%;
            position: absolute;
            top: 38px;
            left: 0;
            display: none;
            z-index: 1;
        }

        .category_main_one:hover + .category_main_two,
        .category_main_two:hover {
            display: block;
        }

        .category_main_two>ul {
            padding: 8px;
            background-color: rgba(0, 0, 0, 0.683);
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 60px;
            list-style: none;
        }

        .category_main_two>ul>li>a {
            text-decoration: none;
            color: white;
        }

        .category_main_two>ul>li>a:hover {
            text-decoration: none;
            color: #9ca4e5;
        }

        @media screen and (max-width: 768px) {
            .category_main_section {
                display: none;
            }
        }

        @media screen and (max-width: 500px) {
            .category_main_section {
                display: none;
            }
        }

    </style>

</head>

<body>

    <div class="category_main_section">
        <div class="category_main_one">
            <ul>
                <li><a href="">Development</a></li>
                <li><a href="">Marketing</a></li>
                <li><a href="">IT & Software</a></li>
                <li><a href="">Office Productivity</a></li>
                <li><a href="">Ethical Hacking</a></li>
                <li><a href="">Machine Learning & AI</a></li>
            </ul>
        </div>
        <div class="category_main_two">
            <ul>
                <li><a href="">Development</a></li>
                <li><a href="">Marketing</a></li>
                <li><a href="">IT & Software</a></li>
                <li><a href="">Office Productivity</a></li>
                <li><a href="">Ethical Hacking</a></li>
                <li><a href="">Machine Learning & AI</a></li>
            </ul>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
