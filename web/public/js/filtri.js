// JavaScript Document




//somma
function cifre_decimali(x) {
var c = String(Math.round(x*100));
while (c.length < 3) c = '0' + c;
return c.replace(/([0-9][0-9])$/,".$1");
}
//Funzione per l'aggiornamento in tempo reale del costo totale degli articoli
function calcola () {
//Prelevo il prezzo
var prezzo_adulti = parseFloat(document.modulo.prezzo_adulti.value);
var prezzo_bambini = parseFloat(document.modulo.prezzo_bambini.value);
//Prelevo il numero articoli
var a=document.getElementById('adulti').value-0;

var b=document.getElementById('bambini').value-0;
document.getElementById('risultato').value=a+b;

var totale = a+b;
if(totale >=5) {
document.getElementById("risultato").disabled = true;
} else {
		document.getElementById("risultato").disabled = false;
	
	

var calcola_somma = 0.00;
//Calcolo la somma
calcola_somma = Math.round(prezzo_adulti * a )+(prezzo_bambini * b );
//Scrivo la somma nel campo aggiungendo zero qual'ora non ci fossero
document.modulo.somma.value=cifre_decimali(calcola_somma);
}}



	


//Funzione per arrotondamento a due cifre decimali e aggiunta di zeri

