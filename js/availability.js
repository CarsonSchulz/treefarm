var nurserySpreadsheetPub = 'https://docs.google.com/spreadsheets/d/1KfFPMsb7eARu9DoQa_rcP6Jx-c2kHzPMogyYvcCI4U8/pubhtml';
function init() {
    Tabletop.init( { key: nurserySpreadsheetPub,
        callback: popTable,
        simpleSheet: true } )
}
function popTable(data, tabletop) {
    availTable = document.getElementById('availability-body');

    for(i = 0; i < data.length; i++){
        plantName = data[i]["Name"];
        plantHeight = data[i]["Height "];
        plantWidth = data[i]["Width"];
        var newRow = availTable.insertRow();
        newRow.innerHTML = '<td>' + plantName + '</td>' + '<td>' + plantHeight + '</td>' + '<td>' + plantWidth + '</td>';
    }
    console.log(data);
}
window.addEventListener('DOMContentLoaded', init)