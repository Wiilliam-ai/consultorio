const tablaCitas = document.getElementById("tabla-cita");


var dataTable = new DataTable(tablaCitas,{
    perPage: 5,
    perPageSelect: [5,10,15]
});


const inputSearch = document.querySelector(".dataTable-input");
const selectorPages = document.querySelector(".dataTable-selector");

inputSearch.classList.add("border-2","border-black","rounded","outline-none");
selectorPages.classList.add("bg-blue-800","text-white","font-bold","rounded");