<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('header')?>

<body>
<!--nav bar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </div>
</nav>

<!--Header-->
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Nguyễn Xuân Tuấn</h1>
    <p>Nguyễn Xuân Tuấn</p>
</div>
<!--Container-->
<div class="container-fluid">
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-md-6 text-center" style="height: 430px;">
            <h2>NHIỆT ĐỘ</h2>
            <br>
            <div id="gaugesTemperature"></div>
        </div>
        <div class="col-md-6 text-center">
            <h2 class="text-center"> VÒI PHUN NƯỚC </h2>
            <img id="imgSprinkler" src="<?php echo base_url();?>assets/img/sprinkler0.jpg" alt="Prinkler">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" style="margin-top: 0px;">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <div style="margin-left:30px;">
                <p>Công tắc vòi phun đang <b id="sprinklerState">TẮT</b></p>
                <label class="switch">
                    <input id="switcher" type="checkbox" onclick="switcherOn()">
                    <span class="slider round"></span>
                </label>
                <span id="btnGroupLevel" class="btn-group" style="margin-left:90px;">
            <button id="btnLv1" type="button" class="btn btn-primary" onclick="setSprinklerLv1()">Lv.1</button>
            <button id="btnLv2" type="button" class="btn btn-primary" onclick="setSprinklerLv2()">Lv.2</button>
            <button id="btnLv3" type="button" class="btn btn-primary" onclick="setSprinklerLv3()">Lv.3</button>
          </span>
            </div>
            <br>
        </div>
    </div>
</div>

<div id="chartContainer" style="height: 370px; width:100%;"></div>
<!--Footer-->
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Designed by tuannx</p>
</div>

</body>



<script>
    knobInit('gaugesTemperature');
    renderChart("chartContainer");
</script>

</html>