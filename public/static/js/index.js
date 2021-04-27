import DocumentHandler from './document/documents.js'

document.addEventListener('DOMContentLoaded', () => {

    const formDoc = document.getElementById('btn-form-doc');
    // const fileRead = document.getElementById('idFile');
    const doc = new DocumentHandler();
    formDoc.addEventListener('click', event => {
        event.preventDefault();
        event.stopPropagation();
        doc.readFile();
    });

});

