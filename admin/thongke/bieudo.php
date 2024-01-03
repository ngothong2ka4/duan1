<?php include "box_left.php"; ?>
<div class="main-content">
<div class="center">
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
  $tongdm = count($listthongke);
  $i = 1;
    foreach ($listthongke as $thongke) {
        extract($thongke);
        if($i==$tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$thongke['tendm']."',".$thongke['countsp']."]".$dauphay;
        $i+=1;
    }
  ?>
]);

// Set Options
const options = {
  title:'Product statistics chart by category',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>
</div>