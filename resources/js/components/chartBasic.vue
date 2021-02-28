<template>
  <div id="responsive-chart" >
    <apexchart
    class="col-12"
      id="basicChart"
      type="bar"
      height="350"
      :options="chartOptions"
      :series="series"
    ></apexchart>
  </div>
</template>



<script>
export default {
  name: "chartBasic",

  data: function () {
    return {
      series: [
        {
          name: "Seven Suite",
          data: [93, 43, 33, 48, 88, 75, 53],
        },
      ],
      chartOptions: {
        chart: {
      
          type: "bar",
           foreColor: '#e9e9e9',
          background: "#024e7e",
          /*  background: "#FFF", */
          height: 350,
          toolbar: {
            show: false,
          },
        },
        plotOptions: {
          bar: {
            horizontal: true,
          },
        },
       
        xaxis: {
          categories: [
            "Jorge Bonilla",
            "Jessica Maibuk",
            "Daniel Bonilla",
            "Rommel Fermin",
            "Osvaldo Montealegres",
            "Fracis Bolaños",
            "Gabriel Bonilla",
          ]
        },
        fill: {
          colors: ["#FA1310"],
        },
        responsive: [
          {
            breakpoint: 1000,
            options: {
              plotOptions: {
                bar: {
                  horizontal: false,
                },
              },
            },
          },
        ],
      },
    };
  },
};
</script>
<style scoped>
</style>