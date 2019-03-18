import React, { Component } from "react";
import Webix from "./Webix";
// import { $$ } from "webix";
import "webix/webix.js";
import "webix/webix.css";

function deleteItem(id) {
    $$("datatable_1").remove(id);
}

function update_item() {
    var sel = $$("datatable_1").getSelectedId();
    if (!sel) return;

    var row = $$("datatable_1").getItem(sel.row);
    $$("datatable_1").updateItem(sel.row);
}

function edit_item(row_id) {
    $$("datatable_1").editStop();
    $$("datatable_1").editRow(row_id);
}

function multipleDelete() {
    var list = $$("datatable_1");
    var sel = list.getSelectedId(true);
    if (!sel) return;
    for (var i = 0; i < sel.length; i++) list.remove(sel[i]);
}

function getUI() {
    return {
        container: "box",
        rows: [
            {
                view: "toolbar",

                id: "mytoolbar",
                elements: [
                    {
                        view: "button",
                        value: "Delete Selected Item",
                        click: multipleDelete,
                        width: 200
                    }
                ]
            },
            {
                view: "datatable",
                navigation: true,
                id: "datatable_1",
                editable: true,
                drag: true,
                // tooltip: true,
                editaction: "dblclick",
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
                        id: "ch",
                        header: "",
                        template: "{common.checkbox()}",
                        width: 40
                    },
                    {
                        id: "ref",
                        header: ["Ref", { content: "serverFilter" }],
                        width: 70,
                        sort: "server"
                    },
                    {
                        id: "title",
                        header: ["Title", { content: "serverFilter" }],
                        editor: "text",
                        width: 250,
                        sort: "server"
                    },
                    {
                        id: "team",
                        header: ["Team", { content: "serverFilter" }],
                        width: 200,
                        editor: "text",
                        sort: "server"
                    },
                    {
                        id: "client",
                        header: ["Client", { content: "serverFilter" }],
                        width: 120,
                        editor: "text",
                        sort: "server"
                    },
                    {
                        id: "pm",
                        header: ["PM", { content: "serverFilter" }],
                        width: 120,
                        editor: "text",
                        sort: "server"
                    },
                    {
                        id: "status",
                        header: ["Status", { content: "serverFilter" }],
                        width: 90,
                        sort: "server",
                        editor: "text"
                    },
                    {
                        id: "deadline",
                        header: ["Deadline", { content: "serverFilter" }],
                        width: 120,
                        editor: "text",
                        sort: "server"
                    },
                    {
                        id: "created_at",
                        header: ["Date Sent", { content: "serverFilter" }],
                        width: 150,
                        sort: "server",
                        editor: "text"
                    },
                    {
                        id: "id",
                        header: "Action",
                        // width: 120,
                        template: `
                    <span>
                        <button class="edit_button" value="edit" >Edit</button>
                        <button  class="delete_button" value="remove" >Delete</button>
                    </span>
                `
                    }
                ],
                save: {
                    insert: "datatable/action",
                    update: "datatable/action",
                    delete: "datatable/action"
                },
                onClick: {
                    delete_button: function(ev, id) {
                        deleteItem(id.row);
                    },
                    edit_button: function(ev, id) {
                        edit_item(id.row);
                    }
                },
                on: {
                    onBeforeLoad: function() {
                        this.showOverlay("Loading...");
                    },
                    onAfterLoad: function() {
                        this.hideOverlay();
                    },
                    onAfterEditStop: function() {
                        update_item();
                    }
                },
                select: "row"
            }
        ]
    };
}

class Example extends Component {
    render() {
        return (
            <div>
                <h1 className="title">Webix React Datatable</h1>
                <Webix ui={getUI()} />
            </div>
        );
    }
}

export default Example;
