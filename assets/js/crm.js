// demo data to load in table
let crmTable1 = [{
    id: 1,
    name: 'Gigi Popescu',
    phone: '0729 229 599',
    email: 'john@example.com',
    status: 'Interesat',
    factura: 'Platita'
},
{
    id: 2,
    name: 'Gigi Popescu 2',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Urmeaza'
},
{
    id: 3,
    name: 'Gigi Popescu 3',
    phone: '0729 229 599',
    email: 'smith@example.com',
    status: 'Nu stie',
    factura: 'Platita'
},
{
    id: 4,
    name: 'Gigi Popescu 4',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 5,
    name: 'Gigi Popescu 5',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Platita'
},
{
    id: 6,
    name: 'Gigi Popescu 6',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Urmeaza'
},
{
    id: 7,
    name: 'Gigi Popescu 7',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 8,
    name: 'Gigi Popescu 8',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
}, {
    id: 9,
    name: 'Gigi Popescu',
    phone: '0729 229 599',
    email: 'john@example.com',
    status: 'Interesat',
    factura: 'Urmeaza'
},
{
    id: 10,
    name: 'Gigi Popescu 2',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 11,
    name: 'Gigi Popescu 3',
    phone: '0729 229 599',
    email: 'smith@example.com',
    status: 'Nu stie',
    factura: 'Urmeaza'
},
{
    id: 12,
    name: 'Gigi Popescu 4',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 13,
    name: 'Gigi Popescu 5',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 14,
    name: 'Gigi Popescu 6',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 15,
    name: 'Gigi Popescu 7',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
},
{
    id: 16,
    name: 'Gigi Popescu 8',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat',
    factura: 'Renunta'
}
];
// let crmTable2 = [{
//     id: 1,
//     name: 'Gigi Popescu',
//     phone: '0729 229 599',
//     email: 'john@example.com',
//     status: 'Platita'
// },
// {
//     id: 2,
//     name: 'Gigi Popescu 2',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 3,
//     name: 'Gigi Popescu 3',
//     phone: '0729 229 599',
//     email: 'smith@example.com',
//     status: 'Urmeaza'
// },
// {
//     id: 4,
//     name: 'Gigi Popescu 4',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 5,
//     name: 'Gigi Popescu 5',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 6,
//     name: 'Gigi Popescu 6',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 7,
//     name: 'Gigi Popescu 7',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 8,
//     name: 'Gigi Popescu 8',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// }, {
//     id: 9,
//     name: 'Gigi Popescu',
//     phone: '0729 229 599',
//     email: 'john@example.com',
//     status: 'Platita'
// },
// {
//     id: 10,
//     name: 'Gigi Popescu 2',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 11,
//     name: 'Gigi Popescu 3',
//     phone: '0729 229 599',
//     email: 'smith@example.com',
//     status: 'Urmeaza'
// },
// {
//     id: 12,
//     name: 'Gigi Popescu 4',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 13,
//     name: 'Gigi Popescu 5',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 14,
//     name: 'Gigi Popescu 6',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 15,
//     name: 'Gigi Popescu 7',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// },
// {
//     id: 16,
//     name: 'Gigi Popescu 8',
//     phone: '0729 229 599',
//     email: 'jane@example.com',
//     status: 'Renunta'
// }
// ];




d.element('crmTable1')
// d.element('crmTable2')


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


