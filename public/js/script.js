var showMenu=document.getElementById('buttonMenu');
var menu=document.getElementsByClassName('.menu-dashboard');

showMenu.addEventListener("click",function myfunction(){
   menu.style.display='block !important';

});
if((document.getElementById('buttonMenu'))){
}

//    anime({
//     targets:'.menu-dashboard',
//     translateY: {
//         value: 120,
//         duration: 800
//       },
//     easing: 'easeInSine',
//     delay:100
    
//   });

/*montant input*/
const PRICE=80;

var montant=document.getElementById('montant');
var quantite=document.getElementById('quantite');

quantite.addEventListener("change",function setMontant(){
   
   var qte=quantite.value;
   
   montant.value=qte * PRICE;

});

/*end*/