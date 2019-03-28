import React, { Component } from "react";
import ReactDOM from "react-dom";
import SchedulerCalendar from "./ganttChart";
import Example from "./dataTable";
import ProgressChart from "./progressChart";
import Calendar from "./calendar";
import Scheduler from "./scheduler";
import Editor from "./ckEditor";
import { BrowserRouter, Route, Switch } from "react-router-dom";

class App extends Component {
    render() {
        return (
            <div>
                <BrowserRouter>
                    <div>
                        <Switch>
                            <Route
                                exact
                                path={`/react/webix/datatable`}
                                component={Example}
                            />
                            <Route
                                exact
                                path={`/react/webix/gantt`}
                                component={SchedulerCalendar}
                            />
                            <Route
                                exact
                                path={`/react/gauge`}
                                component={ProgressChart}
                            />
                            <Route
                                exact
                                path={`/react/ck-editor`}
                                component={Editor}
                            />
                            <Route
                                exact
                                path={`/react/webix/calender`}
                                component={Calendar}
                            />
                            <Route
                                exact
                                path={`/react/webix/schedular`}
                                component={Scheduler}
                            />
                        </Switch>
                    </div>
                </BrowserRouter>
                {/* <Example />
                <SchedulerCalendar />
                <ProgressChart />
                <Editor /> */}
            </div>
        );
    }
}

ReactDOM.render(<App />, document.getElementById("app"));
