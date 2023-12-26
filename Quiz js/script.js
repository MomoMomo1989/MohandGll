const formulaire =document.querySelector(".formquz ");
console.log(formulaire);
let resultatTab=[];
const solut = ["Reponses 01","Reponses 03","Reponses 01","Reponses 02","Reponses 01","Reponses 03"]
let testrepons = []; 
const emo =['✅','⭐','👀','😭','👎'];
formulaire.btn.addEventListener('click', (e)=>{
    e.preventDefault();
    testrepons = [];
    for (i=1; i<7; i++){
        for (j=1; j<4; j++){
        if (document.getElementById(`R${j}Q${i}`).checked){
            resultatTab.push(document.getElementById(`R${j}Q${i}`).value)
        }
        }   
    }
    verif(resultatTab)
    resultatTab=[];
})
function verif(res){
    for (i=0; i<6; i++){
        if (res[i] === solut[i]){
            testrepons[i] = true;
            document.getElementById(`0${i+1}`).style = "background-color: rgb(137, 196, 147)"  
        }
        else{
            testrepons[i] = false; 
            document.getElementById(`0${i+1}`).style = "background-color: rgb(128, 88, 87)"
        }
    }
    affichre(testrepons)
}
function affichre(resultatdutest){
   const nbrft = resultatdutest.filter(x => x !== true).length;
   console.log(nbrft)
   switch (nbrft) {
    case 0:
        document.getElementById("cmt").innerText = "✅ BRAVO AZUL FELLAK ✅";
        document.getElementById("repnse").innerText = ""
        document.getElementById("Nt").innerText = "6/6"
    break;    
    case 1:
        document.getElementById("cmt").innerText = "⭐tres bien⭐";
         document.getElementById("repnse").innerText = "vous y etes presque"
         document.getElementById("Nt").innerText = "5/6"
    break;     
    case 2:
        document.getElementById("cmt").innerText = "👀 bien 👀 ";
        document.getElementById("repnse").innerText = ""
        document.getElementById("Nt").innerText = "4/6"
        break;
        case 3:
        document.getElementById("cmt").innerText = "😭 ressayer 😭";
        document.getElementById("repnse").innerText = ""
        document.getElementById("Nt").innerText = "3/6"
        break;
        case 4:
        document.getElementById("cmt").innerText = "👎faite un effort 👎";
        document.getElementById("repnse").innerText = ""
        document.getElementById("Nt").innerText = "2/6"
        break;
        case 5:
        document.getElementById("cmt").innerText = "👎faible 👎";
        document.getElementById("repnse").innerText = ""
        document.getElementById("Nt").innerText = "1/6"
        break;
        case 6:
            document.getElementById("cmt").innerText = "👎tres faible 👎";
            document.getElementById("repnse").innerText = ""
            document.getElementById("Nt").innerText = "0/6"
        break;
        default:
            alert("ce cas n'est pas pris en charge");      
    }    
    }  
