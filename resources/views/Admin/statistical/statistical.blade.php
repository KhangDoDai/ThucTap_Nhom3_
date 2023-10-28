<!-- Page Content Goes Here -->
@section('title','Thống kê')
<!-- / Top banner -->
@extends('admin.layout.master')
@section('admin-content')
{{--        <div id="kt_charts_widget_2_chart" style="height: 350px"></div>--}}
<script>
    a = document.getElementById("kt_charts_widget_1_chart"), o = parseInt(KTUtil.css(a, "height")), s = KTUtil.getCssVariableValue("--bs-gray-500"), r = KTUtil.getCssVariableValue("--bs-gray-200"), i = KTUtil.getCssVariableValue("--bs-primary"), l = KTUtil.getCssVariableValue("--bs-gray-300"), a && new ApexCharts(a, {
        series: [{
            name: "Net Profit",
            data: [44, 55, 57, 56, 61, 58]
        }, {name: "Revenue", data: [76, 85, 101, 98, 87, 105]}],
        chart: {fontFamily: "inherit", type: "bar", height: o, toolbar: {show: !1}},
        plotOptions: {bar: {horizontal: !1, columnWidth: ["30%"], borderRadius: 4}},
        legend: {show: !1},
        dataLabels: {enabled: !1},
        stroke: {show: !0, width: 2, colors: ["transparent"]},
        xaxis: {
            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            axisBorder: {show: !1},
            axisTicks: {show: !1},
            labels: {style: {colors: s, fontSize: "12px"}}
        },
        yaxis: {labels: {style: {colors: s, fontSize: "12px"}}},
        fill: {opacity: 1},
        states: {
            normal: {filter: {type: "none", value: 0}},
            hover: {filter: {type: "none", value: 0}},
            active: {allowMultipleDataPointsSelection: !1, filter: {type: "none", value: 0}}
        },
        tooltip: {
            style: {fontSize: "12px"}, y: {
                formatter: function (e) {
                    return "$" + e + " thousands"
                }
            }
        },
        colors: [i, l],
        grid: {borderColor: r, strokeDashArray: 4, yaxis: {lines: {show: !0}}}
    }).render()
</script>
@endsection


