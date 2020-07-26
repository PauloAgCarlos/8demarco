function media(){
    /* Língua Portuguesa*/
    var MacLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua3MAC').value)
    var CppLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua3CPP').value)
    var MediaL = (MacLP + CppLP)/2
    if(MediaL <= 10 && MediaL >= 9){
        window.document.querySelector('input#cNotaLingua3CT').value = MediaL
        window.document.querySelector('input#cNotaLingua3OBS').value = 'MBOM'
    } else if( MediaL >= 8 || MediaL >= 7){
        window.document.querySelector('input#cNotaLingua3CT').value = MediaL
        window.document.querySelector('input#cNotaLingua3OBS').value = 'BOM'
    } else if(MediaL >= 6 || MediaL >= 5){
        window.document.querySelector('input#cNotaLingua3CT').value = MediaL
        window.document.querySelector('input#cNotaLingua3OBS').value = 'SUF'
    } else{
        window.document.querySelector('input#cNotaLingua3CT').value = MediaL
        window.document.querySelector('input#cNotaLingua3OBS').value = 'MAU'
        }
    
/* MATEMÁTICA*/
var MacM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica3MAC').value)
var CppM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica3CPP').value)
var MediaM = (MacM + CppM)/2
if(MediaM <= 10 && MediaM >= 9){
    window.document.querySelector('input#cNotaMatematica3CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica3OBS').value = 'MBOM'
} else if( MediaM >= 8 || MediaM >= 7){
    window.document.querySelector('input#cNotaMatematica3CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica3OBS').value = 'BOM'
} else if(MediaM >= 6 || MediaM >= 5){
    window.document.querySelector('input#cNotaMatematica3CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica3OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaMatematica3CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica3OBS').value = 'MAU'
    }

/* Estudo do Meio*/
var MacC = Number.parseFloat(window.document.querySelector('input#cNotaMeio3MAC').value)
var CppC = Number.parseFloat(window.document.querySelector('input#cNotaMeio3CPP').value)
var MediaC = (MacC + CppC)/2
if(MediaC <= 10 && MediaC >= 9){
    window.document.querySelector('input#cNotaMeio3CT').value = MediaC
    window.document.querySelector('input#cNotaMeio3OBS').value = 'MBOM'
} else if( MediaC >= 8 || MediaC >= 7){
    window.document.querySelector('input#cNotaMeio3CT').value = MediaC
    window.document.querySelector('input#cNotaMeio3OBS').value = 'BOM'
} else if(MediaC >= 6 || MediaC >= 5){
    window.document.querySelector('input#cNotaMeio3CT').value = MediaC
    window.document.querySelector('input#cNotaMeio3OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaMeio3CT').value = MediaC
    window.document.querySelector('input#cNotaMeio3OBS').value = 'MAU'
    }

/* Educação Manual e plástica */
var MacEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP3MAC').value)
var CppEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP3CPP').value)
var MediaEMP = (MacEMP + CppEMP)/2
if(MediaEMP <= 10 && MediaEMP >= 9){
    window.document.querySelector('input#cNotaEMP3CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP3OBS').value = 'MBOM'
} else if( MediaEMP >= 8 || MediaEMP >= 7){
    window.document.querySelector('input#cNotaEMP3CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP3OBS').value = 'BOM'
} else if(MediaEMP >= 6 || MediaEMP >= 5){
    window.document.querySelector('input#cNotaEMP3CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP3OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaEMP3CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP3OBS').value = 'MAU'
    }

/* Educação Musical */
var MacEM = Number.parseFloat(window.document.querySelector('input#cNotaEMusical3MAC').value)
var CppEM = Number.parseFloat(window.document.querySelector('input#cNotaEMusical3CPP').value)
var MediaEM = (MacEM + CppEM)/2
if(MediaEM <= 10 && MediaEM >= 9){
    window.document.querySelector('input#cNotaEMusical3CT').value = MediaEM
    window.document.querySelector('input#cNotaEMusical3OBS').value = 'MBOM'
} else if( MediaEM >= 8 || MediaEM >= 7){
    window.document.querySelector('input#cNotaEMusical3CT').value = MediaEM
    window.document.querySelector('input#cNotaEMusical3OBS').value = 'BOM'
} else if(MediaEM >= 6 || MediaEM >= 5){
    window.document.querySelector('input#cNotaEMusical3CT').value = MediaEM
    window.document.querySelector('input#cNotaEMusical3OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaEMusical3CT').value =MediaEM
    window.document.querySelector('input#cNotaEMusical3OBS').value ='MAU'
    }


/* Educação Física */
var MacEF = Number.parseFloat(window.document.querySelector('input#cNotaEFisica3MAC').value)
var CppEF = Number.parseFloat(window.document.querySelector('input#cNotaEFisica3CPP').value)
var MediaEF = (MacEF + CppEF)/2

if(MediaEF <= 10 && MediaEF >= 9){
    window.document.querySelector('input#cNotaEFisica3CT').value = MediaEF
    window.document.querySelector('input#cNotaEFisica3OBS').value = 'MBOM'
} else if( MediaEF >= 8 || MediaEF >= 7){
    window.document.querySelector('input#cNotaEFisica3CT').value = MediaEF
    window.document.querySelector('input#cNotaEFisica3OBS').value ='BOM'
} else if(MediaEF >= 6 || MediaEF >= 5){
    window.document.querySelector('input#cNotaEFisica3CT').value = MediaEF
    window.document.querySelector('input#cNotaEFisica3OBS').value ='SUF'
} else{
    window.document.querySelector('input#cNotaEFisica3CT').value = MediaEF
    window.document.querySelector('input#cNotaEFisica3OBS').value ='MAU'
    }


}