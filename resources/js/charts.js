const ctx = document.getElementById('myChart');
const ctx2 = document.getElementById('myChart2');

const url_api = 'http://127.0.0.1:8000/api/categorias';
const url_api2 = 'http://127.0.0.1:8000/api/pacientes';
const categorias = []
const cantidades = []
const pacientes = []
const asistencias = []

const getData = async () =>{
  const response = await fetch(url_api);
  const resultado = await response.json(); 
  resultado.forEach(element => {
      categorias.push(element.nombre_categoria)
      cantidades.push(element.cantidad)
  })
}
const getData2 = async () =>{
  const response = await fetch(url_api2);
  const resultado = await response.json(); 
  resultado.forEach(element => {
      pacientes.push(element.nombre)
      asistencias.push(element.cantidad)
  })
}

getData();
getData2();

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: categorias,
      datasets: [{
        label: '# Por categorias',
        data: cantidades,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: pacientes,
      datasets: [{
        label: 'Cantidad de citas',
        data: asistencias,
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]
    }
  });