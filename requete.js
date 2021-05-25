function creerRequete(){
    var requete = null;
    try {
        requete = new XMLHttpRequest();
    } catch (essaimicrosoft) {
        try {
            requete = new ActiveXObject("Msxm12.XMLHTTP");
        } catch (autremicrosoft) {
            try {
            requete = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (echec) {
                requete = null;
            }
        }
    }
    
if (requete == null) {
    alert("impossible de créer l'objet requete!");
} else {
    return requete;
 }
}