function addcrmTable1Row(id, name, phone, email, status, factura) {

    // all schema of table line
    const jsonData = {
        "tag": "tr",
        "id": `cT1id${id}`,
        "class": "odd",
        "attrs": {
            "role": "row"
        },
        "children": [
            {
                "tag": "td",
                "innerHTML": `#${id}`
            }, {
                "tag": "td",
                "innerHTML": name
            }, {
                "tag": "td",
                "innerHTML": phone
            }, {
                "tag": "td",
                "innerHTML": email
            }, {
                "tag": "td",
                "class": "position-relative",
                "children": [
                    {
                        "tag": "button",
                        "class": `btn dropdown-toggle ${returnStatus(status, 1)}`,
                        "innerHTML": status,
                        "id": `cT1status${id}`,
                        "attrs": {
                            "type": "button",
                            "data-bs-toggle": "dropdown",
                            "aria-expanded": "false"
                        }
                    },
                    {
                        "tag": "div",
                        "class": "dropdown-menu",
                        "id": `cT1dm${id}`,
                        "children": [
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-success",
                                "innerHTML": "Interesat",
                                "id": `cT1s${id}`
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-danger",
                                "innerHTML": "Neinteresat",
                                "id": `cT1d${id}`
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-warning",
                                "innerHTML": "Nu stie",
                                "id": `cT1w${id}`
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
                        "class": `btn dropdown-toggle ${returnStatus(factura, 1)}`,
                        "innerHTML": factura,
                        "id": `cT1factura${id}`,
                        "attrs": {
                            "type": "button",
                            "data-bs-toggle": "dropdown",
                            "aria-expanded": "false"
                        }
                    },
                    {
                        "tag": "div",
                        "class": "dropdown-menu",
                        "id": `cT1dm${id}`,
                        "children": [
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-success",
                                "innerHTML": "Platita",
                                "id": `cT1s${id}`
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-danger",
                                "innerHTML": "Renunta",
                                "id": `cT1d${id}`
                            },
                            {
                                "tag": "div",
                                "class": "dropdown-item btn btn-warning",
                                "innerHTML": "Urmeaza",
                                "id": `cT1w${id}`
                            }
                        ]
                    }
                ]
            }
        ]
    }

    d.createElement(jsonData, d.e.crmTable1);
}

// toggle button
function toggleCrmDropdown(event, tableId, id) {
    d.element(`cT${tableId}dm${id}`).classList.toggle("show");
}


// change status
function changeStatusCrmDropdown(event, id, statusBtn, tableId) {

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

    let status = '';
    if (statusBtn === `cT${tableId}s${id}`) {
        status = statList[0];
    } else if (statusBtn === `cT${tableId}d${id}`) {
        status = statList[1];
    } else {
        status = statList[2];
    }
    d.element(`cT${tableId}dm${id}`).classList.toggle("show");
    d.element(`cT${tableId}status${id}`).innerHTML = status;
    d.element(`cT${tableId}status${id}`).classList = `btn dropdown-toggle ${returnStatus(status, tableId)}`;

    // update JSON
    crmTable1[id - 1].status = status;

}

// clear table
function removeCrmTableHandlers(table, tableId) {

    for (i in table) {
        const id = table[i].id;

        d.element(`cT${tableId}status${id}`).removeEventListener('click', toggleCrmDropdown);
        d.element(`cT${tableId}s${id}`).removeEventListener('click', changeStatusCrmDropdown);
        d.element(`cT${tableId}d${id}`).removeEventListener('click', changeStatusCrmDropdown);
        d.element(`cT${tableId}w${id}`).removeEventListener('click', changeStatusCrmDropdown);
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

            if (tableId === 1) {
                addcrmTable1Row(id, name, phone, email, status, factura);
            } else if (tableId === 2) {
                addcrmTable2Row(id, name, phone, email, status);
            }
            d.element(`cT${tableId}status${id}`);




            d.createHandler(`cT${tableId}status${id}`, "click", (event) => toggleCrmDropdown(event, tableId, id));




            d.createHandler(`cT${tableId}s${id}`, "click", (event) => changeStatusCrmDropdown(event, id, `cT${tableId}s${id}`, tableId));
            d.createHandler(`cT${tableId}d${id}`, "click", (event) => changeStatusCrmDropdown(event, id, `cT${tableId}d${id}`, tableId));
            d.createHandler(`cT${tableId}w${id}`, "click", (event) => changeStatusCrmDropdown(event, id, `cT${tableId}w${id}`, tableId));

        }
    }, time);





}



