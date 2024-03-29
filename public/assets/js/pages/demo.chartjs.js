function hexToRGB(r, t) {
    var a = parseInt(r.slice(1, 3), 16),
        e = parseInt(r.slice(3, 5), 16),
        o = parseInt(r.slice(5, 7), 16);
    return t
        ? "rgba(" + a + ", " + e + ", " + o + ", " + t + ")"
        : "rgb(" + a + ", " + e + ", " + o + ")";
}
!(function (d) {
    "use strict";
    function r() {
        (this.$body = d("body")), (this.charts = []);
    }
    (r.prototype.respChart = function (t, a, e, o) {
        var n = Chart.controllers.line.prototype.draw;
        Chart.controllers.line.prototype.draw = function () {
            n.apply(this, arguments);
            var r = this.chart.ctx,
                t = r.stroke;
            r.stroke = function () {
                r.save(),
                    (r.shadowColor = "rgba(0,0,0,0.01)"),
                    (r.shadowBlur = 20),
                    (r.shadowOffsetX = 0),
                    (r.shadowOffsetY = 5),
                    t.apply(this, arguments),
                    r.restore();
            };
        };
        var s = Chart.controllers.doughnut.prototype.draw;
        Chart.controllers.doughnut.prototype.draw = function () {
            s.apply(this, arguments);
            var r = this.chart.ctx,
                t = r.fill;
            r.fill = function () {
                r.save(),
                    (r.shadowColor = "rgba(0,0,0,0.03)"),
                    (r.shadowBlur = 4),
                    (r.shadowOffsetX = 0),
                    (r.shadowOffsetY = 3),
                    t.apply(this, arguments),
                    r.restore();
            };
        };
        var l = Chart.controllers.bar.prototype.draw;
        (Chart.controllers.bar.prototype.draw = function () {
            l.apply(this, arguments);
            var r = this.chart.ctx,
                t = r.fill;
            r.fill = function () {
                r.save(),
                    (r.shadowColor = "rgba(0,0,0,0.01)"),
                    (r.shadowBlur = 20),
                    (r.shadowOffsetX = 4),
                    (r.shadowOffsetY = 5),
                    t.apply(this, arguments),
                    r.restore();
            };
        }),
            (Chart.defaults.color = "#8391a2"),
            (Chart.defaults.scale.grid.color = "#8391a2");
        var i = t.get(0).getContext("2d"),
            c = d(t).parent();
        return (function () {
            var r;
            switch ((t.attr("width", d(c).width()), a)) {
                case "Line":
                    r = new Chart(i, { type: "line", data: e, options: o });
                    break;
                case "Doughnut":
                    r = new Chart(i, { type: "doughnut", data: e, options: o });
                    break;
                case "Pie":
                    r = new Chart(i, { type: "pie", data: e, options: o });
                    break;
                case "Bar":
                    r = new Chart(i, { type: "bar", data: e, options: o });
                    break;
                case "Radar":
                    r = new Chart(i, { type: "radar", data: e, options: o });
                    break;
                case "PolarArea":
                    r = new Chart(i, {
                        data: e,
                        type: "polarArea",
                        options: o,
                    });
            }
            return r;
        })();
    }),
        (r.prototype.initCharts = function () {
            var r,
                t,
                a,
                e,
                o,
                n,
                s,
                l = [],
                i = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];
            return (
                0 < d("#line-chart-example").length &&
                    ((r = {
                        labels: [
                            "Mon",
                            "Tue",
                            "Wed",
                            "Thu",
                            "Fri",
                            "Sat",
                            "Sun",
                        ],
                        datasets: [
                            {
                                label: "Current Week",
                                backgroundColor: hexToRGB(
                                    (n = (o = d("#line-chart-example").data(
                                        "colors"
                                    ))
                                        ? o.split(",")
                                        : i.concat())[0],
                                    0.3
                                ),
                                fill: !0,
                                borderColor: n[0],
                                data: [32, 42, 42, 62, 52, 75, 62],
                            },
                            {
                                label: "Previous Week",
                                fill: !0,
                                backgroundColor: "transparent",
                                borderColor: n[1],
                                borderDash: [5, 5],
                                data: [42, 58, 66, 93, 82, 105, 92],
                            },
                        ],
                    }),
                    l.push(
                        this.respChart(d("#line-chart-example"), "Line", r, {
                            maintainAspectRatio: !1,
                            plugins: {
                                legend: { display: !1 },
                                filler: { propagate: !1 },
                                tooltip: { mode: "nearest" },
                                interaction: { mode: "nearest" },
                                hover: {
                                    enabled: !0,
                                    intersect: !0,
                                    mode: "nearest",
                                },
                            },
                            tension: 0.3,
                            scales: {
                                x: { grid: { color: "rgba(0,0,0,0.05)" } },
                                y: {
                                    ticks: { stepSize: 20 },
                                    display: !0,
                                    borderDash: [5, 5],
                                    grid: {
                                        color: "rgba(0,0,0,0)",
                                        fontColor: "#fff",
                                    },
                                },
                            },
                        })
                    )),
                0 < d("#bar-chart-example").length &&
                    ((n = (o = d("#bar-chart-example").data("colors"))
                        ? o.split(",")
                        : i.concat()),
                    (t = document
                        .getElementById("bar-chart-example")
                        .getContext("2d")
                        .createLinearGradient(0, 500, 0, 150)).addColorStop(
                        0,
                        n[0]
                    ),
                    t.addColorStop(1, n[1]),
                    (a = {
                        labels: [
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
                        datasets: [
                            {
                                label: "Sales Analytics",
                                backgroundColor: t,
                                borderColor: t,
                                hoverBackgroundColor: t,
                                hoverBorderColor: t,
                                data: [
                                    65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80,
                                    81,
                                ],
                            },
                            {
                                label: "Dollar Rate",
                                backgroundColor: "#e3eaef",
                                borderColor: "#e3eaef",
                                hoverBackgroundColor: "#e3eaef",
                                hoverBorderColor: "#e3eaef",
                                data: [
                                    89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65,
                                    59,
                                ],
                            },
                        ],
                    }),
                    l.push(
                        this.respChart(d("#bar-chart-example"), "Bar", a, {
                            maintainAspectRatio: !1,
                            barPercentage: 0.7,
                            categoryPercentage: 0.4,
                            plugins: { legend: { display: !1 } },
                            scales: {
                                y: {
                                    grid: {
                                        display: !1,
                                        color: "rgba(0,0,0,0.05)",
                                        offset: !0,
                                    },
                                    stacked: !1,
                                    ticks: { stepSize: 20 },
                                },
                                x: {
                                    dataset: {},
                                    stacked: !1,
                                    grid: { color: "rgba(0,0,0,0.01)" },
                                },
                            },
                        })
                    )),
                0 < d("#donut-chart-example").length &&
                    ((e = {
                        labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
                        datasets: [
                            {
                                data: [300, 135, 48, 154],
                                backgroundColor: (n = (o = d(
                                    "#donut-chart-example"
                                ).data("colors"))
                                    ? o.split(",")
                                    : i.concat()),
                                borderColor: "transparent",
                                borderWidth: "3",
                            },
                        ],
                    }),
                    l.push(
                        this.respChart(
                            d("#donut-chart-example"),
                            "Doughnut",
                            e,
                            {
                                maintainAspectRatio: !1,
                                cutoutPercentage: 60,
                                plugins: { legend: { display: !1 } },
                            }
                        )
                    )),
                0 < d("#radar-chart-example").length &&
                    ((s = {
                        labels: [
                            "Eating",
                            "Drinking",
                            "Sleeping",
                            "Designing",
                            "Coding",
                            "Cycling",
                            "Running",
                        ],
                        datasets: [
                            {
                                label: "Desktops",
                                backgroundColor: hexToRGB(
                                    (n = (o = d("#radar-chart-example").data(
                                        "colors"
                                    ))
                                        ? o.split(",")
                                        : i.concat())[0],
                                    0.2
                                ),
                                borderColor: n[0],
                                pointBackgroundColor: n[0],
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: n[0],
                                data: [65, 59, 90, 81, 56, 55, 40],
                            },
                            {
                                label: "Tablets",
                                backgroundColor: hexToRGB(n[1], 0.2),
                                borderColor: n[1],
                                pointBackgroundColor: n[1],
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: n[1],
                                data: [28, 48, 40, 19, 96, 27, 100],
                            },
                        ],
                    }),
                    l.push(
                        this.respChart(d("#radar-chart-example"), "Radar", s, {
                            maintainAspectRatio: !1,
                        })
                    )),
                l
            );
        }),
        (r.prototype.init = function () {
            var t = this;
            (Chart.defaults.font.family =
                '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif'),
                (t.charts = this.initCharts()),
                d(window).on("resizeEnd", function (r) {
                    d.each(t.charts, function (r, t) {
                        try {
                            t.destroy();
                        } catch (r) {}
                    }),
                        (t.charts = t.initCharts());
                }),
                d(window).resize(function () {
                    this.resizeTO && clearTimeout(this.resizeTO),
                        (this.resizeTO = setTimeout(function () {
                            d(this).trigger("resizeEnd");
                        }, 500));
                });
        }),
        (d.ChartJs = new r()),
        (d.ChartJs.Constructor = r);
})(window.jQuery),
    (function () {
        "use strict";
        window.jQuery.ChartJs.init();
    })();
