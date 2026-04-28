function formsubmit(data){
    fetch("../controlers/login.php",{
        method: "POST",
        body: data
    })
        .then(res=>res.json())
        .then(d=>{
            if(d.status=="success"){
                window.location.href="./home.php"
            }else if(d.status=='non_confirmer'){
                window.location.href="./confirmer.php"
            }else{
                alert(d.mes)
            }
        })
}

const form_connexion= document.getElementById("form-login")
    form_connexion.addEventListener("submit", (e)=>{
    e.preventDefault()
    const formdata= new FormData(form_connexion)
    formsubmit(formdata)
    
})