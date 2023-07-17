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
    $achievedprogress=array();
    for($x=0;$x<count($financialdata);$x++){
       $cities[]= $financialdata[$x]->city_name;
       $contractcost[]= (int)$financialdata[$x]->contract_cost;
       $achievedprogress[]= 0;
    }
    ?>
    
    var chartColumnColors = getChartColorsArray("column_chart"),
            chartColumnDatatalabelColors =
            (chartColumnColors &&
                    ((options = {
                        chart: {height: 350, type: "bar", toolbar: {show: !1}},
                        plotOptions: {bar: {horizontal: !1, columnWidth: "45%", endingShape: "rounded"}},
                        dataLabels: {enabled: !1},
                        stroke: {show: !0, width: 2, colors: ["transparent"]},
                        series: [
                            {name: "Contract Cost", data: <?=json_encode($contractcost)?>},
                            {name: "Achieved Progress", data: <?=json_encode($achievedprogress)?>},
                        ],
                        colors: chartColumnColors,
                        xaxis: {categories: <?=json_encode($cities)?>},
                        yaxis: {title: {text: "INR "}},
                        grid: {borderColor: "#f1f1f1"},
                        fill: {opacity: 1},
                        tooltip: {
                            y: {
                                formatter: function (t) {
                                    return "&#8377 " + t;
                                },
                            },
                        },
                    }),
                            (chart = new ApexCharts(document.querySelector("#column_chart"), options)).render()),
                    getChartColorsArray("column_chart_datalabel"));




</script>