// value 0 because table is rendered without delay and second element is id of the table
renderCrmTable(0, 1, crmTable1);
// renderCrmTable(0, 2, crmTable2);

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

// Set up button click event
document.getElementById('downloadExcel1').addEventListener('click', () => {
    const workbook = jsonToExcel(crmTable1);
    downloadExcelFile(workbook, 'example.xlsx');
});

// upload in excel
function excelToJson(workbook) {
    const sheetName = workbook.SheetNames[0];
    const worksheet = workbook.Sheets[sheetName];
    const jsonData = XLSX.utils.sheet_to_json(worksheet);
    return jsonData;
}

// Read Excel file
function readExcelFile(file) {
    const reader = new FileReader();
    reader.onload = (event) => {
        const data = event.target.result;
        const workbook = XLSX.read(data, { type: 'binary' });
        crmTable1 = excelToJson(workbook);
    };
    reader.readAsBinaryString(file);
}

// Set up button click event for table 1
document.getElementById('processExcel1').addEventListener('click', () => {
    const inputElement = document.getElementById('uploadExcel1');
    const file = inputElement.files[0];

    removeCrmTableHandlers(crmTable1, 1);
    renderCrmTable(3000);
    renderLoadingModal('Tabelul se proceseaza');

    if (file) {
        readExcelFile(file);
    } else {
        alert('Please select an Excel file to process.');
    }
});

// // ##########################

// function addcrmTable2Row(id, name, phone, email, status) {

//     // all schema of table line
//     const jsonData = {
//         "tag": "tr",
//         "id": `cT2id${id}`,
//         "class": "odd",
//         "attrs": {
//             "role": "row"
//         },
//         "children": [
//             {
//                 "tag": "td",
//                 "innerHTML": `#${id}`
//             }, {
//                 "tag": "td",
//                 "innerHTML": name
//             }, {
//                 "tag": "td",
//                 "innerHTML": phone
//             }, {
//                 "tag": "td",
//                 "innerHTML": email
//             }, {
//                 "tag": "td",
//                 "class": "position-relative",
//                 "children": [
//                     {
//                         "tag": "button",
//                         "class": `btn dropdown-toggle ${returnStatus(status, 2)}`,
//                         "innerHTML": status,
//                         "id": `cT2status${id}`,
//                         "attrs": {
//                             "type": "button",
//                             "data-bs-toggle": "dropdown",
//                             "aria-expanded": "false"
//                         }
//                     },
//                     {
//                         "tag": "div",
//                         "class": "dropdown-menu",
//                         "id": `cT2dm${id}`,
//                         "children": [
//                             {
//                                 "tag": "div",
//                                 "class": "dropdown-item btn btn-success",
//                                 "innerHTML": "Platita",
//                                 "id": `cT2s${id}`
//                             },
//                             {
//                                 "tag": "div",
//                                 "class": "dropdown-item btn btn-danger",
//                                 "innerHTML": "Renunta",
//                                 "id": `cT2d${id}`
//                             },
//                             {
//                                 "tag": "div",
//                                 "class": "dropdown-item btn btn-warning",
//                                 "innerHTML": "Urmeaza",
//                                 "id": `cT2w${id}`
//                             }
//                         ]
//                     }
//                 ]
//             },
//         ]
//     }

//     d.createElement(jsonData, d.e.crmTable2);
// }

// // Set up button click event for table 2
// document.getElementById('processExcel2').addEventListener('click', () => {
//     const inputElement = document.getElementById('uploadExcel2');
//     const file = inputElement.files[0];

//     removeCrmTableHandlers(crmTable2, 2);
//     renderCrmTable(3000);
//     renderLoadingModal('Tabelul se proceseaza');

//     if (file) {
//         readExcelFile(file);
//     } else {
//         alert('Please select an Excel file to process.');
//     }
// });

// // Set up button click event for table 2
// document.getElementById('downloadExcel2').addEventListener('click', () => {
//     const workbook = jsonToExcel(crmTable2);
//     downloadExcelFile(workbook, 'example.xlsx');
// });