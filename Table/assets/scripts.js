const lign = document.querySelector("#lignTab");
const lign2 = document.querySelector("#listTab");
fetch("fichier.json")
.then(function(rep){
    return rep.json();
})
.then(function(data){
        sortie = ` 
            <tr>
                <td>${data.squadName}</td>
                <td>${data.homeTown}</td>
            <tr/>
        `;
        lign.innerHTML = sortie;
});

fetch("fichier2.json")
.then(function(rep1){
    return rep1.json();
})
.then(function(data1){
    sortie1 = [];
    for (i = 0 ; i < 3; i++ ){
        console.log("cc  " ,i)
        sortie1 += `<a href=""><li id="${i}list">${data1.members[i].name}</li><a/>`;
    }
    lign2.innerHTML = sortie1;   
});

document.querySelector("#")
function remp(ident){
   
    fetch("fichier2.json")
    .then(function(rep2){
        return rep2.json();
    })
    .then(function(data2){
        sortie1 = [];
        for (i = 0 ; i < 3; i++ ){
            console.log("cc  " ,i)
            sortie1 += `<a href=""><li id="${i}list">${data1.members[i].name}</li><a/>`;
        }
        lign2.innerHTML = sortie1;   
    });

}
