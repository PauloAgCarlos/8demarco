function media(){
    /* Língua Portuguesa*/
    var MacLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua6MAC').value)
    var CppLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua6CPP').value)
    var MediaL = (MacLP + CppLP)/2
    window.document.querySelector('input#cNotaLingua6CT').value = MediaL
/* MATEMÁTICA*/
var MacM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica6MAC').value)
var CppM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica6CPP').value)
var MediaM = (MacM + CppM)/2
window.document.querySelector('input#cNotaMatematica6CT').value = MediaM
/* Ciências da Natureza*/
var MacC = Number.parseFloat(window.document.querySelector('input#cNotaCiencia6MAC').value)
var CppC = Number.parseFloat(window.document.querySelector('input#cNotaCiencia6CPP').value)
var MediaC = (MacC + CppC)/2
window.document.querySelector('input#cNotaCiencia6CT').value = MediaC
/* História*/
var MacH = Number.parseFloat(window.document.querySelector('input#cNotaHistoria6MAC').value)
var CppH = Number.parseFloat(window.document.querySelector('input#cNotaHistoria6CPP').value)
var MediaH = (MacH + CppH)/2
window.document.querySelector('input#cNotaHistoria6CT').value = MediaH
/* Geografia */
var MacG = Number.parseFloat(window.document.querySelector('input#cNotaGeografia6MAC').value)
var CppG = Number.parseFloat(window.document.querySelector('input#cNotaGeografia6CPP').value)
var MediaG = (MacG + CppG)/2
window.document.querySelector('input#cNotaGeografia6CT').value = MediaG
/* Educação Moral e Cívica */
var MacEMC = Number.parseFloat(window.document.querySelector('input#cNotaEMC6MAC').value)
var CppEMC = Number.parseFloat(window.document.querySelector('input#cNotaEMC6CPP').value)
var MediaEMC = (MacEMC + CppEMC)/2
window.document.querySelector('input#cNotaEMC6CT').value = MediaEMC
/* Educação Manual e plástica */
var MacEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP6MAC').value)
var CppEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP6CPP').value)
var MediaEMP = (MacEMP + CppEMP)/2
window.document.querySelector('input#cNotaEMP6CT').value = MediaEMP
/* Educação Musical */
var MacEM = Number.parseFloat(window.document.querySelector('input#cNotaEMusical6MAC').value)
var CppEM = Number.parseFloat(window.document.querySelector('input#cNotaEMusical6CPP').value)
var MediaEM = (MacEM + CppEM)/2
window.document.querySelector('input#cNotaEMusical6CT').value = MediaEM
/* Educação Física */
var MacEF = Number.parseFloat(window.document.querySelector('input#cNotaEFisica6MAC').value)
var CppEF = Number.parseFloat(window.document.querySelector('input#cNotaEFisica6CPP').value)
var MediaEF = (MacEF + CppEF)/2
window.document.querySelector('input#cNotaEFisica6CT').value = MediaEF
cNotaEFisica6MAC

}
