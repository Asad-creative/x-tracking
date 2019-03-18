import React, { Component } from "react";
import ReactDOM from "react-dom";
import SchedulerCalendar from "./scehdulerCalendar";
import Example from "./dataTable";
import ProgressChart from "./progressChart";

class App extends Component {
    render() {
        return (
            <div>
                <Example />
                <SchedulerCalendar />
                <ProgressChart />
            </div>
        );
    }
}

ReactDOM.render(<App />, document.getElementById("app"));
