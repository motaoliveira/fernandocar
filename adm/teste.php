<!DOCTYPE html>
<html>
<body>

<select name="mySelect">
</select>

<p>Click the button to create an OPTION element.</p>

<select name="catma" id="catma" onchange="myFunction()">
<option value=" ">Selecione</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>

<script>
function myFunction() {

	var ress = new Array();
	ress[0] = new Array("Selecione");
	ress[1] = new Array("Selecione","Macbook","CPU","Teclados");			
	ress[2] = new Array("Selecione","Cameras","Suporte para TV");
	ress[3] = new Array("Selecione","Conversor Digital");
			
	var rr = catma.value;
	var err = ress[rr].length;
	var set = ress.length
	alert("valor de err" + err);

	for(var i = 0; i<err; i++)
		{
			var x = document.createElement("OPTION");
			x.setAttribute("value", i);
			var nome = ress[rr][i];
			var t = document.createTextNode(nome);
			x.appendChild(t);
			document.getElementById("mySelect").appendChild(x);
		}

}
</script>

</body>
</html>
