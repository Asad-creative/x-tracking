<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 – Document editor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/decoupled-document/ckeditor.js"></script>
    <style>
        .document-editor {
            border: 1px solid var(--ck-color-base-border);
            border-radius: var(--ck-border-radius);

            /* Set vertical boundaries for the document editor. */
            max-height: 700px;

            /* This element is a flex container for easier rendering. */
            display: flex;
            flex-flow: column nowrap;
        }
        .document-editor__toolbar {
            /* Make sure the toolbar container is always above the editable. */
            z-index: 1;

            /* Create the illusion of the toolbar floating over the editable. */
            box-shadow: 0 0 5px hsla( 0,0%,0%,.2 );

            /* Use the CKEditor CSS variables to keep the UI consistent. */
            border-bottom: 1px solid var(--ck-color-toolbar-border);
        }

        /* Adjust the look of the toolbar inside the container. */
        .document-editor__toolbar .ck-toolbar {
            border: 0;
            border-radius: 0;
        }

        /* Make the editable container look like the inside of a native word processor application. */
        .document-editor__editable-container {
            padding: calc( 2 * var(--ck-spacing-large) );
            background: var(--ck-color-base-foreground);

            /* Make it possible to scroll the "page" of the edited content. */
            overflow-y: scroll;
        }

        .document-editor__editable-container .ck-editor__editable {
            /* Set the dimensions of the "page". */
            width: 15.8cm;
            min-height: 21cm;

            /* Keep the "page" off the boundaries of the container. */
            padding: 1cm 2cm 2cm;

            border: 1px hsl( 0,0%,82.7% ) solid;
            border-radius: var(--ck-border-radius);
            background: white;

            /* The "page" should cast a slight shadow (3D illusion). */
            box-shadow: 0 0 5px hsla( 0,0%,0%,.1 );

            /* Center the "page". */
            margin: 0 auto;
        }
        /* Set the default font for the "page" of the content. */
        .document-editor .ck-content,
        .document-editor .ck-heading-dropdown .ck-list .ck-button__label {
            font: 16px/1.6 "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        /* Adjust the headings dropdown to host some larger heading styles. */
        .document-editor .ck-heading-dropdown .ck-list .ck-button__label {
            line-height: calc( 1.7 * var(--ck-line-height-base) * var(--ck-font-size-base) );
            min-width: 6em;
        }

        /* Scale down all heading previews because they are way too big to be presented in the UI.
        Preserve the relative scale, though. */
        .document-editor .ck-heading-dropdown .ck-list .ck-button:not(.ck-heading_paragraph) .ck-button__label {
            transform: scale(0.8);
            transform-origin: left;
        }

        /* Set the styles for "Heading 1". */
        .document-editor .ck-content h2,
        .document-editor .ck-heading-dropdown .ck-heading_heading1 .ck-button__label {
            font-size: 2.18em;
            font-weight: normal;
        }

        .document-editor .ck-content h2 {
            line-height: 1.37em;
            padding-top: .342em;
            margin-bottom: .142em;
        }

        /* Set the styles for "Heading 2". */
        .document-editor .ck-content h3,
        .document-editor .ck-heading-dropdown .ck-heading_heading2 .ck-button__label {
            font-size: 1.75em;
            font-weight: normal;
            color: hsl( 203, 100%, 50% );
        }

        .document-editor .ck-heading-dropdown .ck-heading_heading2.ck-on .ck-button__label {
            color: var(--ck-color-list-button-on-text);
        }

        /* Set the styles for "Heading 2". */
        .document-editor .ck-content h3 {
            line-height: 1.86em;
            padding-top: .171em;
            margin-bottom: .357em;
        }

        /* Set the styles for "Heading 3". */
        .document-editor .ck-content h4,
        .document-editor .ck-heading-dropdown .ck-heading_heading3 .ck-button__label {
            font-size: 1.31em;
            font-weight: bold;
        }

        .document-editor .ck-content h4 {
            line-height: 1.24em;
            padding-top: .286em;
            margin-bottom: .952em;
        }

        /* Set the styles for "Paragraph". */
        .document-editor .ck-content p {
            font-size: 1em;
            line-height: 1.63em;
            padding-top: .5em;
            margin-bottom: 1.13em;
        }

        /* Make the block quoted text serif with some additional spacing. */
        .document-editor .ck-content blockquote {
            font-family: Georgia, serif;
            margin-left: calc( 2 * var(--ck-spacing-large) );
            margin-right: calc( 2 * var(--ck-spacing-large) );
        }
    </style>
</head>
<body>
    <h1>Document editor</h1>

    <div class="document-editor">
        <div class="document-editor__toolbar"></div>
        <div class="document-editor__editable-container">
            <div class="document-editor__editable">
                <p>The initial editor data.</p>
            </div>
        </div>
    </div>

    <script>

        DecoupledEditor
            .create( document.querySelector( '.document-editor__editable' ), {
                cloudServices: {
                }
            } )
            .then( editor => {
                const toolbarContainer = document.querySelector( '.document-editor__toolbar' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );

                window.editor = editor;
            } )
            .catch( err => {
                console.error( err );
            } );
    </script>
</body>
</html>