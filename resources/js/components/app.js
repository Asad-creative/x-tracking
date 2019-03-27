import React, { Component } from "react";
import ReactDOM from "react-dom";
import SchedulerCalendar from "./scehdulerCalendar";
import Example from "./dataTable";
import ProgressChart from "./progressChart";
import Editor from "./ckEditor";

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

class App2 extends Component {
    render() {
        return (
            <div>
                <Editor />
            </div>
        );
    }
}

ReactDOM.render(<App />, document.getElementById("app"));

ReactDOM.render(<App2 />, document.getElementById("app2"));
