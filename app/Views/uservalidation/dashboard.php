<script type="text/javascript">
    function getChartColorsArray(t) {
        if (null !== document.getElementById(t)) {
            t = document.getElementById(t).getAttribute("data-colors");
            if (t)
                return (t = JSON.parse(t)).map(function (t) {
                    var e = t.replace(" ", "");
                    return -1 === e.indexOf(",")
                            ? getComputedStyle(document.documentElement).getPropertyValue(e) || e
                            : 2 == (t = t.split(",")).length
                            ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(t[0]) + "," + t[1] + ")"
                            : e;
                });
        }
    }
    <?php
    $cities=array();
    $contractcost=array();
    $achievedprogress_percentage=array();
    for($x=0;$x<count($financialdata);$x++){
       $cities[]= $financialdata[$x]->city_name;
       $contractcost[]= (int)$financialdata[$x]->contract_cost;
       $achievedprogress[]= (int)$financialdata[$x]->achievedprogress;
    }
    
    ?>

    var chartColumnColors = getChartColorsArray("customer_impression_charts1"),
            chartColumnDatatalabelColors =
            (chartColumnColors &&
                    ((options = {
                        chart: {height: 350, type: "bar", toolbar: {show: !1}},
                        plotOptions: {bar: {dataLabels: {position: "top"}}},
                        dataLabels: {
                            enabled: !0,
                            formatter: function (t) {
                                return t ;
                            },
                            offsetY: -20,
                            style: {fontSize: "12px", colors: ["#adb5bd"]},
                        },
                        //series: [{name: "Progress", data: [2.5, 3.2, 5, 10.1, 4.2, 3.8, 3, 2.4, 4, 1.2, 3.5, 0.8, 18.7, 20.9]}],
                        series: [
                            {name: "Contract Cost", data: <?=json_encode($contractcost)?>},
                            {name: "Achieved Progress", data: <?=json_encode($achievedprogress)?>},
                        ],
                        colors: chartColumnDatatalabelColors,
                        grid: {borderColor: "#f1f1f1"},
                        xaxis: {categories: <?=json_encode($cities)?>},
                   
                        fill: {gradient: {shade: "light", type: "horizontal", shadeIntensity: 0.25, gradientToColors: void 0, inverseColors: !0, opacityFrom: 1, opacityTo: 1, stops: [50, 0, 100, 100]}},
                        yaxis: {
                            axisBorder: {show: !1},
                            axisTicks: {show: !1},
                            labels: {
                                show: !1,
                                formatter: function (t) {
                                    return t + "%";
                                },
                            },
                        },
                        
                    }),
                            (chart = new ApexCharts(document.querySelector("#customer_impression_charts1"), options)).render()));

</script>