new Chart(document.getElementById("linechart"), {
	type: 'line',
	data: {
		labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		datasets: [{
			label: 'Registro de Usuarios',
			backgroundColor: window.chartColors.navy,
			borderColor: window.chartColors.navy,
			data: [30, 10, 70, 15, 60, 20, 70, 50, 60, 42, 40, 12],

			fill: false,
		}, {
			label: 'Acceso por Horas',
			fill: false,
			backgroundColor: window.chartColors.purple,
			borderColor: window.chartColors.purple,
			data: [10, 40, 20, 35, 25, 50, 10, 40, 10, 54, 12, 40],
		}]
	},
	options: {
		responsive: true,
		// title: {
		// 	display: true,
		// 	text: 'Chart.js Line Chart'
		// },
		tooltips: {
			mode: 'index',
			intersect: false,
		},
		hover: {
			mode: 'nearest',
			intersect: true
		},
		scales: {
			xAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'Mes'
				}
			}],
			yAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'Cantidad'
				}
			}]
		}
	}
});
