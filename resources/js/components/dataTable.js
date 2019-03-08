import React, { Component } from "react";
import ReactDOM from "react-dom";
import Webix from "./Webix";
import axios from "axios";

function getUI() {
    return {
        view: "datatable",
        container: "box",
        pager: {
            template: `{common.first()} {common.prev()} {common.pages()} 
            {common.next()} {common.last()}`,
            container: "paging_wrapper",
            size: 8,
            group: 5
        },
        scroll: true,
        columns: [
            {
                id: "ref",
                header: ["Ref", { content: "textFilter" }],
                width: 70,
                sort: "int"
            },
            {
                id: "title",
                header: ["Title", { content: "textFilter" }],
                width: 250,
                sort: "string"
            },
            {
                id: "team",
                header: ["Team", { content: "textFilter" }],
                width: 200,
                sort: "string"
            },
            {
                id: "client",
                header: ["Client", { content: "textFilter" }],
                width: 120,
                sort: "string"
            },
            {
                id: "pm",
                header: ["PM", { content: "textFilter" }],
                width: 120,
                sort: "string"
            },
            {
                id: "status",
                header: ["Status", { content: "textFilter" }],
                width: 90,
                sort: "string"
            },
            {
                id: "deadline",
                header: ["Deadline", { content: "textFilter" }],
                width: 120,
                sort: "string"
            },
            {
                id: "date-sent",
                header: ["Date Sent", { content: "textFilter" }],
                width: 120,
                sort: "string"
            }
        ]
        // on: {
        //     onAfterSelect: function(id) {
        //         select(id);
        //     }
        // }
    };
}

export default class Example extends Component {
    constructor(props) {
        super(props);
        this.state = {
            data: []
        };
    }

    componentDidMount() {
        axios.get("../data.json").then(resp => {
            const getShowData = resp.data.map(item => {
                return {
                    ref: item.ref,
                    title: item.title,
                    team: item.team,
                    client: item.client,
                    pm: item.pm,
                    status: item.status,
                    deadline: item.deadline
                };
            });

            this.setState({ data: getShowData });
        });
    }

    render() {
        return <Webix ui={getUI()} data={this.state.data} />;
    }
}

if (document.getElementById("app")) {
    ReactDOM.render(<Example />, document.getElementById("app"));
}