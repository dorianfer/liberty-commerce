var nbr_produit = 0;
var produittab=[];
function cookie(){
    if(getCookie("check_popup") == 1){
      setInterval('document.getElementById("cookie").style.display = "none"', 0);
    }
}
function test(){
    setCookie("check_popup",1);
    document.getElementById("cookie").style.display = "none";
}
function setCookie(cname,cvalue) {
    var d = new Date();
    d.setTime(d.getTime() + 24*60*60*1000);
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}
function product(id){
  if (getCookie("check_popup") == 1){
    if (localStorage.getItem("produittab")) {
      produittab = JSON.parse(localStorage.produittab);
    }
    boolean = 0;
    produittab.forEach(element => {
      if (element['produitid'] == id) {
        boolean = 1;
      }
    })
    if (boolean == 0) {
      produittab.push({produitid: id, valeur: 1});
    } else {
      produittab.forEach(element => {
        if (element['produitid'] == id) {
          element['valeur'] = Number(element['valeur']) + 1;
        }
      })
    }
    nbr_produit = Number(getCookie("nbr_produit")) + 1;
    setCookie("nbr_produit", nbr_produit);
    localStorage.setItem('produittab', JSON.stringify(produittab));
  } else {
    alert("Vous devez accepter les cookies pour pouvoir mettre des produits dans votre panier.")
  }
}
function cart(id,name,prix){
  
  if (localStorage.getItem("produittab")) {
    produittab = JSON.parse(localStorage.produittab);
  }
  value = 0;
  produittab.forEach(element => {
    if (element['produitid'] == id) {
      value = Number(element['valeur']);
    }
  })
  if(value == 0){
  } else {
    var parent = document.getElementById("tableau");
    var ele = document.createElement('tr');
    parent.append(ele);
    var el1 = document.createElement('td');
    el1.textContent = name;
    ele.append(el1);
    var el2 = document.createElement('td');
    el2.textContent = prix;
    ele.append(el2);
    var el3 = document.createElement('td');
    el3.textContent = value; 
    ele.append(el3);
  }
}
function panier(){
  setInterval(function(){
  var nbr_produit = getCookie("nbr_produit");
    if (nbr_produit != ""){
      document.getElementById("lien_panier").innerHTML = "Cart: " + getCookie("nbr_produit");
    };
  }, 1000);

}