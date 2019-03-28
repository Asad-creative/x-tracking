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
                <CKEditor
                    editor={DecoupledEditor}
                    data={localStorage.getItem("template")}
                    onInit={editor => {
                        editor.ui
                            .getEditableElement()
                            .parentElement.insertBefore(
                                editor.ui.view.toolbar.element,
                                editor.ui.getEditableElement()
                            );
                        // You can store the "editor" and use when it is needed.
                        console.log("Editor is ready to use!", editor);
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
