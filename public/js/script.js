var showMenu=document.getElementById('buttonMenu');
var menu=document.getElementsByClassName('.menu-dashboard');

showMenu.addEventListener("click",function myfunction(){
  menu.style.display='none !important';
    // alert("j ai clique");
});
// if((document.getElementById('buttonMenu'))){
// }

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

if(quantite!=null){
quantite.addEventListener("change",function setMontant(){
   
   var qte=quantite.value;
   
   montant.value=qte * PRICE;

});
}

/*end*/

/*click home*/
var like=document.querySelector('i.fa-thumbs-up');

like.addEventListener("click",function cl (){
   like.style.color='#0167ad';
});


/*end*/