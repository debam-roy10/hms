<?php
include "includes/db.php";
include "includes/header.php";
include "includes/sidebar.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Staff</h3>
                        <h2 class="card-text text-center">
                            69
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Doctor</h3>
                        <h2 class="card-text text-center">
                            420
                        </h2>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Patient</h3>
                        <h2 class="card-text text-center">
                            220
                        </h2>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">idk</h3>
                        <h2 class="card-text text-center">
                            69
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="chart-container">
        <canvas class="chart" id="myChart" style="max-width:500px; max-height:500px"></canvas>
    
        <canvas id="myChart2" style="max-width:500px; max-height:500px"></canvas>
    </div>


</main>

<?php
include("includes/footer.php");
?>