function calcular() {
	var cap = document.getElementById('txtc')
	var tax = document.getElementById('txti')
	var tem = document.getElementById('txtt')
	var res = document.getElementById('res')
	if (cap.value.length == 0 || tax.value.length == 0 || tem.value.length == 0) {
		alert('Preencha os campos')
		return false
	}else{
		res.innerHTML = ''
		var nc = Number(cap.value)
		var ni = Number(tax.value)
		var nt = Number(tem.value)
		var p = ni / 100
		var cal =  nc * p * nt
		var m = cal + nc
		res.innerHTML += `<p>Os juros calculados são ${cal}</p>`
		res.innerHTML += `<p>E o montante é ${m} reais</p>`
		
	}
}