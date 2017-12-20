<html>
<head>
    <title>
        TO DO LIST
    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="paperStyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<style>
    body {height:100%; width:100%; margin:0px;padding:0px}
    html { overflow-x: hidden; }


    .paperList {
        position: relative;
        height: 70px;
        width: 900px;
        word-wrap: break-word;
        opacity: 1;
        overflow: scroll;
        background: #FFE373;

        overflow-x: hidden;
        filter: brightness(100%);

    }

    .img-responsive{
        width: auto;
        height: auto;

    }


    .paperList h1{
        position: absolute;
        left: 10px;
        padding-right: 15px;
        top: 1px;
        font-size:15pt;
        width: 100%;
        color: black;
    }

    .papersTable{
        border-spacing: 10px ;
    }

    td {
        padding: 5px;
        border: 1px;
    }

    .arrow{
        height: 70px;
        width: auto;
    }

    .delete{
        height: 70px;
        width: auto;
    }

</style>

</head>
<body>

<?php
include 'authorize.php';
?>

<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope){
        $scope.text = "";

    })
</script>

<script>
    var app = angular.module('myTable', []);
    app.controller('tableCtrl', function($scope){
        $scope.papers = ["sex","stas","max"];

    });
</script>

<!-- <div ng-app="myApp" ng-controller="myCtrl">
 <input ng-model="text">
</div> -->

<?php

include_once "createDB.php";



?>


<div class="gridContainer">
    <div class="row">
        <div class="col-md-12"; style="background: green">MD-12</div>
    </div>
    <div class="row">
        <div class="col-md-1" style="background: blueviolet; height: 200px">leftcolgrid</div>
        <div class="col-md-10">

            <div ng-app="myTable" ng-controller="tableCtrl">
                <ul>
                    <table class="papersTable">
                        <tr>
                            <div ng-repeat="paper in papers">{{paper}}</div>


                            <!--
                            <td>
                                <img class="arrow" src="arrows.jpg" alt="arrows">
                            </td>

                            <td>
                                    <div  class="paperList">
                                        <h1> {{text}}</h1>
                                    </div>
                            </td>

                            <td>
                                <img class="delete" src="x.png" alt="x">
                            </td>
                            -->

                        </tr>

                    </table>
                </ul>
            </div>


        </div>
        <div class="col-md-1" style="background: red; height: 100px ">right col grid</div>
    </div>
    <div class="row" style="background: gray">
        <div class="col-md-12" align="center">
        rrr
        </div>
    </div>

</div>

    <br><br>



</body>
</html>