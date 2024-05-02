demo = {
  initPickColor: function() {
    $('.pick-class-label').click(function() {
      var new_class = $(this).attr('new-class');
      var old_class = $('#display-buttons').attr('data-class');
      var display_div = $('#display-buttons');
      if (display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
      }
    });
  },

  initDocChart: function() {
    chartColor = "#FFFFFF";

    // General configuration for the charts with Line gradientStroke
    gradientChartOptionsConfiguration = {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
        },
        responsive: true,
        scales: {
            yAxes: [{
                display: 0,
                gridLines: 0,
                ticks: {
                    display: false
                },
                gridLines: {
                    zeroLineColor: "transparent",
                    drawTicks: false,
                    display: false,
                    drawBorder: false
                }
            }],
            xAxes: [{
                display: 0,
                gridLines: 0,
                ticks: {
                    display: false
                },
                gridLines: {
                    zeroLineColor: "transparent",
                    drawTicks: false,
                    display: false,
                    drawBorder: false
                }
            }]
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 15,
                bottom: 15
            }
        }
    };

    // AJAX request to fetch data for the chart
    $.ajax({
      url: '/first-line-chart-data-endpoint', // Replace with your Symfony controller endpoint for chart data
      type: 'GET',
      dataType: 'json',
      success: function(response) {
          var chartData = response.data;
          var chartLabels = response.labels; // Get labels from the response
  
          var ctx = document.getElementById('lineChartExample').getContext("2d");
          var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
          gradientStroke.addColorStop(0, '#80b6f4');
          gradientStroke.addColorStop(1, chartColor);
          var gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
          gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
          gradientFill.addColorStop(1, "rgba(249, 99, 59, 0.40)");
          var myChart = new Chart(ctx, {
              type: 'line',
              responsive: true,
              data: {
                  labels: chartLabels, // Use labels from the response
                  datasets: [{
                      label: "Active Users",
                      borderColor: "#f96332",
                      pointBorderColor: "#FFF",
                      pointBackgroundColor: "#f96332",
                      pointBorderWidth: 2,
                      pointHoverRadius: 4,
                      pointHoverBorderWidth: 1,
                      pointRadius: 4,
                      fill: true,
                      backgroundColor: gradientFill,
                      borderWidth: 2,
                      data: chartData
                  }]
              },
              options: gradientChartOptionsConfiguration
          });
      },
      error: function(xhr, status, error) {
          console.error(error);
      }
  });
},

  initDashboardPageCharts: function() {
      // Function to create and update the line chart
      function createLineChart(ctx, data) {
          var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
          gradientStroke.addColorStop(0, '#80b6f4');
          gradientStroke.addColorStop(1, chartColor);
  
          var gradientFill = ctx.createLinearGradient(0, 200, 0, 50);
          gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
          gradientFill.addColorStop(1, "rgba(255, 255, 255, 0.24)");
  
          var lineChart = new Chart(ctx, {
              type: 'line',
              data: {
                  labels: data.labels,
                  datasets: [{
                      label: "Data",
                      borderColor: chartColor,
                      pointBorderColor: chartColor,
                      pointBackgroundColor: "#1e3d60",
                      pointHoverBackgroundColor: "#1e3d60",
                      pointHoverBorderColor: chartColor,
                      pointBorderWidth: 1,
                      pointHoverRadius: 7,
                      pointHoverBorderWidth: 2,
                      pointRadius: 5,
                      fill: true,
                      backgroundColor: gradientFill,
                      borderWidth: 2,
                      data: data.values
                  }]
              },
              options: {
                  layout: {
                      padding: {
                          left: 20,
                          right: 20,
                          top: 0,
                          bottom: 0
                      }
                  },
                  maintainAspectRatio: false,
                  tooltips: {
                      backgroundColor: '#fff',
                      titleFontColor: '#333',
                      bodyFontColor: '#666',
                      bodySpacing: 4,
                      xPadding: 12,
                      mode: "nearest",
                      intersect: 0,
                      position: "nearest"
                  },
                  legend: {
                      position: "bottom",
                      fillStyle: "#FFF",
                      display: false
                  },
                  scales: {
                      yAxes: [{
                          ticks: {
                              fontColor: "rgba(255,255,255,0.4)",
                              fontStyle: "bold",
                              beginAtZero: true,
                              maxTicksLimit: 5,
                              padding: 10
                          },
                          gridLines: {
                              drawTicks: true,
                              drawBorder: false,
                              display: true,
                              color: "rgba(255,255,255,0.1)",
                              zeroLineColor: "transparent"
                          }
                      }],
                      xAxes: [{
                          gridLines: {
                              zeroLineColor: "transparent",
                              display: false,
                          },
                          ticks: {
                              padding: 10,
                              fontColor: "rgba(255,255,255,0.4)",
                              fontStyle: "bold"
                          }
                      }]
                  }
              }
          });
  
          return lineChart;
      }
  
      // Function to create and update the bar chart
      function createBarChart(ctx, data) {
        var gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
        gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
        gradientFill.addColorStop(1, hexToRGB('#2CA8FF', 0.6));
    
        var barChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: data.labels,
                datasets: [{
                    label: "reclamations",
                    backgroundColor: gradientFill,
                    borderColor: "#2CA8FF",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#2CA8FF",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    fill: true,
                    borderWidth: 1,
                    data: data.values
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                responsive: 1,
                scales: {
                    yAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawBorder: false
                        }
                    }],
                    xAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'X-axis Label', // You can set the label here
                            fontColor: '#2CA8FF' // Customize font color if needed
                        }
                    }]
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 15,
                        bottom: 15
                    }
                }
            }
        });
    
        return barChart;
    }
    
  
      // Function to create and update the line chart with numbers and grid
      function createLineChartWithNumbersAndGrid(ctx, data) {
          var gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
          gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
          gradientFill.addColorStop(1, hexToRGB('#18ce0f', 0.4));
  
          var lineChartWithNumbersAndGrid = new Chart(ctx, {
              type: 'line',
              responsive: true,
              data: {
                  labels: data.labels,
                  datasets: [{
                      label: "reclamations",
                      borderColor: "#18ce0f",
                      pointBorderColor: "#FFF",
                      pointBackgroundColor: "#18ce0f",
                      pointBorderWidth: 2,
                      pointHoverRadius: 4,
                      pointHoverBorderWidth: 1,
                      pointRadius: 4,
                      fill: true,
                      backgroundColor: gradientFill,
                      borderWidth: 2,
                      data: data.values
                  }]
              },
              options: {
                  maintainAspectRatio: false,
                  legend: {
                      display: false
                  },
                  tooltips: {
                      bodySpacing: 4,
                      mode: "nearest",
                      intersect: 0,
                      position: "nearest",
                      xPadding: 10,
                      yPadding: 10,
                      caretPadding: 10
                  },
                  responsive: 1,
                  scales: {
                      yAxes: [{
                          gridLines: 0,
                          gridLines: {
                              zeroLineColor: "transparent",
                              drawBorder: false
                          }
                      }],
                      xAxes: [{
                          display: 0,
                          gridLines: 0,
                          ticks: {
                              display: false
                          },
                          gridLines: {
                              zeroLineColor: "transparent",
                              drawTicks: false,
                              display: false,
                              drawBorder: false
                          }
                      }]
                  },
                  layout: {
                      padding: {
                          left: 0,
                          right: 0,
                          top: 15,
                          bottom: 15
                      }
                  }
              }
          });
  
          return lineChartWithNumbersAndGrid;
      }
      var ctx = document.getElementById('bigDashboardChart').getContext("2d");
      var chartColor = "#FFFFFF"; // Define your chart color
      
      $.ajax({
          url: '/first-line-chart-data-endpoint',
          type: 'GET',
          dataType: 'json',
          success: function(response) {
              var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
              gradientStroke.addColorStop(0, '#80b6f4');
              gradientStroke.addColorStop(1, chartColor);
      
              var gradientFill = ctx.createLinearGradient(0, 200, 0, 50);
              gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
              gradientFill.addColorStop(1, "rgba(255, 255, 255, 0.24)");
      
              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: response.labels,
                      datasets: [{
                          label: "reclamations",
                          borderColor: chartColor,
                          pointBorderColor: chartColor,
                          pointBackgroundColor: "#1e3d60",
                          pointHoverBackgroundColor: "#1e3d60",
                          pointHoverBorderColor: chartColor,
                          pointBorderWidth: 1,
                          pointHoverRadius: 7,
                          pointHoverBorderWidth: 2,
                          pointRadius: 5,
                          fill: true,
                          backgroundColor: gradientFill,
                          borderWidth: 2,
                          data: response.data
                      }]
                  },
                  options: {
                      layout: {
                          padding: {
                              left: 20,
                              right: 20,
                              top: 0,
                              bottom: 0
                          }
                      },
                      maintainAspectRatio: false,
                      tooltips: {
                          backgroundColor: '#fff',
                          titleFontColor: '#333',
                          bodyFontColor: '#666',
                          bodySpacing: 4,
                          xPadding: 12,
                          mode: "nearest",
                          intersect: 0,
                          position: "nearest"
                      },
                      legend: {
                          position: "bottom",
                          fillStyle: "#FFF",
                          display: false
                      },
                      scales: {
                          yAxes: [{
                              ticks: {
                                  fontColor: "rgba(255,255,255,0.4)",
                                  fontStyle: "bold",
                                  beginAtZero: true,
                                  maxTicksLimit: 5,
                                  padding: 10
                              },
                              gridLines: {
                                  drawTicks: true,
                                  drawBorder: false,
                                  display: true,
                                  color: "rgba(255,255,255,0.1)",
                                  zeroLineColor: "transparent"
                              }
                          }],
                          xAxes: [{
                              gridLines: {
                                  zeroLineColor: "transparent",
                                  display: false,
                              },
                              ticks: {
                                  padding: 10,
                                  fontColor: "rgba(255,255,255,0.4)",
                                  fontStyle: "bold"
                              }
                          }]
                      }
                  }
              });
          },
          error: function(xhr, status, error) {
              console.error(error);
          }
      });
    
    // AJAX request to fetch data for the bar chart
    $.ajax({
        url: '/bar-chart-data-endpoint',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var barChartData = {
                labels: response.labels, // Assuming labels are included in the response
                values: response.data
            };
            var barChartContext = document.getElementById('barChartSimpleGradientsNumbers').getContext("2d");
            var myBarChart = createBarChart(barChartContext, barChartData);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
    
    // AJAX request to fetch data for the second line chart with numbers and grid
    $.ajax({
        url: '/second-line-chart-data-endpoint',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var lineChartDataWithGrid = {
                labels: response.labels, // Assuming labels are included in the response
                values: response.data
            };
            var lineChartContextWithGrid = document.getElementById('lineChartExampleWithNumbersAndGrid').getContext("2d");
            var myLineChartWithGrid = createLineChartWithNumbersAndGrid(lineChartContextWithGrid, lineChartDataWithGrid);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
  },

  initGoogleMaps: function() {
    var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
    var mapOptions = {
      zoom: 13,
      center: myLatlng,
      scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
      styles: [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#e9e9e9"
        }, {
          "lightness": 17
        }]
      }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }, {
          "lightness": 20
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 17
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 29
        }, {
          "weight": 0.2
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 18
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 16
        }]
      }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }, {
          "lightness": 21
        }]
      }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
          "color": "#dedede"
        }, {
          "lightness": 21
        }]
      }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#ffffff"
        }, {
          "lightness": 16
        }]
      }, {
        "elementType": "labels.text.fill",
        "stylers": [{
          "saturation": 36
        }, {
          "color": "#333333"
        }, {
          "lightness": 40
        }]
      }, {
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f2f2f2"
        }, {
          "lightness": 19
        }]
      }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#fefefe"
        }, {
          "lightness": 20
        }]
      }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#fefefe"
        }, {
          "lightness": 17
        }, {
          "weight": 1.2
        }]
      }]
    };

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
      position: myLatlng,
      title: "Hello World!"
    });

    // To add the marker to the map, call setMap();
    marker.setMap(map);
  }
};