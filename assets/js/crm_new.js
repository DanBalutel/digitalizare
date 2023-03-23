// -->  demo data to load in table, in the future from DB
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
let jsonLineSchema = {
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
                    "class": `btn dropdown-toggle ${returnStatus(factura, 2)}`,
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
                    "id": `cT2dm${id}`,
                    "children": [
                        {
                            "tag": "div",
                            "class": "dropdown-item btn btn-success",
                            "innerHTML": "Platita",
                            "id": `cT2s${id}`,
                            "attrs": {
                                "onclick": "alert('test text here');"
                            }
                        },
                        {
                            "tag": "div",
                            "class": "dropdown-item btn btn-danger",
                            "innerHTML": "Renunta",
                            "id": `cT2d${id}`
                        },
                        {
                            "tag": "div",
                            "class": "dropdown-item btn btn-warning",
                            "innerHTML": "Urmeaza",
                            "id": `cT2w${id}`
                        }
                    ]
                }
            ]
        }
    ]
}


// <--  End of demo data to load in table



// <--  End of demo data from Db


// class of CRM Table
class crmTable {
    constructor(tableJson, lineSchema) {
        this.tableJson = tableJson;
        this.lineSchema = lineSchema;


    }

    addRow() {

    }
}