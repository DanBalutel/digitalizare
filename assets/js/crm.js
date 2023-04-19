// TODO: data that will be received from DataBase 
let crmTable1 = [{
    id: 1,
    name: 'Ana Popescu',
    phone: '0738 391 876',
    email: 'ana.popescu@email.com',
    status: 'Interesat',
    factura: 'Platita'
},
{
    id: 2,
    name: 'Vlad Ionescu',
    phone: '0746 230 981',
    email: 'v.ionescu@email.com',
    status: 'Neinteresat',
    factura: 'Urmeaza'
},
{
    id: 3,
    name: 'Maria Georgescu',
    phone: '0721 829 415',
    email: 'maria.georgescu@email.com',
    status: 'Nu stie',
    factura: 'Platita'
},
{
    id: 4,
    name: 'Alexandru Stoica',
    phone: '0790 518 423',
    email: 'alexandru.stoica@email.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 5,
    name: 'Andreea Mihai',
    phone: '0768 611 213',
    email: 'jandreea.mihai@email.com',
    status: 'Neinteresat',
    factura: 'Platita'
}
];

let crmTable2 = [{
    id: 1,
    name: 'Ana Popescu',
    phone: '0738 391 876',
    email: 'ana.popescu@email.com',
    status: 'Interesat',
    factura: 'Platita'
},
{
    id: 2,
    name: 'Vlad Ionescu',
    phone: '0746 230 981',
    email: 'v.ionescu@email.com',
    status: 'Neinteresat',
    factura: 'Urmeaza'
},
{
    id: 3,
    name: 'Maria Georgescu',
    phone: '0721 829 415',
    email: 'maria.georgescu@email.com',
    status: 'Nu stie',
    factura: 'Platita'
},
{
    id: 4,
    name: 'Alexandru Stoica',
    phone: '0790 518 423',
    email: 'alexandru.stoica@email.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 5,
    name: 'Andreea Mihai',
    phone: '0768 611 213',
    email: 'jandreea.mihai@email.com',
    status: 'Neinteresat',
    factura: 'Platita'
}
];


crmTableTemp = [];

d.element('crmTable1')
d.element('crmTable2')

function addcrmTableRow(tableId, id, name, phone, email, status, factura) {

    // all schema of table line
    const jsonData = {
        "tag": "tr",
        "id": `cT${tableId}id${id}`,
        "class": "odd",
        "attrs": {
            "role": "row"
        },
        "children": [
            {
                "tag": "td",
                "innerHTML": `${id}`
            }, {
                "tag": "td",
                "class": "cardWithNoBorder f-s-15",
                "innerHTML": name
            }, {
                "tag": "td",
                "class": "cardWithNoBorder f-s-15",
                "innerHTML": phone
            }, {
                "tag": "td",
                "class": "cardWithNoBorder f-s-15",
                "innerHTML": email
            }, {
                "tag": "td",
                "class": "position-relative",
                "children": [
                    {
                        "tag": "button",
                        "class": `btn dropdown-toggle ${returnStatus(status, 1)}`,
                        "innerHTML": status,
                        "id": `cT${tableId}status${id}`,
                        "attrs": {
                            "onclick": `d.element('cT${tableId}statusDM${id}').classList.toggle('show');`
                        }
                    },
                    {
                        "tag": "div",
                        "class": "dropdown-menu",
                        "id": `cT${tableId}statusDM${id}`,
                        "children": [
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-success",
                                "innerHTML": "Interesat",
                                "id": `cT${tableId}statusS${id}`,
                                "attrs": {
                                    "onclick": `
                                    d.element('cT${tableId}statusDM${id}').classList.toggle('show');
                                    d.element('cT${tableId}status${id}').innerHTML = d.element('cT${tableId}statusS${id}').innerHTML;
                                    d.element('cT${tableId}status${id}').classList = 'btn dropdown-toggle ${returnStatus("Interesat", 1)}';
                                    `
                                }
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-danger",
                                "innerHTML": "Neinteresat",
                                "id": `cT${tableId}statusD${id}`,
                                "attrs": {
                                    "onclick": `
                                    d.element('cT${tableId}statusDM${id}').classList.toggle('show');
                                    d.element('cT${tableId}status${id}').innerHTML = d.element('cT${tableId}statusD${id}').innerHTML;
                                    d.element('cT${tableId}status${id}').classList = 'btn dropdown-toggle ${returnStatus("Neinteresat", 1)}';
                                    `
                                }
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-warning",
                                "innerHTML": "Nu stie",
                                "id": `cT${tableId}statusW${id}`,
                                "attrs": {
                                    "onclick": `
                                    d.element('cT${tableId}statusDM${id}').classList.toggle('show');
                                    d.element('cT${tableId}status${id}').innerHTML = d.element('cT${tableId}statusW${id}').innerHTML;
                                    d.element('cT${tableId}status${id}').classList = 'btn dropdown-toggle ${returnStatus("Nu stie", 1)}';
                                    `
                                }
                            }
                        ]
                    }
                ]
            }, {
                "tag": "td",
                "class": "position-relative",
                "children": [
                    {
                        "tag": "button",
                        "class": `btn dropdown-toggle ${returnStatus(factura, 2)}`,
                        "innerHTML": factura,
                        "id": `cT${tableId}factura${id}`,
                        "attrs": {
                            "onclick": `d.element('cT${tableId}facturaDM${id}').classList.toggle('show');`
                        }
                    },
                    {
                        "tag": "div",
                        "class": "dropdown-menu",
                        "id": `cT${tableId}facturaDM${id}`,
                        "children": [
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-success",
                                "innerHTML": "Platita",
                                "id": `cT${tableId}facturaS${id}`,
                                "attrs": {
                                    "onclick": `
                                    d.element('cT${tableId}facturaDM${id}').classList.toggle('show');
                                    d.element('cT${tableId}factura${id}').innerHTML = d.element('cT${tableId}facturaS${id}').innerHTML;
                                    d.element('cT${tableId}factura${id}').classList = 'btn dropdown-toggle ${returnStatus("Platita", 2)}';
                                    `
                                }
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-danger",
                                "innerHTML": "Renunta",
                                "id": `cT${tableId}facturaD${id}`,
                                "attrs": {
                                    "onclick": `
                                    d.element('cT${tableId}facturaDM${id}').classList.toggle('show');
                                    d.element('cT${tableId}factura${id}').innerHTML = d.element('cT${tableId}facturaD${id}').innerHTML;
                                    d.element('cT${tableId}factura${id}').classList = 'btn dropdown-toggle ${returnStatus("Renunta", 2)}';
                                    `
                                }
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-warning",
                                "innerHTML": "Urmeaza",
                                "id": `cT${tableId}facturaW${id}`,
                                "attrs": {
                                    "onclick": `
                                    d.element('cT${tableId}facturaDM${id}').classList.toggle('show');
                                    d.element('cT${tableId}factura${id}').innerHTML = d.element('cT${tableId}facturaW${id}').innerHTML;
                                    d.element('cT${tableId}factura${id}').classList = 'btn dropdown-toggle ${returnStatus("Urmeaza", 2)}';
                                    `
                                }
                            }
                        ]
                    }
                ]
            }
        ]
    }

    d.createElement(jsonData, d.element(`crmTable${tableId}`));
}

