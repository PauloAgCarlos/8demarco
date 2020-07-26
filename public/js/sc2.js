function media(){
    /* Língua Portuguesa*/
    var MacLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua2MAC').value)
    var CppLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua2CPP').value)
    var MediaL = (MacLP + CppLP)/2
    window.document.querySelector('input#cNotaLingua2CT').value = MediaL
/* MATEMÁTICA*/
var MacM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica2MAC').value)
var CppM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica2CPP').value)
var MediaM = (MacM + CppM)/2
window.document.querySelector('input#cNotaMatematica2CT').value = MediaM
/* Estudo do Meio*/
var MacC = Number.parseFloat(window.document.querySelector('input#cNotaMeio2MAC').value)
var CppC = Number.parseFloat(window.document.querySelector('input#cNotaMeio2CPP').value)
var MediaC = (MacC + CppC)/2
window.document.querySelector('input#cNotaMeio2CT').value = MediaC

/* Educação Manual e plástica */
var MacEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP2MAC').value)
var CppEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP2CPP').value)
var MediaEMP = (MacEMP + CppEMP)/2
window.document.querySelector('input#cNotaEMP2CT').value = MediaEMP
/* Educação Musical */
var MacEM = Number.parseFloat(window.document.querySelector('input#cNotaMusical2MAC').value)
var CppEM = Number.parseFloat(window.document.querySelector('input#cNotaMusical2CPP').value)
var MediaEM = (MacEM + CppEM)/2
window.document.querySelector('input#cNotaMusical2CT').value = MediaEM
/* Educação Física */
var MacEF = Number.parseFloat(window.document.querySelector('input#cNotaFisica2MAC').value)
var CppEF = Number.parseFloat(window.document.querySelector('input#cNotaFisica2CPP').value)
var MediaEF = (MacEF + CppEF)/2
window.document.querySelector('input#cNotaFisica2CT').value = MediaEF
cNotaEFisica6MAC

}
