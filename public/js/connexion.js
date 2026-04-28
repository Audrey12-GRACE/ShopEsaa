const control= document.querySelector(".control").innerHTML
function formsubmit(data){
    fetch("../php/connexion.php",{
        method: "POST",
        body: data
    })
        .then(res=>res.json())
        .then(d=>{
            if(d.status=="success"){
                window.location.href="./home.php"
            }else if(d.status=='non'){
                alert(d.mes)
                window.location.href="./confirmer.php"
            }else{
                alert(d.mes)
            }
        })
}

if(control==1){
    const form_inscription= document.getElementById("inscription")
    form_inscription.addEventListener("submit", (e)=>{
    e.preventDefault()
    const formdata= new FormData(form_inscription)
    formsubmit(formdata)
    
})
}else{
    const form_connexion= document.getElementById("connexion")
    form_connexion.addEventListener("submit", (e)=>{
    e.preventDefault()
    const formdata= new FormData(form_connexion)
    formsubmit(formdata)
    
})
}


