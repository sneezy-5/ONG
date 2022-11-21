/*newletter header */


var formheader=document.querySelector('.formheader')
var newsletterheader=document.querySelector('.newsletterheader')


formheader.addEventListener('submit', function(e){
     if(newsletterheader.value===""){
        e.preventDefault()
        newsletterheader.classList.add("is-invalid")
     }else{
        newsletterheader.classList.add("is-valid")
     }
})

/*fin newletter header */


/*newletter center */

var formcenter=document.querySelector('.formcenter')
var newslettercenter=document.querySelector('.newslettercenter')

formcenter.addEventListener('submit', function(e){
    
    if(newslettercenter.value===""){
        e.preventDefault()
        newslettercenter.classList.add("is-invalid")
     }else{
        newslettercenter.classList.add("is-valid")
     }
})

/* Fin newletter center */

/*newletter footer */

var formfooter=document.querySelector('.formfooter')
var newsletterfooter=document.querySelector('.newsletterfooter')

formfooter.addEventListener('submit', function(e){
    
   if(newsletterfooter.value===""){
       e.preventDefault()
       newsletterfooter.classList.add("is-invalid")
    }else{
      newsletterfooter.classList.add("is-valid")
    }
})

/*fin newletter footer */



/*MODAL*/

/*FORM INSCRIPTION */

var forminscrimodal=document.querySelector('.forminscrimodal')
var iptinscript=document.querySelectorAll('.iptinscript')
var chiffre=document.getElementById("chiffre")

forminscrimodal.addEventListener('submit', function(e){

   iptinscript.forEach(ipt => {
      if(ipt.value===""){
         e.preventDefault()
         ipt.classList.add("is-invalid")
         ipt.classList.remove("is-valid")
      }else{
         ipt.classList.remove("is-invalid")
         ipt.classList.add("is-valid")
      }
     });

     if(chiffre.value <10000){
      e.preventDefault()
      chiffre.classList.add("is-invalid")
      chiffre.classList.remove("is-valid")
     }else{
      chiffre.classList.remove("is-invalid")
      chiffre.classList.add("is-valid")
     }
     
})




/*FORM CHOIX DU MONTANT*/

var boutonprix=document.querySelectorAll('.btnprix')
var formprixmodal=document.querySelector('.formprixmodal')
var caseprix=document.querySelector('.caseprix')
var btncoche=document.querySelector('.btncoche')
var special=document.querySelector('.specialchamp')

boutonprix.forEach(btnprix=>{
   var caseprix=document.querySelector('.caseprix')
   btnprix.addEventListener('click',function(){

      if(btnprix.classList.contains('active')){
        caseprix.value=parseInt(btnprix.innerHTML)
       }

   })

})



formprixmodal.addEventListener('submit',function(e){

   if(caseprix.value <10000){
      e.preventDefault()
      caseprix.classList.add("is-invalid")
      caseprix.classList.remove("is-valid")
     }else{
      caseprix.classList.remove("is-invalid")
      caseprix.classList.add("is-valid")
     }

   
    if(btncoche.checked===true){
      if(special.value===""){
         e.preventDefault()
         special.classList.add("is-invalid")
         special.classList.remove("is-valid")
      }else{
         special.classList.remove("is-invalid")
         special.classList.add("is-valid")
      }
    }
   
     
})

/*FIN FORM CHOIX DU MONTANT*/

/*FIN MODAL */