// return status css class for future use
function returnStatus(status, tableId) {

    let statList = [];
    if (tableId === 1) {
        statList[0] = "Interesat";
        statList[1] = "Neinteresat";
        statList[2] = "Nu stie";
    } else if (tableId === 2) {
        statList[0] = "Platita";
        statList[1] = "Renunta";
        statList[2] = "Urmeaza";
    }

    if (status === statList[0]) {
        return "btn-success";
    } else if (status === statList[1]) {
        return "btn-danger";
    } else {
        return "btn-warning";
    }
}

function renderCrmTable(time, tableId, table) {


    d.element(`crmTable${tableId}`).innerHTML = '';

    // add rows
    setTimeout(() => {
        for (i in table) {
            const id = table[i].id;
            const name = table[i].name;
            const phone = table[i].phone;
            const email = table[i].email;
            const status = table[i].status;
            const factura = table[i].factura;

            addcrmTableRow(tableId, id, name, phone, email, status, factura);

        }
    }, time);





}

// value 0 because table is rendered without delay and second element is id of the table
renderCrmTable(0, 1, crmTable1);
renderCrmTable(0, 2, crmTable2);




// #######################
// excel data
// Convert JSON to Excel
function jsonToExcel(jsonData) {
    const worksheet = XLSX.utils.json_to_sheet(jsonData);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');
    return workbook;
}

// Download Excel file
function downloadExcelFile(workbook, filename) {
    const wbout = XLSX.write(workbook, { bookType: 'xlsx', type: 'binary' });
    const blob = new Blob([s2ab(wbout)], { type: 'application/octet-stream' });
    const url = URL.createObjectURL(blob);

    const a = document.createElement('a');
    a.href = url;
    a.download = filename;
    document.body.appendChild(a);
    a.click();
    setTimeout(() => {
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }, 0);
}

// Helper function to convert string to ArrayBuffer
function s2ab(s) {
    const buf = new ArrayBuffer(s.length);
    const view = new Uint8Array(buf);
    for (let i = 0; i < s.length; i++) {
        view[i] = s.charCodeAt(i) & 0xFF;
    }
    return buf;
}

// upload in excel
function excelToJson(workbook) {
    const sheetName = workbook.SheetNames[0];
    const worksheet = workbook.Sheets[sheetName];
    const jsonData = XLSX.utils.sheet_to_json(worksheet);
    return jsonData;
}

// Read Excel file
function readExcelFile(file, tableId) {
    const reader = new FileReader();
    reader.onload = (event) => {
        const data = event.target.result;
        const workbook = XLSX.read(data, { type: 'binary' });
        crmTableTemp = excelToJson(workbook);
        renderCrmTable(3000, tableId, crmTableTemp);

        
    };
    reader.readAsBinaryString(file);
}

// Set up button click event
document.getElementById('downloadExcel1').addEventListener('click', () => {
    const workbook = jsonToExcel(crmTable1);
    downloadExcelFile(workbook, 'example.xlsx');
});
document.getElementById('downloadExcel2').addEventListener('click', () => {
    const workbook = jsonToExcel(crmTable1);
    downloadExcelFile(workbook, 'example.xlsx');
});

// Set up button click event for table 1
document.getElementById('processExcel1').addEventListener('click', () => {
    const inputElement = document.getElementById('uploadExcel1');
    const file = inputElement.files[0];

    renderLoadingModal('Tabelul se proceseaza');

    if (file) {
        readExcelFile(file, 1);
    } else {
        alert('Please select an Excel file to process.');
    }
});
document.getElementById('processExcel2').addEventListener('click', () => {
    const inputElement = document.getElementById('uploadExcel2');
    const file = inputElement.files[0];

    renderLoadingModal('Tabelul se proceseaza');

    if (file) {
        readExcelFile(file, 2);
    } else {
        alert('Please select an Excel file to process.');
    }
});
