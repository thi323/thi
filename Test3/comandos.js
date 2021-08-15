function carregar() {
	var msg = window.document.getElementById('msg')
    var img = window.document.getElementById('imagem')
    var data = new Date()
    var hora = data.getHours()
    msg.innerHTML = `Agora são ${hora} horas.`
    if(hora >= 7 && hora <= 12){
    	     //BOM DIA
            img.src = 'fotomanha.png'
            document.body.style.background = ' #C8DCE7'
    }else if (hora >= 13 && hora <= 19) {
    	     //Boa tarde
            img.src = 'fototarde.png' 
            document.body.style.background = '#A96F49'
    }else{
    	     //Boa noite
             img.src = 'fotonoite.png'
             document.body.style.background = ' #9A7CB2'
    } 
}
