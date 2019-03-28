import React, { Component } from "react";
import GanttWebix from "../webix/ganttWebix";
import "webix/webix.js";
import "webix/webix.css";

const tasks = {
    data: [
        {
            id: 1,
            text: "Project #2",
            start_date: "01-04-2013",
            duration: 18,
            order: 10,
            progress: 0.4,
            open: true
        },
        {
            id: 2,
            text: "Task #1",
            start_date: "02-04-2013",
            duration: 8,
            order: 10,
            progress: 0.6,
            parent: 1
        },
        {
            id: 3,
            text: "Task #2",
            start_date: "11-04-2013",
            duration: 8,
            order: 20,
            progress: 0.6,
            parent: 1
        }
    ],
    links: [
        { id: 1, source: 1, target: 2, type: "1" },
        { id: 2, source: 2, target: 3, type: "0" },
        { id: 3, source: 3, target: 4, type: "0" },
        { id: 4, source: 2, target: 5, type: "2" }
    ]
};

function scaleDays() {
    gantt.config.scale_unit = "day";
    gantt.config.date_scale = "%d %M";
    gantt.load("get/gantt");
}
function scaleWeeks() {
    gantt.config.scale_unit = "week";
    gantt.config.date_scale = "Week #%W";
    gantt.load("get/gantt");
}
function scaleMonths() {
    gantt.config.scale_unit = "month";
    gantt.config.date_scale = "%F, %Y";
    gantt.load("get/gantt");
}

var toolbar = {
    container: "date_scale",
    view: "toolbar",
    paddingY: 0,
    elements: [
        {
            view: "segmented",
            on: {
                onChange: function(id) {
                    switch (id) {
                        /*case "hours":
                             scaleHours();
                             break;*/
                        case "days":
                            scaleDays();
                            break;
                        case "weeks":
                            scaleWeeks();
                            break;
                        case "months":
                            scaleMonths();
                            break;
                        default:
                            webix.message("Wrong scale option");
                    }
                }
            },
            options: [
                /*{
                id: "hours",
                value: "Hours"
             },*/ {
                    id: "days",
                    value: "Days",
                    selected: true
                },
                {
                    id: "weeks",
                    value: "Weeks"
                },
                {
                    id: "months",
                    value: "Months"
                }
            ]
        }
    ]
};

function getUI() {
    return {
        container: "gantt_chart",
        type: "space",
        rows: [
            {
                view: "dhx-gantt",
                //  cdn: "https://cdn.dhtmlx.com/gantt/5.2",
                init: function(gantt_obj) {
                    //do nothing
                    //   gantt_obj.addCalendar();
                    //   console.log("gantt", gantt_obj);
                },
                ready: function(gantt_obj) {
                    gantt_obj.load("get/gantt");
                    var dp = new gantt_obj.dataProcessor("gantt");
                    dp.init(gantt_obj);
                    dp.setTransactionMode("REST");
                }
            },
            toolbar
        ]
    };
}

class SchedulerCalendar extends Component {
    render() {
        return (
            <div>
                <h1 className="title">Webix Gantt Chart </h1>
                <GanttWebix ui={getUI()} />
            </div>
        );
    }
}

export default SchedulerCalendar;
