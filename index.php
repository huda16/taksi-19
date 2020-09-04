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
    <div class="jumbotron bg-white shadow rounded-lg overflow-auto">
        <div class="container">
            <h1 class="display-4">Monitoring</h1>
            <div class="row justify-content-center">
                <div class="col my-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Pengunjung</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Tidak Memakai Masker</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Suhu Melebihi Standar</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col shadow bg-white rounded m-3">
                <canvas id="grafikJumlahPengunjung" height="40vh" width="80vw"></canvas>
            </div>
            <div class="col shadow bg-white rounded m-3">
                <canvas id="grafikSuhuPengunjung" height="40vh" width="80vw"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col shadow bg-white rounded m-3">
                <canvas id="grafikMaskerPengunjung" height="40vh" width="80vw"></canvas>
            </div>
            <div class="col shadow bg-white rounded m-3">
                <canvas id="grafikSanitizerPengunjung" height="40vh" width="80vw"></canvas>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Suhu</th>
                    <th scope="col">Masker</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>36,5</td>
                    <td>Ya</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>35,3</td>
                    <td>Ya</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>36,7</td>
                    <td>Tidak</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="jumbotron bg-white shadow rounded-lg">
        <div class="container">
            <h1 class="display-4">Jumlah Pelanggaran</h1>
            <div class="row">
                <div class="col my-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Pengunjung Melebihi Kapasitas</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Tidak Memakai <br> Masker</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card text-center text-white bg-info shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Suhu Melebihi <br> Standar</h5>
                            <h1 class="display-1">0</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-danger" role="alert">
                <b>Data pelanggaran harap dikirim ke pemerintah, sebagai upaya penanggulangan COVID-19 dan pelaksanaan swab test</b>
            </div>
        </div>
    </div>
</main>


<?php
include 'footer.php';
?>