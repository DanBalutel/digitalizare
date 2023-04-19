








// // change status
// function changeStatusCrmDropdown(event, id, statusBtn, tableId) {

//     let statList = [];
//     if (tableId === 1) {
//         statList[0] = "Interesat";
//         statList[1] = "Neinteresat";
//         statList[2] = "Nu stie";
//     } else if (tableId === 2) {
//         statList[0] = "Platita";
//         statList[1] = "Renunta";
//         statList[2] = "Urmeaza";
//     }

//     let status = '';
//     if (statusBtn === `cT${tableId}s${id}`) {
//         status = statList[0];
//     } else if (statusBtn === `cT${tableId}d${id}`) {
//         status = statList[1];
//     } else {
//         status = statList[2];
//     }
//     d.element(`cT${tableId}dm${id}`).classList.toggle("show");
//     d.element(`cT${tableId}status${id}`).innerHTML = status;
//     d.element(`cT${tableId}status${id}`).classList = `btn dropdown-toggle ${returnStatus(status, tableId)}`;

//     // update JSON
//     crmTable1[id - 1].status = status;

// }

// // clear table
// function removeCrmTableHandlers(table, tableId) {

//     for (i in table) {
//         const id = table[i].id;

//         d.element(`cT${tableId}status${id}`).removeEventListener('click', toggleCrmDropdown);
//         d.element(`cT${tableId}s${id}`).removeEventListener('click', changeStatusCrmDropdown);
//         d.element(`cT${tableId}d${id}`).removeEventListener('click', changeStatusCrmDropdown);
//         d.element(`cT${tableId}w${id}`).removeEventListener('click', changeStatusCrmDropdown);
//     }
// }






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

    renderCrmTable(3000, 1, crmTable1);
    renderLoadingModal('Tabelul se proceseaza');

    if (file) {
        readExcelFile(file);
    } else {
        alert('Please select an Excel file to process.');
    }
});
