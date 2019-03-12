import React, { Component } from "react";
import Webix from "./Webix";
import axios from "axios";

function getUI() {
    return {
        view: "datatable",
        container: "box",
        editable: true,
        editaction: "custom",
        pager: {
            template: `{common.first()} {common.prev()} {common.pages()} 
            {common.next()} {common.last()}`,
            container: "paging_wrapper",
            size: 8,
            group: 5
        },
        scroll: false,
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
                editor: "text",
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
                id: "dateSent",
                header: ["Date Sent", { content: "textFilter" }],
                width: 120,
                sort: "string"
            }
        ],
        select: "cell",
        on: {
            onAfterSelect: function(id) {
                // console.log("this", this);
                // var value = this.getItem(id).ref;
                // var data = $$("data");
                // console.log("value", data);
            }
        }
    };
}

class Example extends Component {
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
                    deadline: item.deadline,
                    dateSent: item.date_sent
                };
            });

            this.setState({ data: getShowData });
        });
    }

    render() {
        return <Webix ui={getUI()} data={this.state.data} />;
    }
}

export default Example;
