function contar() {
	var txti = document.getElementById('txtini')
	var txtf = document.getElementById('txtfim')
	var txtpa = document.getElementById('txtp')
	var res = document.getElementById('res')
	var res2 = document.getElementById('res2')
	var ini = Number(txti.value)
	var fim = Number(txtf.value)
	var passo = Number(txtpa.value)
	res2.innerHTML = ''
    if (ini.length == 0)  {
    	 alert('Erro, os campos devem estar preenchidos!')
   }
   if (ini < fim) {
        while (ini <= fim) {
  	res2.innerHTML += `${ini}, `
      ini += passo
  }
  res.innerHTML = 'Contando:'
	
   }else {
   	while (ini >= fim) {
  	res2.innerHTML += `${ini}, `
      ini -= passo
         }
   }
  
}