$(function(){
var cantidad = $(".cantidadPedido").val();
y= [];
x= [];
for (var i = 0 ; i <  cantidad; i++) {
y[i] = $(".ventas"+i).val();	
x[i] = $(".nombre"+i).val();
console.log($(".ventas"+i).val());	
}

	charBarras(x,y,"bar-chart","bar");
	charBarras(x,y,"circle-chart","doughnut");
});


function charBarras(X,Y,id,typeChart){
					new Chart(document.getElementById(id), {
			    type: typeChart,
			    data: {
			      labels: X,
			      datasets: [
			        {
			          label: "Population (millions)",
			          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#22DF7B","#47E024","#A013FA","#807FA8","#51E741","#FF7B05","#FF003C"],
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