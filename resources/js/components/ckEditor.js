import React, { Component } from "react";
import CKEditor from "@ckeditor/ckeditor5-react";
import DecoupledEditor from "@ckeditor/ckeditor5-build-decoupled-document";
// import DecoupledEditor from '@ckeditor/ckeditor5-editor-decoupled/src/decouplededitor';
import "./style.css";

class Editor extends Component {
    render() {
        return (
            <div>
                <h1 className="title">Using CKEditor 5 build in React</h1>
                <div className="document-editor">
                    <div className="document-editor__toolbar" />
                    <div className="document-editor__editable-container">
                        <div className="document-editor__editable" />
                    </div>
                </div>
                <CKEditor
                    editor={DecoupledEditor}
                    data={localStorage.getItem("template")}
                    onInit={editor => {
                        document
                            .querySelector(".document-editor__editable")
                            .appendChild(editor.ui.view.editable.element);
                        document
                            .querySelector(".document-editor__toolbar")
                            .appendChild(editor.ui.view.toolbar.element);
                    }}
                    onChange={(event, editor) => {
                        const data = editor.getData();
                        localStorage.setItem("template", data);
                    }}
                />
            </div>
        );
    }
}

export default Editor;
