<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

include 'header.php';
?>



<main>
    <div class="jumbotron bg-white shadow rounded-lg">
        <div class="container">
            <h1 class="display-4">Monitoring</h1>
            <div class=" row">
                <div class="col m-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Pengunjung</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col m-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Tidak Memakai Masker</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col m-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Suhu Melebihi Standar</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col shadow bg-white rounded mb-3">
            <canvas id="grafikJumlahPengunjung" height="40vh" width="80vw"></canvas>
        </div>
        <div class="col shadow bg-white rounded mb-3">
            <canvas id="grafikSuhuPengunjung" height="40vh" width="80vw"></canvas>
        </div>
        <div class="col shadow bg-white rounded mb-3">
            <canvas id="grafikMaskerPengunjung" height="40vh" width="80vw"></canvas>
        </div>
        <div class="col shadow bg-white rounded mb-3">
            <canvas id="grafikSanitizerPengunjung" height="40vh" width="80vw"></canvas>
        </div>
    </div>


</main>


<?php
include 'footer.php';
?>