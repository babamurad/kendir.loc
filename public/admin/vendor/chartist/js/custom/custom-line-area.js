var chart = new Chartist.Line('.lineArea', {
  labels: [1, 2, 3, 4, 5],
  series: [
    [
      {meta: 'Visitors', value: 500 },
      {meta: 'Visitors', value: 2000},
      {meta: 'Visitors', value: 1900},
      {meta: 'Visitors', value: 3000},
      {meta: 'Visitors', value: 3500},
    ]
  ]
}, {
  // Remove this configuration to see that chart rendered with cardinal spline interpolation
  // Sometimes, on large jumps in data values, it's better to use simple smoothing.
  lineSmooth: Chartist.Interpolation.simple({
    divisor: 2
  }),
  height: "190px",
  fullWidth: true,
  chartPadding: {
    right: 10,
    left: 10,
    top: 30,
    bottom: 0,
  },
  axisX: {
    offset: 10,
  }, 
  axisY: {
    offset: 0,
  },
  plugins: [
    Chartist.plugins.tooltip()
  ],
  low: 0,
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});


