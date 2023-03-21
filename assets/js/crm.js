// demo data to load in table
let crmTable1 = [{
    id: 1,
    name: 'Gigi Popescu',
    phone: '0729 229 599',
    email: 'john@example.com',
    status: 'Interesat'
},
{
    id: 2,
    name: 'Gigi Popescu 2',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 3,
    name: 'Gigi Popescu 3',
    phone: '0729 229 599',
    email: 'smith@example.com',
    status: 'Nu stie'
},
{
    id: 4,
    name: 'Gigi Popescu 4',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 5,
    name: 'Gigi Popescu 5',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 6,
    name: 'Gigi Popescu 6',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 7,
    name: 'Gigi Popescu 7',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 8,
    name: 'Gigi Popescu 8',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
}, {
    id: 9,
    name: 'Gigi Popescu',
    phone: '0729 229 599',
    email: 'john@example.com',
    status: 'Interesat'
},
{
    id: 10,
    name: 'Gigi Popescu 2',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 11,
    name: 'Gigi Popescu 3',
    phone: '0729 229 599',
    email: 'smith@example.com',
    status: 'Nu stie'
},
{
    id: 12,
    name: 'Gigi Popescu 4',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 13,
    name: 'Gigi Popescu 5',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 14,
    name: 'Gigi Popescu 6',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 15,
    name: 'Gigi Popescu 7',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
},
{
    id: 16,
    name: 'Gigi Popescu 8',
    phone: '0729 229 599',
    email: 'jane@example.com',
    status: 'Neinteresat'
}
];



d.element('crmTable1')
d.element('crmTable2')


// return status css class for future use
function returnStatus(status) {
    if (status === "Interesat") {
        return "btn-success";
    } else if (status === "Neinteresat") {
        return "btn-danger";
    } else {
        return "btn-warning";
    }
}


function addcrmTable1Row(id, name, phone, email, status) {

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
                        "class": `btn dropdown-toggle ${returnStatus(status)}`,
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
            },
        ]
    }

    d.createElement(jsonData, d.e.crmTable1);
}

// toggle button
function toggleCrmDropdown(tableId) {
    d.element(`cT${tableId}dm${id}`).classList.toggle("show");
}


// change status
function changeStatusCrmDropdown(event, id, statusBtn, tableId) {

    let status = '';
    if (statusBtn === `cT1s${id}`) {
        status = "Interesat";
    } else if (statusBtn === `cT${tableId}d${id}`) {
        status = "Neinteresat";
    } else {
        status = "Nu stie";
    }
    d.element(`cT${tableId}dm${id}`).classList.toggle("show");
    d.element(`cT${tableId}status${id}`).innerHTML = status;
    d.element(`cT${tableId}status${id}`).classList = `btn dropdown-toggle ${returnStatus(status)}`;

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

            addcrmTable1Row(id, name, phone, email, status);
            d.element(`cT${tableId}status${id}`);




            d.createHandler(`cT${tableId}status${id}`, "click", toggleCrmDropdown);




            d.createHandler(`cT${tableId}s${id}`, "click", (event) => changeStatusCrmDropdown(event, id, `cT${tableId}s${id}`, tableId));
            d.createHandler(`cT${tableId}d${id}`, "click", (event) => changeStatusCrmDropdown(event, id, `cT${tableId}d${id}`, tableId));
            d.createHandler(`cT${tableId}w${id}`, "click", (event) => changeStatusCrmDropdown(event, id, `cT${tableId}w${id}`, tableId));

        }
    }, time);





}



// value 0 because table is rendered without delay and second element is id of the table
renderCrmTable(0, 1, crmTable1);

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

// ##########################


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