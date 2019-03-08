import React, { Component } from "react";
import ReactDOM from "react-dom";
import Webix from "./Webix";
import axios from "axios";

function getUI(select) {
    return {
        view: "datatable",
        // pager: {
        //     container: "paging_here",
        //     size: 10,
        //     group: 10
        // },
        scroll: true,
        width: 900,
        // autoheight: true,
        height: 500,
        select: true,
        columns: [
            { id: "ref", fillspace: 2, sort: "int" },
            {
                id: "title",
                header: ["Title", { content: "textFilter" }],
                fillspace: 4,
                sort: "string",
                filter: "string"
            },
            {
                id: "team",
                header: ["Team", { content: "textFilter" }],
                fillspace: 4,
                sort: "string"
            },
            {
                id: "client",
                header: ["Client", { content: "textFilter" }],
                fillspace: 3,
                sort: "string"
            },
            {
                id: "pm",
                header: ["PM", { content: "textFilter" }],
                fillspace: 2
            },
            {
                id: "status",
                header: ["Status", { content: "textFilter" }],
                fillspace: 2
            },
            {
                id: "deadline",
                header: ["Status", { content: "textFilter" }],
                fillspace: 3
            },
            {
                id: "date Sent",
                header: ["Status", { content: "textFilter" }],
                fillspace: 3
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
        axios.get("http://localhost/x-tracking/public/data.json").then(resp => {
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
