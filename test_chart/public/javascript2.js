// import Chart from 'chart.js/auto'

import datajson from './data.js'

// const datajson = require ('./data.js')

(async function() {

    var score = [];
    var ctx = document.getElementById('mycanvas');

    for(var i in datajson) {
        score.push(datajson[i].data);
        console.log(datajson[i])
      }




    var chartdata = {
        labels: [
            'Eating',
            'Drinking',
            'Sleeping',
            'Designing',
            'Coding',
            'Cycling',
            'Running'
          ],
        datasets : [
          {
            label: 'Player Score',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(255, 99, 132)',
          pointBackgroundColor: 'rgb(255, 99, 132)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(255, 99, 132)',
            data: score[0].map(value=> value.score)
          },
          {
            label: 'Player Score',
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgb(54, 162, 235)',
          pointBackgroundColor: 'rgb(54, 162, 235)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(54, 162, 235)',data: score[1].map(value=> value.score)
          }

        ]
    };

    var barGraph = new Chart(ctx, {
        type: 'radar',
        data: chartdata,

      });




    // const data = {
    //     labels: [
    //       'Eating',
    //       'Drinking',
    //       'Sleeping',
    //       'Designing',
    //       'Coding',
    //       'Cycling',
    //       'Running'
    //     ],
    //     datasets: [{
    //       label: 'My First Dataset',
    //       data: [65, 59, 90, 81, 56, 55, 40],
    //       fill: true,
    //       backgroundColor: 'rgba(255, 99, 132, 0.2)',
    //       borderColor: 'rgb(255, 99, 132)',
    //       pointBackgroundColor: 'rgb(255, 99, 132)',
    //       pointBorderColor: '#fff',
    //       pointHoverBackgroundColor: '#fff',
    //       pointHoverBorderColor: 'rgb(255, 99, 132)'
    //     }, {
    //       label: 'My Second Dataset',
    //       data: [28, 48, 40, 19, 96, 27, 100],
    //       fill: true,
    //       backgroundColor: 'rgba(54, 162, 235, 0.2)',
    //       borderColor: 'rgb(54, 162, 235)',
    //       pointBackgroundColor: 'rgb(54, 162, 235)',
    //       pointBorderColor: '#fff',
    //       pointHoverBackgroundColor: '#fff',
    //       pointHoverBorderColor: 'rgb(54, 162, 235)'
    //     }]
    //   };
    //   // </block:setup>

    //   // <block:config:0>
    //   const config = {
    //     type: 'radar',
    //     data: data,
    //     options: {
    //       elements: {
    //         line: {
    //           borderWidth: 3
    //         }
    //       }
    //     },
    //   };
      // </block:config>



//   new Chart(
    // document.getElementById('mycanvas'),
//    config
//   );
})();

