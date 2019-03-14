// example of custom component with Webix UI inside
// this one is a static view, not linked to the React data store

import React, { Component } from "react";
import ReactDOM from "react-dom";

import "webix/webix.js";
import "webix/webix.css";

class Webix extends Component {
    render() {
        return (
            <div>
                {/* <i className="fas fa-trash-alt" /> */}
                <h1 className="title">Webix React Datatable</h1>
                <div
                    id="box"
                    ref="root"
                    style={{
                        width: 1250,
                        height: 470,
                        marginTop: 0,
                        marginRight: "auto"
                    }}
                />
                <div id="paging_wrapper" />
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
            ReactDOM.findDOMNode(this.refs.root)
        );

        this.componentWillUpdate(this.props);
    }
}

export default Webix;
