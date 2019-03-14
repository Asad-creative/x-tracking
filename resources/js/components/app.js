import React, { Component } from "react";
import ReactDOM from "react-dom";
import SchedulerCalendar from "./scehdulerCalendar";
import Example from "./dataTable";

class App extends Component {
    render() {
        return (
            <div>
                <Example />
                {/* <SchedulerCalendar /> */}
            </div>
        );
    }
}

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}
