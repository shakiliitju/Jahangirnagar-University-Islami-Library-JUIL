<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - জাবিইপা</title>
    <link rel="shortcut icon" href="image/juil-logo.ico" type="image/x-icon">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- CSS STYILE  -->


    <style>
        /* navbar style starts here */
        .slidebar {

            border: 20px;
            width: 15%;
            height: 700px;
            position: fixed;
            top: 0px;
            background-color: rgba(195, 179, 179, 0.493);
        }

        .slidebar header {
            padding: 30px 10px;
            text-align: center;
            font-family: 'Mochiy Pop P One', sans-serif;
            font-size: 30px;
            font-weight: bolder;
            color: rgb(16, 95, 98);
        }

        .slidebar header span {
            font-size: 50px;
            color: rgb(89, 161, 87);
        }


        .slidebar ul li {

            list-style: none;
            padding: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bolder;

        }

        .slidebar ul li:hover {
            transform: scale(1.1);
            transition: .5s;
            border-radius: 10px;
            background-color: rgb(89, 150, 152);
            margin-right: 20px;
        }

        .slidebar ul li a {
            text-decoration: none;
        }

        table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 5px 10px 5px 10px;
        }

        .row h2 {
            font-family: 'Mochiy Pop P One', sans-serif;
            font-size: 30px;
            color: rgb(30, 60, 62)
        }

        table th {
            font-size: 20px;
            font-family: sans-serif;
        }

        .docadd {
            background: none;
            border: solid black 3px;
            padding: 5px;
            border-radius: 15px;
        }

        .docadd:hover {
            transform: scale(1.1);
            transition: .5s;
        }

        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .tabbutton {
            background: none;
            border: solid black 3px;
            padding: 5px;
            border-radius: 15px;

        }



        .tabbutton:hover {
            transform: scale(1.1);
            transition: .5s;
        }
    </style>


</head>

<body>


    <!-- sildebar starts -->


    <div class="slidebar">
        <header>
            <span>
                <i class="fas fa-users-cog"></i><br>
            </span>
            ADMIN
        </header>
        <ul>
            <li>
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
        </ul>

        <!-- logoutbutton -->
        <div>
            <style>
                .logout {
                    text-align: center;
                    margin-top: 3px;
                    font-family: 'Mochiy Pop P One', sans-serif;
                    font-weight: bolder;
                }

                .logout:hover {
                    transform: scale(1.2);
                    color: red;
                    transition: 1s;
                }
            </style>
            <a style="text-decoration: none;" href="login.php">
                <div class="logout">
                    Log Out
                </div>
            </a>
        </div>
    </div>

    <!-- slidebar ends -->


    <div class="container">

        <div class="row">
            <div style="margin-left: 50%; margin-top: 5%;">
                <h2>Message</b></h2>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">

            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> Message </th>
                        <th> Action </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';

                    $sql = " SELECT * FROM message LIMIT 5";
                    $query = mysqli_query($conn, $sql);
                    while ($Message = mysqli_fetch_array($query)) {


                    ?>
                        <tr>
                            <td><?php echo $Message['name'];  ?></td>
                            <td><?php echo $Message['email'];  ?></td>
                            <td><?php echo $Message['phone'];  ?></td>
                            <td><?php echo $Message['message'];  ?></td>
                            <td style="width: 70px;">
                                <button class="tabbutton" style="background:red;"> <a href="delete.php?id=<?php echo $Message['id'];  ?>" class="btn btn-success"><b>Delete</b></a></button> &nbsp;
                            </td>
                        </tr>
                    <?php

                    }

                    ?>

                </tbody>
            </table>
        </div>


    </div>


</body>

</html>