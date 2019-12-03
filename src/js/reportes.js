$(function(){
var cantidad = $(".cantidadPedido").val();
y= [];
p=[];
x = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
for (var i = 0 ; i <  cantidad; i++) {
y[i] = $(".pedidoVal"+i).val();	
}
for (var a = 0 - 1; a < y.length; a++) {
	p[a] = x[a];
}
console.log(p);
	charBarras(p,y,"bar-chart","bar");
	charBarras(p,y,"circle-chart","doughnut");
});


function charBarras(X,Y,id,typeChart){
					new Chart(document.getElementById(id), {
			    type: typeChart,
			    data: {
			      labels: X,
			      datasets: [
			        {
			          label: "Population (millions)",
			          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#50C3C4","#c45850","#CF3AD4","#c45850","#3324F2","#B4E62F","#37FF10"],
			          data: Y
			        }
			      ]
			    },
			    options: {
			      legend: { display: false },
			      title: {
			        display: true,
			        text: ''
			      }
			    }
			});
}