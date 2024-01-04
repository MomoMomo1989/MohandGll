document.addEventListener('DOMContentLoaded', (event) => {
    createNestedTable();
});

function createNestedTable() {
    const mainTable = document.createElement('table');
    mainTable.style.border = '2px solid black';

    for (let i = 0; i < 4; i++) {
        const tr = mainTable.insertRow();
        const td = tr.insertCell();
        td.appendChild(createSubTable(2, 2)); // Créer une sous-table avec 2 lignes et 2 colonnes
    }

    document.getElementById('tableContainer').appendChild(mainTable);
}

function createSubTable(rows, cols) {
    const subTable = document.createElement('table');
    subTable.style.border = '1px solid blue';
    
    for (let i = 0; i < rows; i++) {
        const tr = subTable.insertRow();
        for (let j = 0; j < cols; j++) {
            const td = tr.insertCell();
            td.innerText = `Ligne ${i + 1}, Colonne ${j + 1}`;
            td.style.border = '1px solid red';
        }
    }

    return subTable;
}