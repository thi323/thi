function gerar() {
	var num = document.getElementById('txtn')
	var res = document.getElementById('res')
	if (num.value.length == 0) {
		alert('por favor preencha o campo número')
	}else{
	            res.innerHTML = ''
	            var n1 = Number(num.value)
	            var n2 = n1 * 10 //multiplica por 10 o número
	            var n3 = 0 //Número 0
	            var n4 = 0 // Número 0
	            var n5 = n2 / 10 //divide o n2
	            while (n3 <= n2) {
  	                  res.innerHTML += `${n5}×${n4}=${n3} <br>`
                        n3 += n1
                        n4++       //não consigo explicar mais vê aí kkkkk
	         }
	}
	       
}