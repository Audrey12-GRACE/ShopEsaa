const form_confirmer= document.getElementById("form-confirmer")

form_confirmer.addEventListener("submit", (e)=>{
    e.preventDefault()
    const formdata= new FormData(form_confirmer)
    fetch("../controlers/confirmer.php",{
        method: "POST",
        body: formdata
    })
        .then(res=>res.text())
        .then(d=>{
            if(d=="success"){
                alert("ok")
            }else{
                alert(d)
            }
        })
})