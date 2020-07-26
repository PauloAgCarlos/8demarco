function media(){
    /* Língua Portuguesa*/
    var MacLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua4MAC').value)
    var CppLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua4CPP').value)
    var MediaL = (MacLP + CppLP)/2
    window.document.querySelector('input#cNotaLingua4CT').value = MediaL
/* MATEMÁTICA*/
var MacM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica4MAC').value)
var CppM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica4CPP').value)
var MediaM = (MacM + CppM)/2
window.document.querySelector('input#cNotaMatematica4CT').value = MediaM
/* Estudo do Meio*/
var MacC = Number.parseFloat(window.document.querySelector('input#cNotaMeio4MAC').value)
var CppC = Number.parseFloat(window.document.querySelector('input#cNotaMeio4CPP').value)
var MediaC = (MacC + CppC)/2
window.document.querySelector('input#cNotaMeio4CT').value = MediaC

/* Educação Manual e plástica */
var MacEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP4MAC').value)
var CppEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP4CPP').value)
var MediaEMP = (MacEMP + CppEMP)/2
window.document.querySelector('input#cNotaEMP4CT').value = MediaEMP
/* Educação Musical */
var MacEM = Number.parseFloat(window.document.querySelector('input#cNotaMusical4MAC').value)
var CppEM = Number.parseFloat(window.document.querySelector('input#cNotaMusical4CPP').value)
var MediaEM = (MacEM + CppEM)/2
window.document.querySelector('input#cNotaMusical4CT').value = MediaEM
/* Educação Física */
var MacEF = Number.parseFloat(window.document.querySelector('input#cNotaFisica4MAC').value)
var CppEF = Number.parseFloat(window.document.querySelector('input#cNotaFisica4CPP').value)
var MediaEF = (MacEF + CppEF)/2
window.document.querySelector('input#cNotaFisica4CT').value = MediaEF
cNotaEFisica6MAC

}
