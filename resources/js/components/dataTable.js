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
            size: 10,
            group: 5
        },
        datafetch: 10,
        url: "get/datatable",
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
                id: "created_at",
                header: ["Date Sent", { content: "serverFilter" }],
                width: 150,
                sort: "server",
                editor: "text"
            },
            // {
            //     id: "date-sent",
            //     header: ["Date Sent", { content: "textFilter" }],
            //     width: 120,
            //     sort: "string"
            // },
            {
                id: "id",
                header: "Action",
                // width: 120,
                template: "<button >Edit</button><button >Delete</button>"
                // sort: "string"
            }
        ],
        select: "cell"
        // on: {
        //     onAfterSelect: function(id) {
        //         // console.log("this", this);
        //         // var value = this.getItem(id).ref;
        //         // var data = $$("data");
        //         // console.log("value", data);
        //     }
        // }
    };
}

class Example extends Component {
    constructor(props) {
        super(props);
        this.state = {
            data: []
        };
    }

    render() {
        return <Webix ui={getUI()} />;
    }
}

export default Example;
