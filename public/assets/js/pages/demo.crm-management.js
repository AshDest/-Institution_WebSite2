!(function (a) {
    "use strict";
    function t() {
        this.charts = [];
    }
    (t.prototype.init = function () {
        this.initCharts();
    }),
        (t.prototype.initCharts = function () {
            var t = ["#727cf5", "#0acf97"],
                e = a("#revenue-statistics-chart").data("colors");
            e && (t = e.split(","));
            var n = {
                chart: {
                    height: 361,
                    type: "line",
                    dropShadow: {
                        enabled: !0,
                        opacity: 0.2,
                        blur: 7,
                        left: -7,
                        top: 7,
                    },
                },
                dataLabels: { enabled: !1 },
                stroke: { curve: "smooth", width: 4 },
                series: [
                    { name: "Budget", data: [10, 20, 15, 28, 22, 34] },
                    { name: "Revenue", data: [2, 26, 10, 38, 30, 48] },
                ],
                colors: t,
                zoom: { enabled: !1 },
                xaxis: {
                    type: "string",
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    tooltip: { enabled: !1 },
                    axisBorder: { show: !1 },
                },
                yaxis: {
                    labels: {
                        formatter: function (t) {
                            return t + "k";
                        },
                        offsetX: -15,
                    },
                },
            };
            new ApexCharts(
                document.querySelector("#revenue-statistics-chart"),
                n
            ).render();
        }),
        (a.CrmManagement = new t()),
        (a.CrmManagement.Constructor = t);
})(window.jQuery),
    (function (e) {
        "use strict";
        e(document).ready(function (t) {
            e.CrmManagement.init();
        });
    })(window.jQuery);
