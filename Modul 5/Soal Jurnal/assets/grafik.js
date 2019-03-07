var data1 = [{values: [19, 26, 55], labels: ['CSS', 'HTML', 'JAVASCRIPT'], type: 'pie' }];
var trace1 = {x: [1, 2, 3, 4, 5, 6], y: [10, 15, 13, 17, 15, 11], type: 'scatter'};
var trace2 = {x: [1, 2, 3, 4, 5, 6], y: [16, 5, 11, 9, 20, 7], type: 'scatter'};
var data2 = [trace1, trace2];
var trace3 = { type: 'bar', x: [1, 2, 3, 4], y: [5, 10, 2, 8], marker: { color: '#4286f4', line: { width: 1.5 } } };
var data3 = [ trace3 ];

Plotly.newPlot('GRAFIK-A', data1, {}, {showSendToCloud:true}); //konten 1
Plotly.newPlot('GRAFIK-B', data3, {responsive: true}); //konten 2
Plotly.newPlot('GRAFIK-C', data2, {}, {showSendToCloud: true}); //konten 3