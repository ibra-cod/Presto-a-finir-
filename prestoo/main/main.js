
  let nom = document.getElementById('nom');
  let prenom = document.getElementById('prenom');
  let object = document.getElementById('objet');
  let message= document.getElementById('message');
  let buttons = document.getElementById('bouton');
 
   var checkInputs = function() {
 
     if (nom.value.length > 1 ){
       console.log("entrez une valeur");
     } else {
       console.log("entrez une valeur");
     }
   }  


   buttons.addEventListener("click", checkInputs, false);