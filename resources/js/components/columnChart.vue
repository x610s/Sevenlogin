<template>
  <div id="chart">
    <apexchart
      type="bar"
      height="430"
      :options="chartOptions"
      :series="series"
    ></apexchart>
  </div>
</template>

<script>
export default {
  name: "column-chart",
  data() {
    return {
        
      series: [
           {
          name: "Jorge",
          data: [80, 83, 85, 80, 100],
        },
        {
          name: "Rommel",
          data: [0, 0, 80, 95, 90],
        },
        {
          name: "Osvaldo",
          data: [0,90,85, 80, 80],
        },
        {
          name: "Francis",
          data: [0,0,100,85,80],
        },
      ],
      chartOptions: {
        chart: {
          type: "bar",
          height: 430,
    
          toolbar: {
            show: false,
          },
        },
        fill: {
            /* Cambiar color de las filas  */
          colors: ["#024e7e", "#ee312f", "#333","#f4d160"],
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              position: "top",
            },
          },
        },
            /* Cambiar color de los cuadritos de nombre  */

          colors: ['#024e7e', '#ee312f', '#333', '#f4d160']
        ,
        dataLabels: {
          enabled: true,
          offsetX: -6,
          style: {
            fontSize: "11px",
            colors: ["#fff"],
          },
        },
        stroke: {
          show: false,
          width: 1,
          colors: ["#fff"],
        },
        xaxis: {
          type: "categories",
          categories: [
            ["Operaciones de", "habitaciones"],
            ["Depositos en", "garantía"],
            ["Pronóstico de", "habitaciones"],
            "Rooming List",
            "Reservas",
          ],
        },
      },
    };
  },
};

/*  */
</script>


