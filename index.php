<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histogram Ekuivalen</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <canvas id="myChart"></canvas>
    <?php 
// derajat keabuan
$l=8;
// jumlah piksel 32x32
$n=1024;

// jumlah piksel per n
$nk0=49;
$nk1=53;
$nk2=64;
$nk3=21;
$nk4=15;
$nk5=41;
$nk6=8;
$nk7=5;

// Cari Pr(rk)=nk/n
$pr0=$nk0/$n;
$pr1=$nk1/$n;
$pr2=$nk2/$n;
$pr3=$nk3/$n;
$pr4=$nk4/$n;
$pr5=$nk5/$n;
$pr6=$nk6/$n;
$pr7=$nk7/$n;

// Cari Sn
$sn0=$pr0;
$sn1=$pr0+$pr1;
$sn2=$pr0+$pr1+$pr2;
$sn3=$pr0+$pr1+$pr2+$pr3;
$sn4=$pr0+$pr1+$pr2+$pr3+$pr4;
$sn5=$pr0+$pr1+$pr2+$pr3+$pr4+$pr5;
$sn6=$pr0+$pr1+$pr2+$pr3+$pr4+$pr5+$pr6;
$sn7=$pr0+$pr1+$pr2+$pr3+$pr4+$pr5+$pr6+$pr7;

// Pembulatan
// echo round($sn0,1);
// echo round($sn1,1);
// echo round($sn1,1);
// echo round($sn3,1);
// echo round($sn4,1);
// echo round($sn5,1);
// echo round($sn6,1);
// echo round($sn7,1);

?>

    <script>
    const data = {
        labels: ["0", "1/7", "2/7", "3/7", "4/7", "5/7", "6/7", "1"],
        datasets: [{
            label: "Histogram Hasil Ekuivalen",
            data: [<?php echo round($sn0,1); ?>, <?= round($sn1,1); ?>, <?= round($sn2,1); ?>,
                <?= round($sn3,1); ?>, <?= round($sn4,1); ?>, <?= round($sn5,1); ?>,
                <?= round($sn6,1); ?>, <?= round($sn7,1); ?>
            ],
            backgroundColor: [
                "rgb(255, 99, 132)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(54, 100, 235)",
                "rgb(54, 100, 115)",
                "rgb(200, 100, 115)",
                "rgb(200, 198, 212)",
            ],
        }, ],
    };
    const config = {
        type: "bar",
        data: data,
        options: {},
    };
    const myChart = new Chart(document.getElementById("myChart"), config);
    </script>

</body>

</html>