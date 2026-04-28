function formsubmit(data){
    fetch("../controlers/register.php",{
        method: "POST",
        body: data
    })
        .then(res=>res.json())
        .then(d=>{
            if(d.status=='non_confirmer'){
                alert(d.mes)
                window.location.href="./confirmer.php"
            }else{
                alert(d.mes)
            }
        })
}

const form_inscription= document.getElementById("form-register")
    form_inscription.addEventListener("submit", (e)=>{
    e.preventDefault()
    const formdata= new FormData(form_inscription)
    formsubmit(formdata)
    })