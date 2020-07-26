function media(){
    /* Língua Portuguesa*/
    var MacLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua5MAC').value)
    var CppLP = Number.parseFloat(window.document.querySelector('input#cNotaLingua5CPP').value)
    var MediaL = (MacLP + CppLP)/2
    if(MediaL <= 10 && MediaL >= 9){
        window.document.querySelector('input#cNotaLingua5CT').value = MediaL
        window.document.querySelector('input#cNotaLingua5OBS').value = 'MBOM'
    } else if( MediaL >= 8 || MediaL >= 7){
        window.document.querySelector('input#cNotaLingua5CT').value = MediaL
        window.document.querySelector('input#cNotaLingua5OBS').value = 'BOM'
    } else if(MediaL >= 6 || MediaL >= 5){
        window.document.querySelector('input#cNotaLingua5CT').value = MediaL
        window.document.querySelector('input#cNotaLingua5OBS').value = 'SUF'
    } else{
        window.document.querySelector('input#cNotaLingua5CT').value = MediaL
        window.document.querySelector('input#cNotaLingua5OBS').value = 'MAU'
        }
    
/* MATEMÁTICA*/
var MacM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica5MAC').value)
var CppM = Number.parseFloat(window.document.querySelector('input#cNotaMatematica5CPP').value)
var MediaM = (MacM + CppM)/2
if(MediaM <= 10 && MediaM >= 9){
    window.document.querySelector('input#cNotaMatematica5CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica5OBS').value = 'MBOM'
} else if( MediaM >= 8 || MediaM >= 7){
    window.document.querySelector('input#cNotaMatematica5CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica5OBS').value = 'BOM'
} else if(MediaM >= 6 || MediaM >= 5){
    window.document.querySelector('input#cNotaMatematica5CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica5OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaMatematica5CT').value = MediaM
    window.document.querySelector('input#cNotaMatematica5OBS').value = 'MAU'
    }

/* Ciências da Natureza*/
var MacC = Number.parseFloat(window.document.querySelector('input#cNotaCiencia5MAC').value)
var CppC = Number.parseFloat(window.document.querySelector('input#cNotaCiencia5CPP').value)
var MediaC = (MacC + CppC)/2
if(MediaC <= 10 && MediaC >= 9){
    window.document.querySelector('input#cNotaCiencia5CT').value = MediaC
    window.document.querySelector('input#cNotaCiencia5OBS').value = 'MBOM'
} else if( MediaC >= 8 || MediaC >= 7){
    window.document.querySelector('input#cNotaCiencia5CT').value = MediaC
    window.document.querySelector('input#cNotaCiencia5OBS').value = 'BOM'
} else if(MediaC >= 6 || MediaC >= 5){
    window.document.querySelector('input#cNotaCiencia5CT').value = MediaC
    window.document.querySelector('input#cNotaCiencia5OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaCiencia5CT').value = MediaC
    window.document.querySelector('input#cNotaCiencia5OBS').value = 'MAU'
    }

/* História*/
var MacH = Number.parseFloat(window.document.querySelector('input#cNotaHistoria5MAC').value)
var CppH = Number.parseFloat(window.document.querySelector('input#cNotaHistoria5CPP').value)
var MediaH = (MacH + CppH)/2
if(MediaH <= 10 && MediaH >= 9){
    window.document.querySelector('input#cNotaHistoria5CT').value = MediaH
    window.document.querySelector('input#cNotaHistoria5OBS').value = 'MBOM'
} else if( MediaH >= 8 || MediaH >= 7){
    window.document.querySelector('input#cNotaHistoria5CT').value =  MediaH
    window.document.querySelector('input#cNotaHistoria5OBS').value =  'BOM'
} else if(MediaH >= 6 || MediaH >= 5 ){
    window.document.querySelector('input#cNotaHistoria5CT').value = MediaH
    window.document.querySelector('input#cNotaHistoria5OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaHistoria5CT').value = MediaH
    window.document.querySelector('input#cNotaHistoria5OBS').value = 'MAU'
    }

/* Geografia */
var MacG = Number.parseFloat(window.document.querySelector('input#cNotaGeografia5MAC').value)
var CppG = Number.parseFloat(window.document.querySelector('input#cNotaGeografia5CPP').value)
var MediaG = (MacG + CppG)/2
if(MediaG <= 10 && MediaG >= 9){
    window.document.querySelector('input#cNotaGeografia5CT').value =MediaG
    window.document.querySelector('input#cNotaGeografia5OBS').value ='MBOM'
} else if( MediaG >= 8 || MediaG >= 7){
    window.document.querySelector('input#cNotaGeografia5CT').value = MediaG
    window.document.querySelector('input#cNotaGeografia5OBS').value = 'BOM'
} else if(MediaG >= 6 || MediaG >= 5){
    window.document.querySelector('input#cNotaGeografia5CT').value =MediaG
    window.document.querySelector('input#cNotaGeografia5OBS').value ='SUF'
} else{
    window.document.querySelector('input#cNotaGeografia5CT').value = MediaG
    window.document.querySelector('input#cNotaGeografia5OBS').value = 'MAU'
    }

/* Educação Moral e Cívica */
var MacEMC = Number.parseFloat(window.document.querySelector('input#cNotaEMC5MAC').value)
var CppEMC = Number.parseFloat(window.document.querySelector('input#cNotaEMC5CPP').value)
var MediaEMC = (MacEMC + CppEMC)/2
if(MediaEMC <= 10 && MediaEMC >= 9){
    window.document.querySelector('input#cNotaEMC5CT').value = MediaEMC
    window.document.querySelector('input#cNotaEMC5OBS').value = 'MBOM'

} else if( MediaEMC >= 8 || MediaEMC >= 7){
    window.document.querySelector('input#cNotaEMC5CT').value = MediaEMC
    window.document.querySelector('input#cNotaEMC5OBS').value = 'BOM'
} else if(MediaEMC >= 6 || MediaEMC >= 5){
    window.document.querySelector('input#cNotaEMC5CT').value = MediaEMC
    window.document.querySelector('input#cNotaEMC5OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaEMC5CT').value = MediaEMC
    window.document.querySelector('input#cNotaEMC5OBS').value = 'MAU'
    }


/* Educação Manual e plástica */
var MacEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP5MAC').value)
var CppEMP = Number.parseFloat(window.document.querySelector('input#cNotaEMP5CPP').value)
var MediaEMP = (MacEMP + CppEMP)/2
if(MediaEMP <= 10 && MediaEMP >= 9){
    window.document.querySelector('input#cNotaEMP5CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP5OBS').value = 'MBOM'
} else if( MediaEMP >= 8 || MediaEMP >= 7){
    window.document.querySelector('input#cNotaEMP5CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP5OBS').value = 'BOM'
} else if(MediaEMP >= 6 || MediaEMP >= 5){
    window.document.querySelector('input#cNotaEMP5CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP5OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaEMP5CT').value = MediaEMP
    window.document.querySelector('input#cNotaEMP5OBS').value = 'MAU'
    }

/* Educação Musical */
var MacEM = Number.parseFloat(window.document.querySelector('input#cNotaEMusical5MAC').value)
var CppEM = Number.parseFloat(window.document.querySelector('input#cNotaEMusical5CPP').value)
var MediaEM = (MacEM + CppEM)/2
if(MediaEM <= 10 && MediaEM >= 9){
    window.document.querySelector('input#cNotaEMusical5CT').value = MediaEM
    window.document.querySelector('input#cNotaEMusical5OBS').value = 'MBOM'
} else if( MediaEM >= 8 || MediaEM >= 7){
    window.document.querySelector('input#cNotaEMusical5CT').value = MediaEM
    window.document.querySelector('input#cNotaEMusical5OBS').value = 'BOM'
} else if(MediaEM >= 6 || MediaEM >= 5){
    window.document.querySelector('input#cNotaEMusical5CT').value = MediaEM
    window.document.querySelector('input#cNotaEMusical5OBS').value = 'SUF'
} else{
    window.document.querySelector('input#cNotaEMusical5CT').value =MediaEM
    window.document.querySelector('input#cNotaEMusical5OBS').value ='MAU'
    }


/* Educação Física */
var MacEF = Number.parseFloat(window.document.querySelector('input#cNotaEFisica5MAC').value)
var CppEF = Number.parseFloat(window.document.querySelector('input#cNotaEFisica5CPP').value)
var MediaEF = (MacEF + CppEF)/2

if(MediaEF <= 10 && MediaEF >= 9){
    window.document.querySelector('input#cNotaEFisica5CT').value = MediaEF
    window.document.querySelector('input#cNotaEFisica5OBS').value = 'MBOM'
} else if( MediaEF >= 8 || MediaEF >= 7){
    window.document.querySelector('input#cNotaEFisica5CT').value = MediaEF
    window.document.querySelector('input#cNotaEFisica5OBS').value ='BOM'
} else if(MediaEF >= 6 || MediaEF >= 5){
    window.document.querySelector('input#cNotaEFisica5CT').value = MediaEF
    window.document.querySelector('input#cNotaEFisica5OBS').value ='SUF'
} else{
    window.document.querySelector('input#cNotaEFisica5CT').value =MediaEF
    window.document.querySelector('input#cNotaEFisica5OBS').value ='MAU'
    }


}