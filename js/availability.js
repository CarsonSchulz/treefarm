var nurserySpreadsheetPub = 'https://docs.google.com/spreadsheets/d/1dvGaamP-YcdJwPAw7m0EqpzEcNbzqWL3DPNn83CNMXg/pubhtml';
function init() {
    Tabletop.init( { key: nurserySpreadsheetPub,
        callback: popTable,
        simpleSheet: true } )
}
function popTable(data, tabletop) {
    availTable = document.getElementById('availability-body');

    var spinner = document.getElementById('availabilitySpinner');
    spinner.remove();

    for(i = 0; i < data.length; i++){
        plantName = data[i]["Variety"];
        planeSciName = data[i]["Scientific Name"];
        plantSize = data[i]["Size"];
        plantHeight = data[i]["Height "];
        plantWidth = data[i]["Width"];
        var newRow = availTable.insertRow();
        newRow.innerHTML = '<td>' + plantName + '</td>' + '<td>' + planeSciName + '</td>' + '<td>' + plantSize + '</td>' + '<td>' + plantHeight + '</td>' + '<td>' + plantWidth + '</td>';
    }
}
function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("availTableFilter");
    filter = input.value.toUpperCase();
    table = document.getElementById("availability-body");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        td2 = tr[i].getElementsByTagName("td")[1];
        if (td || td2) {
            txtValue = td.textContent || td.innerText;
            txtValue2 = td2.textContent || td2.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }       
    }
}
window.addEventListener('DOMContentLoaded', init);