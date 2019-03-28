import React, { Component } from "react";
import CalendarWebix from "../webix/calendarWebix";
import "webix/webix.js";
import "webix/webix.css";

var scheduler_data = [
    {
        id: "0361150491",
        start_date: "2019-03-26 07:00",
        end_date: "2019-03-26 07:30",
        text: "International Horse Show",
        details: "Olympia"
    },
    {
        id: "0361150492",
        start_date: "2019-03-27 14:00",
        end_date: "2019-03-27 16:00",
        text: "Ladbrokes.com World Darts Championship (Evening session)",
        details: "Alexandra Palace"
    },
    {
        id: "0361150493",
        start_date: "2019-03-28 08:00",
        end_date: "2019-03-28 10:00",
        text: "Peter Pan",
        details: "O2 Arena"
    }
];

function getUI() {
    return {
        type: "space",
        rows: [
            {
                view: "dhx-scheduler",
                id: "scheduler",
                date: new Date(),
                init: function() {
                    this.getScheduler().config.xml_date = "%Y-%m-%d %H:%i";
                    this.getScheduler().config.first_hour = 6;
                    this.getScheduler().config.multi_day = false;
                },
                ready: function(scheduler) {
                     //  this.getScheduler.load(scheduler_data)
                      console.log( "scheduler", this.getScheduler()  )
                    this.getScheduler().parse(scheduler_data, "json");
                }
            }
        ]
    };
}

class Scheduler extends Component {
    render() {
        return (
            <div>
                <h1 className="title">Webix React Scheduler</h1>
                <CalendarWebix ui={getUI()} />
            </div>
        );
    }
}

export default Scheduler;
