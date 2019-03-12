import React, { Component } from "react";
import Webix from "./Webix";

function getUI() {
    return {
        view: "dhx-scheduler",
        date: new Date(2010, 0, 5),
        mode: "week",
        init: function() {}, //scheduler config
        ready: function() {
            scheduler.parse("..events data..");
        }
    };
}

class SchedulerCalendar extends Component {
    render() {
        return <Webix ui={getUI()} />;
    }
}

export default SchedulerCalendar;
