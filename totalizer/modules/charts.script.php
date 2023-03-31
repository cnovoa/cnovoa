<script>
    /* charts - INI */
    /*
    https://www.chartjs.org/docs/latest/samples/bar/border-radius.html
    */
    let myCharts = {};
    let chartsConfig = {
        colours: {
            // 'red': 'rgba(255, 99, 132, 1)',
            // 'blue': 'rgba(54, 162, 235, 1)',
            // 'yellow': 'rgba(255, 206, 86, 1)',
            // 'green': 'rgba(75, 192, 192, 1)',
            // 'purple': 'rgba(153, 102, 255, 1)',
            // 'orange': 'rgba(255, 159, 64, 1)',
            'red.5': 'rgba(198, 50, 50, 0.5)',
            'blue.5': 'rgba(54, 162, 235, 0.5)',
            'yellow.5': 'rgba(255, 206, 86, 0.5)',
            'green.5': 'rgba(75, 192, 192, 0.5)',
            'purple.5': 'rgba(153, 102, 255, 0.5)',
            'orange.5': 'rgba(255, 159, 64, 0.5)',
            'red': 'rgba(198, 50, 50, 1)',
            'blue': 'rgba(54, 162, 235, 1)',
            'yellow': 'rgba(255, 206, 86, 1)',
            'green': 'rgba(75, 192, 192, 1)',
            'purple': 'rgba(153, 102, 255, 1)',
            'orange': 'rgba(255, 159, 64, 1)',
        },
        config: {
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: "top"
                    },
                    title: false,
                    subtitle: false
                },
                scales: {
                    y: {
                        title: false
                    },
                    x: {
                        title: false
                    },
                }
            }
        },
        type: {}
    };
    chartsConfig.type.bar = {
        type: "bar",
        options: chartsConfig.config.options,
        data: {
            labels: false,
            datasets: []
        }
    };
    chartsConfig.type.line = {
        type: "line",
        options: chartsConfig.config.options,
        data: {
            labels: false,
            datasets: []
        }
    };
    chartsConfig.type.pie = {
        type: "pie",
        options: chartsConfig.config.options,
        data: {
            labels: false,
            datasets: []
        }
    };
    var chartsExampleData = {
        bar: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                    label: '2019',
                    data: [24, 22, 20, 18, 16, 14, 10, 12, 8, 6, 4, 2],
                    borderWidth: 2,
                    borderColor: chartsConfig.colours["blue"],
                    backgroundColor: chartsConfig.colours["blue.5"],
                },
                {
                    label: '2020',
                    data: [1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23],
                    borderWidth: 2,
                    borderColor: chartsConfig.colours["orange"],
                    backgroundColor: chartsConfig.colours["orange.5"],
                },
                {
                    label: '2021',
                    data: [5, 7, 9, 25, 23, 1, 22, 7, 1, 3, 15, 17],
                    borderWidth: 2,
                    borderColor: chartsConfig.colours["green"],
                    backgroundColor: chartsConfig.colours["green.5"],
                }
            ]
        },
        pie: {
            labels: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
            datasets: [{
                label: 'Dataset 1',
                data: [5, 9, 8, 3, 5],
                backgroundColor: [
                    chartsConfig.colours["red"],
                    chartsConfig.colours["orange"],
                    chartsConfig.colours["yellow"],
                    chartsConfig.colours["green"],
                    chartsConfig.colours["blue"]
                ],
            }]
        }
    };
    chartsExampleData.line = chartsExampleData.bar;
    var du_startCharts = function() {
        /** PIE CHART */
        du_updateChart({
            id: "pie",
            type: "pie",
            title: "The pie chart title",
            subtitle: "The pie chart subtitle",
            yLabel: "Test Y",
            xLabel: "Months",
            labels: chartsExampleData["pie"].labels,
            datasets: chartsExampleData["pie"].datasets,
        });
        /** BAR CHART */
        du_updateChart({
            id: "bar",
            type: "bar",
            title: "The Bar chart title",
            subtitle: "The Bar chart subtitle",
            yLabel: "Test Y",
            xLabel: "Months",
            labels: chartsExampleData["bar"].labels,
            datasets: chartsExampleData["bar"].datasets,
        });
        /** LINE CHART */
        du_updateChart({
            id: "line",
            type: "line",
            title: "The line chart title",
            subtitle: "The line chart subtitle",
            yLabel: "Test Y",
            xLabel: "Months",
            labels: chartsExampleData["line"].labels,
            datasets: chartsExampleData["line"].datasets,
        });
    };
    var du_updateChart = function(thisChartConfig) {
        if (
            typeof myCharts[thisChartConfig.id] == "undefined"
        ) {
            var newChartConfig = du_support.du_cloneObject(
                chartsConfig.type[thisChartConfig.type]
            );
            myCharts[thisChartConfig.id] = du_createChart("#du-chart-" + thisChartConfig.id, newChartConfig)
        }
        if (!!thisChartConfig.title && thisChartConfig.title != "") {
            myCharts[thisChartConfig.id].options.plugins.title = {
                display: true,
                text: thisChartConfig.title
            }
        } else {
            myCharts[thisChartConfig.id].options.plugins.title = false;
        }
        if (!!thisChartConfig.subtitle && thisChartConfig.subtitle != "") {
            myCharts[thisChartConfig.id].options.plugins.subtitle = {
                display: true,
                text: thisChartConfig.subtitle
            }
        } else {
            myCharts[thisChartConfig.id].options.plugins.subtitle = false;
        }
        myCharts[thisChartConfig.id].options.scales = false;
        if (thisChartConfig.type != "pie") {
            if (!!thisChartConfig.yLabel && thisChartConfig.yLabel != "") {
                if (!myCharts[thisChartConfig.id].options.scales) {
                    myCharts[thisChartConfig.id].options.scales = {};
                }
                myCharts[thisChartConfig.id].options.scales.y = {
                    title: {
                        display: true,
                        text: thisChartConfig.yLabel
                    }
                };
            }
            if (!!thisChartConfig.xLabel && thisChartConfig.xLabel != "") {
                if (!myCharts[thisChartConfig.id].options.scales) {
                    myCharts[thisChartConfig.id].options.scales = {};
                }
                myCharts[thisChartConfig.id].options.scales.x = {
                    title: {
                        display: true,
                        text: thisChartConfig.xLabel
                    }
                };
            }
        }
        /** Example change scale text */
        if (
            thisChartConfig.type == "bar" &&
            myCharts[thisChartConfig.id].options.scales.y
        ) {
            myCharts[thisChartConfig.id].options.scales.y.ticks = {
                // Include a dollar sign in the ticks
                callback: function(value, index, ticks) {
                    return "£ " + value;
                }
            }
        }
        if (
            !!thisChartConfig.labels &&
            thisChartConfig.labels != ""
        ) {
            myCharts[thisChartConfig.id].data.labels =
                thisChartConfig.labels;
        }
        if (!!thisChartConfig.datasets && thisChartConfig.datasets != "") {
            myCharts[thisChartConfig.id].data.datasets = thisChartConfig.datasets;
        }
        <?php
        if ($modulesData["charts"]["opts"]["add-annotations"]) {
        ?>
            /*******
             * add line
             */
            myCharts[thisChartConfig.id]
                .options
                .plugins
                .annotation
                .annotations = {
                    line1: {
                        type: 'line',
                        xMin: 2,
                        xMax: 2,
                        borderWidth: 2,
                        borderDash: [6, 6],
                        borderColor: chartsConfig.colours.red,
                        backgroundColor: chartsConfig.colours.red,
                        label: {
                            backgroundColor: chartsConfig.colours.red,
                            display: true,
                            content: "18 weeks",
                            position: "end",
                        },
                    },
                }
        <?php
        }
        ?>
        myCharts[thisChartConfig.id].update();
    };
    var du_createChart = function(thisId, thisChartConfig) {
        const ctx =
            jq(thisId, mainEl)
            .get(0)
            .getContext('2d');
        return new Chart(ctx, thisChartConfig);
    };