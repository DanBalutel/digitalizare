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
                        "class": `btn ${returnStatus(status)}`,
                        "innerHTML": status,
                        "id": `cT1status${id}`,
                        "attrs": {
                            "type": "button"
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

for (i in crmTable1) {
    const id = crmTable1[i].id;
    const name = crmTable1[i].name;
    const phone = crmTable1[i].phone;
    const email = crmTable1[i].email;
    const status = crmTable1[i].status;

    addcrmTable1Row(id, name, phone, email, status);
    d.element(`cT1status${id}`);

    // toggle button
    function toggleCrmDropdown1() {
        d.element(`cT1dm${id}`).classList.toggle("show");
        alert("debug");
    }
    d.createHandler(`cT1status${id}`, "click", toggleCrmDropdown1);

    // change status
    function changeStatusCrmDropdown1(event, id, statusBtn) {

        let status = '';
        if (statusBtn === `cT1s${id}`) {
            status = "Interesat";
        } else if (statusBtn === `cT1d${id}`) {
            status = "Neinteresat";
        } else {
            status = "Nu stie";
        }
        d.element(`cT1dm${id}`).classList.toggle("show");
        d.element(`cT1status${id}`).innerHTML = status;
        d.element(`cT1status${id}`).classList = `btn ${returnStatus(status)}`;

    }
    d.createHandler(`cT1s${id}`, "click", (event) => changeStatusCrmDropdown1(event, id, `cT1s${id}`));
    d.createHandler(`cT1d${id}`, "click", (event) => changeStatusCrmDropdown1(event, id, `cT1d${id}`));
    d.createHandler(`cT1w${id}`, "click", (event) => changeStatusCrmDropdown1(event, id, `cT1w${id}`));

}