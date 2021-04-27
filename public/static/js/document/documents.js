export default class DocumentHandler {

    arrayIds = [];
    stringValue = '';
    stringRender = '';
    regex = /\{\w+\}/g;
    index = 0;
    valuesMap = new Map();
    modal = null;
    readFile() {
        const fileRead = document.getElementById('idFile');
        const outPutFile = document.getElementById('outputFile');
        const reader = new FileReader();
        if (fileRead.files.length)
            reader.readAsBinaryString(fileRead.files[0]);
        else
            outPutFile.classList.add('d-none');

        reader.onload = (event) => {
            outPutFile.innerHTML = event.target.result;
            outPutFile.classList.remove('d-none');
            this.stringValue = event.target.result.toString();
            this.arrayIds = this.stringValue.match(this.regex);
            console.log(this.arrayIds);
            this.openModal();
        };

    }

    openModal() {
        const modalId = document.getElementById('idModal');
        this.modal = new bootstrap.Modal(modalId, { keyboard: true });
        this.modal.show();
        this.renderInput();
        this.addValue();


    }

    renderInput() {
        const value = this.arrayIds[this.index];
        const modalBody = document.getElementById('idModalBody');
        let name = value.replace('\{', '');
        name = name.replace('\}', '');
        modalBody.innerHTML = `
        <div class="mb-3">
            <label for="${value}" class="form-label">${name}</label>
            <input type="text" class="form-control" id="${value}" placeholder="Ingrese el valor">
        </div>
        `;

    }

    addValue() {
        const btnAdd = document.getElementById('btn-add');

        btnAdd.addEventListener('click', (event) => {
            const id = this.arrayIds[this.index];
            const idValue = document.getElementById(id);
            this.valuesMap.set(id, idValue.value);
            this.index++;

            if (this.index === this.arrayIds.length) {
                this.modal.hide();
                this.renderText();
                console.log(this.valuesMap);
            } else
                this.renderInput();
        });
    }

    renderText() {
        const textRender = document.getElementById('doc_caso');
        this.stringRender = this.stringValue;
        this.valuesMap.forEach((value, key) => {
            this.stringRender = this.stringRender.replace(key, value);
        });
        textRender.classList.remove('d-none');
        textRender.innerHTML = this.stringRender;
    }


}