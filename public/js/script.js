function publicar(){
var pub = window.document.querySelector('textarea#cPublicacao').value
if(pub.value.length == 0){
    window.alert("[ERRO] Verifique os campos e tente novamente.!!")
}else{
    window.document.querySeletor("div.teste").value = `${pub}`

}
}

