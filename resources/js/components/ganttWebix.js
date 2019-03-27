// example of custom component with Webix UI inside
// this one is a static view, not linked to the React data store

import React, { Component } from "react";
import ReactDOM from "react-dom";

import "webix/webix.js";
import "webix/webix.css";

class GanttWebix extends Component {
    render() {
        return (
            <div style={{ marginBottom: 50 }}>
                <div
                    id="gantt_chart"
                    ref="gantt"
                    style={{
                        width: 1300,
                        height: 400,
                        marginTop: 0
                        // marginRight: "auto"
                    }}
                />
                <div id="date_scale" />
            </div>
        );
    }

    setWebixData(data) {
        const ui = this.ui;
        if (ui.setValues) ui.setValues(data);
        else if (ui.parse) ui.parse(data);
        else if (ui.setValue) ui.setValue(data);
    }

    componentWillUnmount() {
        this.ui.destructor();
        this.ui = null;
    }

    componentWillUpdate(props) {
        if (props.data) this.setWebixData(props.data);
        if (props.select) this.select(props.select);
    }

    componentDidMount() {
        this.ui = window.webix.ui(
            this.props.ui,
            ReactDOM.findDOMNode(this.refs.gantt)
        );

        this.componentWillUpdate(this.props);
    }
}

export default GanttWebix;
