import React, { Component } from "react";
import Highcharts from "highcharts";
import ReactHighcharts from "react-highcharts";
import HighchartsMore from "highcharts/highcharts-more";
import SolidGauge from "highcharts/modules/solid-gauge";

if (!Highcharts.theme) {
    Highcharts.setOptions({
        chart: {
            backgroundColor: "black"
            // height: 200
        },
        colors: ["#F62366", "#9DFF02", "#0CCDD6"],
        title: {
            style: {
                color: "silver"
            }
        },
        tooltip: {
            style: {
                color: "silver"
            }
        }
    });
}

function renderIcons() {
    // Move icon
    if (!this.series[0].icon) {
        this.series[0].icon = this.renderer
            .path(["M", -8, 0, "L", 8, 0, "M", 0, -8, "L", 8, 0, 0, 8])
            .attr({
                stroke: "#303030",
                "stroke-linecap": "round",
                "stroke-linejoin": "round",
                "stroke-width": 2,
                zIndex: 10
            })
            .add(this.series[2].group);
    }
    this.series[0].icon.translate(
        this.chartWidth / 2 - 10,
        this.plotHeight / 2 -
            this.series[0].points[0].shapeArgs.innerR -
            (this.series[0].points[0].shapeArgs.r -
                this.series[0].points[0].shapeArgs.innerR) /
                2
    );

    // Exercise icon
    if (!this.series[1].icon) {
        this.series[1].icon = this.renderer
            .path([
                "M",
                -8,
                0,
                "L",
                8,
                0,
                "M",
                0,
                -8,
                "L",
                8,
                0,
                0,
                8,
                "M",
                8,
                -8,
                "L",
                16,
                0,
                8,
                8
            ])
            .attr({
                stroke: "#ffffff",
                "stroke-linecap": "round",
                "stroke-linejoin": "round",
                "stroke-width": 2,
                zIndex: 10
            })
            .add(this.series[2].group);
    }
    this.series[1].icon.translate(
        this.chartWidth / 2 - 10,
        this.plotHeight / 2 -
            this.series[1].points[0].shapeArgs.innerR -
            (this.series[1].points[0].shapeArgs.r -
                this.series[1].points[0].shapeArgs.innerR) /
                2
    );

    // Stand icon
    if (!this.series[2].icon) {
        this.series[2].icon = this.renderer
            .path(["M", 0, 8, "L", 0, -8, "M", -8, 0, "L", 0, -8, 8, 0])
            .attr({
                stroke: "#303030",
                "stroke-linecap": "round",
                "stroke-linejoin": "round",
                "stroke-width": 1,
                zIndex: 10
            })
            .add(this.series[2].group);
    }

    this.series[2].icon.translate(
        this.chartWidth / 2 - 10,
        this.plotHeight / 2 -
            this.series[2].points[0].shapeArgs.innerR -
            (this.series[2].points[0].shapeArgs.r -
                this.series[2].points[0].shapeArgs.innerR) /
                2
    );
}

const options = {
    chart: {
        type: "solidgauge",
        height: "30%",
        events: {
            render: renderIcons
        }
    },

    title: {
        text: "Gauge Activity",
        style: {
            fontSize: "24px"
        }
    },

    tooltip: {
        borderWidth: 0,
        backgroundColor: "none",
        shadow: false,
        style: {
            fontSize: "16px"
            // marginBottom: "200px"
            // height: '300px'
        },
        pointFormat:
            '{series.name}<br><span style="font-size:2em; color: {point.color}; font-weight: bold">{point.y}%</span>',
        positioner: function(labelWidth) {
            return {
                x: (this.chart.chartWidth - labelWidth) / 2,
                y: this.chart.plotHeight / 2 + 15
            };
        }
    },

    pane: [
        {
            startAngle: 0,
            endAngle: 360,
            background: [
                {
                    // Track for Move
                    outerRadius: "112%",
                    innerRadius: "88%",
                    backgroundColor: Highcharts.Color(
                        Highcharts.getOptions().colors[0]
                    ),
                    borderWidth: 0
                }
            ]
        },
        {
            startAngle: 360,
            endAngle: 0,
            background: [
                {
                    // Track for Move
                    outerRadius: "87%",
                    innerRadius: "63%",
                    backgroundColor: Highcharts.Color(
                        Highcharts.getOptions().colors[0]
                    ),
                    borderWidth: 0
                }
            ]
        },
        {
            startAngle: 360,
            endAngle: 0,
            background: [
                {
                    // Track for Move
                    outerRadius: "62%",
                    innerRadius: "38%",
                    backgroundColor: Highcharts.Color(
                        Highcharts.getOptions().colors[0]
                    ),
                    borderWidth: 0
                }
            ]
        }
    ],

    yAxis: [
        {
            min: 0,
            max: 100,
            pane: 0,
            lineWidth: 0,
            tickPositions: []
        },
        {
            min: 0,
            max: 100,
            pane: 1,
            lineWidth: 0,
            tickPositions: []
        },
        {
            min: 0,
            max: 100,
            pane: 2,
            lineWidth: 0,
            tickPositions: []
        }
    ],

    plotOptions: {
        solidgauge: {
            dataLabels: {
                enabled: false
            },
            linecap: "round",
            stickyTracking: false,
            rounded: true
        }
    },
    shapes: [{
        strokeWidth: 1
    }],

    series: [
        {
            name: "Move",
            yAxis: 0,
            data: [
                {
                    color: Highcharts.getOptions().colors[0],
                    radius: "112%",
                    innerRadius: "88%",
                    y: 80
                }
            ]
        },
        {
            name: "Exercise",
            yAxis: 1,
            data: [
                {
                    color: Highcharts.getOptions().colors[1],
                    radius: "87%",
                    innerRadius: "63%",
                    y: 65
                }
            ]
        },
        {
            name: "Stand",
            yAxis: 2,
            data: [
                {
                    color: Highcharts.getOptions().colors[2],
                    radius: "62%",
                    innerRadius: "38%",
                    y: 80
                }
            ]
        }
    ]
};

class ProgressChart extends Component {
    constructor() {
        super();

        HighchartsMore(ReactHighcharts.Highcharts);
        SolidGauge(ReactHighcharts.Highcharts);
    }

    render() {
        return (
            <div>
                <h1 className="title">Gauge Activity</h1>
                <ReactHighcharts config={options} />
            </div>
        );
    }
}

export default ProgressChart;
