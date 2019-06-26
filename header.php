<?php?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aftermath Labs</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="aml-main.css">
    <!-- Button Border -->
    <link rel="stylesheet" href="button-style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body>

    <!-- Header -->
    <div class="container-fluid" id="nav">
        <div class="row nav">
            <div class="col-md-6">
                <a href="#">
                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/logo-horizontal-transparent.png"
                        height="54" width="170" id="logo">
                </a>
            </div>
            <div class="col-md-1">
                <a href="#" class="nav-links">SHOP</a>
            </div>
            <div class="col-md-1">
                <a href="#" class="nav-links">ABOUT</a>
            </div>
            <div class="col-md-2">
                <form>
                    <input type="text" id="nav-search" placeholder="search">
                </form>
            </div>
            <div class="col-md-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                    height="15" viewBox="0 0 20 15" id="cart-icon">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.179" y1="0.323" x2="1" y2="0.948"
                            gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ba9e4d" />
                            <stop offset="1" stop-color="#f5d769" />
                        </linearGradient>
                    </defs>
                    <path id="Fill_1" data-name="Fill 1"
                        d="M16.332,15H3.667a1.656,1.656,0,0,1-1.65-1.381L1.111,7.5H.833A.819.819,0,0,1,0,6.7V6.161a.82.82,0,0,1,.833-.8H3.172L6.88.441A1.138,1.138,0,0,1,8.431.205a1.058,1.058,0,0,1,.445.7,1.037,1.037,0,0,1-.2.792L5.919,5.357H14.08L11.324,1.7a1.037,1.037,0,0,1-.2-.792,1.057,1.057,0,0,1,.445-.7,1.14,1.14,0,0,1,1.552.236l3.707,4.916h2.338a.82.82,0,0,1,.833.8V6.7a.819.819,0,0,1-.833.8h-.277l-.907,6.12A1.656,1.656,0,0,1,16.332,15ZM13.846,7.5a.78.78,0,0,0-.769.787v3.676a.769.769,0,1,0,1.538,0V8.287A.779.779,0,0,0,13.846,7.5ZM10,7.5a.78.78,0,0,0-.769.787v3.676a.77.77,0,1,0,1.539,0V8.287A.78.78,0,0,0,10,7.5Zm-3.846,0a.78.78,0,0,0-.77.787v3.676a.769.769,0,1,0,1.538,0V8.287A.779.779,0,0,0,6.154,7.5Z"
                        transform="translate(0 0)" fill="url(#linear-gradient)" />
                </svg>
            </div>
            <div class="col-md-1">
                <svg id="menu-icon" data-name="Group 2 Copy" xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                    viewBox="0 0 20 17">
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="10" height="2.429" transform="translate(10)"
                        fill="#fff" />
                    <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="20" height="2.429"
                        transform="translate(0 7.286)" fill="#fff" />
                    <rect id="Rectangle_3_Copy_2" data-name="Rectangle 3 Copy 2" width="10" height="2.429"
                        transform="translate(0 14.571)" fill="#fff" />
                </svg>
            </div>
        </div>
    </div>
    <!-- end of Header -->