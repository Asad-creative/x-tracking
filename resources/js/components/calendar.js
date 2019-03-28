import React, { Component } from "react";
import CalendarWebix from "../webix/calendarWebix";
import "webix/webix.js";
import "webix/webix.css";

function getUI() {
    return {
        container: "box",
        id: "calandar_1",
        date: new Date(),
        view: "calendar",
        multiselect: "touch",
        on: {
            onDateSelect: function(ev) {
                var selected_date = $$("calandar_1").getSelectedDate();
                if (webix.isArray(selected_date))
                    var format = webix.Date.dateToStr("%Y-%m-%d");
                return console.log(selected_date.map(item => format(item)));
                //  console.log("selected", selected_date);
            }
        }
    };
}

class Calendar extends Component {
    render() {
        return (
            <div>
                <h1 className="title">Webix React Calendar</h1>
                <CalendarWebix ui={getUI()} />
            </div>
        );
    }
}

export default Calendar;
