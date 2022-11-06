function generateData(a, e) {
    for (var t = 0, r = []; t < a; ) {
        var n = (t + 1).toString(),
            o = Math.floor(Math.random() * (e.max - e.min + 1)) + e.min;
        r.push({ x: n, y: o }), t++;
    }
    return r;
}
var colors = ["#727cf5"],
    dataColors = $("#basic-heatmap").data("colors");
dataColors && (colors = dataColors.split(","));
var options = {
        chart: { height: 380, type: "heatmap" },
        dataLabels: { enabled: !1 },
        colors: colors,
        series: [
            { name: "Metric 1", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric 2", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric 3", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric 4", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric 5", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric  6", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric 7", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric 8", data: generateData(20, { min: 0, max: 90 }) },
            { name: "Metric 9", data: generateData(20, { min: 0, max: 90 }) },
        ],
        xaxis: { type: "category" },
    },
    chart = new ApexCharts(document.querySelector("#basic-heatmap"), options);
function generateData(a, e) {
    for (var t = 0, r = []; t < a; ) {
        var n = (t + 1).toString(),
            o = Math.floor(Math.random() * (e.max - e.min + 1)) + e.min;
        r.push({ x: n, y: o }), t++;
    }
    return r;
}
chart.render();
colors = [
    "#F3B415",
    "#F27036",
    "#663F59",
    "#6A6E94",
    "#4E88B4",
    "#00A7C6",
    "#18D8D8",
    "#A9D794",
    "#46AF78",
];
(dataColors = $("#multiple-series-heatmap").data("colors")) &&
    (colors = dataColors.split(","));
options = {
    chart: { height: 380, type: "heatmap" },
    dataLabels: { enabled: !1 },
    colors: colors,
    series: [
        { name: "Metric 1", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 2", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 3", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 4", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 5", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 6", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 7", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 8", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric 9", data: generateData(20, { min: 0, max: 90 }) },
    ],
    xaxis: { type: "category" },
};
function generateData(a, e) {
    for (var t = 0, r = []; t < a; ) {
        var n = (t + 1).toString(),
            o = Math.floor(Math.random() * (e.max - e.min + 1)) + e.min;
        r.push({ x: n, y: o }), t++;
    }
    return r;
}
(chart = new ApexCharts(
    document.querySelector("#multiple-series-heatmap"),
    options
)).render();
colors = ["#fa6767", "#f9bc0d", "#44badc", "#42d29d"];
(dataColors = $("#color-range-heatmap").data("colors")) &&
    (colors = dataColors.split(","));
options = {
    chart: { height: 380, type: "heatmap" },
    plotOptions: {
        heatmap: {
            shadeIntensity: 0.5,
            colorScale: {
                ranges: [
                    { from: -30, to: 5, name: "Low", color: colors[0] },
                    { from: 6, to: 20, name: "Medium", color: colors[1] },
                    { from: 21, to: 45, name: "High", color: colors[2] },
                    { from: 46, to: 55, name: "Extreme", color: colors[3] },
                ],
            },
        },
    },
    dataLabels: { enabled: !1 },
    series: [
        { name: "Jan", data: generateData(20, { min: -30, max: 55 }) },
        { name: "Feb", data: generateData(20, { min: -30, max: 55 }) },
        { name: "Mar", data: generateData(20, { min: -30, max: 55 }) },
        { name: "Apr", data: generateData(20, { min: -30, max: 55 }) },
        { name: "May", data: generateData(20, { min: -30, max: 55 }) },
        { name: "Jun", data: generateData(20, { min: -30, max: 55 }) },
        { name: "Jul", data: generateData(20, { min: -30, max: 55 }) },
        { name: "Aug", data: generateData(20, { min: -30, max: 55 }) },
        { name: "Sep", data: generateData(20, { min: -30, max: 55 }) },
    ],
};
function generateData(a, e) {
    for (var t = 0, r = []; t < a; ) {
        var n = (t + 1).toString(),
            o = Math.floor(Math.random() * (e.max - e.min + 1)) + e.min;
        r.push({ x: n, y: o }), t++;
    }
    return r;
}
(chart = new ApexCharts(
    document.querySelector("#color-range-heatmap"),
    options
)).render();
colors = ["#39afd1", "#0acf97"];
(dataColors = $("#rounded-heatmap").data("colors")) &&
    (colors = dataColors.split(","));
options = {
    chart: { height: 380, type: "heatmap" },
    stroke: { width: 0 },
    plotOptions: {
        heatmap: {
            radius: 30,
            enableShades: !1,
            colorScale: {
                ranges: [
                    { from: 0, to: 50, color: colors[0] },
                    { from: 51, to: 100, color: colors[1] },
                ],
            },
        },
    },
    colors: colors,
    dataLabels: { enabled: !0, style: { colors: ["#fff"] } },
    series: [
        { name: "Metric1", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric2", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric3", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric4", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric5", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric6", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric7", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric8", data: generateData(20, { min: 0, max: 90 }) },
        { name: "Metric8", data: generateData(20, { min: 0, max: 90 }) },
    ],
    xaxis: { type: "category" },
    grid: { borderColor: "#f1f3fa" },
};
(chart = new ApexCharts(
    document.querySelector("#rounded-heatmap"),
    options
)).render();
