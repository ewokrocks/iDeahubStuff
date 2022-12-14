// Histogram
(function() {
 
  var myChart = echarts.init(document.querySelector(".bar .chart"));
 
  var option = {
    color: ["#ee3e34"],
    tooltip: {
      trigger: "axis",
      axisPointer: {
       
        type: "shadow" 
      }
    },
    
    grid: {
      left: "0%",
      top: "10px",
      right: "0%",
      bottom: "4%",
      containLabel: true
    },
    xAxis: [
      {
        type: "category",
        data: [
          "S1",
          "S2",
          "S3",
          "S4",
          "S5",
          "S6",
          "S7"
        ],
        axisTick: {
          alignWithLabel: true
        },
        
        axisLabel: {
          color: "rgba(245, 41, 0, 0.897) ",
          fontSize: "12"
        },
       
        axisLine: {
          show: false
        }
      }
    ],
    yAxis: [
      {
        type: "value",
        axisLabel: {
          color: "rgba(245, 41, 0, 0.897) ",
          fontSize: 12
        },
        axisLine: {
          lineStyle: {
            color: "rgba(245, 41, 0, 0.897)",
            width: 2
          }
        },
        splitLine: {
          lineStyle: {
            color: "rgba(245, 41, 0, 0.897)"
          }
        }
      }
    ],
    series: [
      {
        name: "week",
        type: "bar",
        barWidth: "35%",
        data: [200, 300, 300, 900, 1500, 1200, 600],
        itemStyle: {
          barBorderRadius: 5
        }
      }
    ]
  };
  myChart.setOption(option);
  window.addEventListener("resize", function() {
    myChart.resize();
  });
})();

//Histogram
(function() {
  var myColor = ["#ee0e34", "#ee3e34", "#ee6e34", "#ee9e34", "#ff9f99"];
  var myChart = echarts.init(document.querySelector(".bar2 .chart"));
  var option = {
    grid: {
      top: "10%",
      left: "24%",
      right:"14%",
      bottom: "10%"
      // containLabel: true
    },
    xAxis: {
      show: false
    },
    yAxis: [
      {
        type: "category",
        inverse: true,
        data: ["Device1", "Device2", "Devices3", "Devices4", "Devices5"],
        axisLine: {
          show: false
        },
        axisTick: {
          show: false
        },
        
        axisLabel: {
          color: "#ee4e34"
        }
      },
      {
        data: [702, 350, 610, 793, 664],
        inverse: true,
       
        axisLine: {
          show: false
        },
       
        axisTick: {
          show: false
        },
        
        axisLabel: {
          color: "#ee4e34"
        }
      }
    ],
    series: [
      {
        name: "条",
        type: "bar",
        data: [70, 34, 60, 78, 69],
        yAxisIndex: 0,
        
        itemStyle: {
          barBorderRadius: 20,
          
          color: function(params) {
           
            return myColor[params.dataIndex];
          }
        },
        
        barCategoryGap: 50,
       
        barWidth: 10,
        
        label: {
          show: true,
          position: "inside",
          
          formatter: "{c}%"
        }
      },
      {
        name: "frame",
        type: "bar",
        barCategoryGap: 50,
        barWidth: 13,
        yAxisIndex: 1,
        data: [100, 100, 100, 100, 100],
        itemStyle: {
          color: "none",
          borderColor: "#eeae34",
          borderWidth: 2,
          barBorderRadius: 15
        }
      }
    ]
  };


  myChart.setOption(option);

  window.addEventListener("resize", function() {
    myChart.resize();
  });
})();

// Folding Line Chart
(function() {
  var yearData = [
    {
      year: "2022", 
      data: [
        
        [24, 40, 101, 134, 90, 230, 210, 230, 120, 230, 210, 120],
        [40, 64, 191, 324, 290, 330, 310, 213, 180, 200, 180, 79]
      ]
    },
    {
      year: "2023", //years
      data: [
       
        [123, 175, 112, 197, 121, 67, 98, 21, 43, 64, 76, 38],
        [143, 131, 165, 123, 178, 21, 82, 64, 43, 60, 19, 34]
      ]
    }
  ];

  var myChart = echarts.init(document.querySelector(".line .chart"));

  var option = {
  
    color: ["#ee0e34", "#eeae34"],
    tooltip: {
      trigger: "axis"
    },
    legend: {
      
      textStyle: {
        color: "#ee4e34"
      },
     
      right: "10%"
    },
    grid: {
      top: "20%",
      left: "3%",
      right: "4%",
      bottom: "3%",
      show: true, 
      borderColor: "#ee4e34", 
      containLabel: true 
    },

    xAxis: {
      type: "category",
      boundaryGap: false,
      data: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "June",
        "July",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ],
      axisTick: {
        show: false 
      },
      axisLabel: {
        color: "#ee4e34" 
      },
      axisLine: {
        show: false 
      }
    },
    yAxis: {
      type: "value",
      axisTick: {
        show: false 
      },
      axisLabel: {
        color: "#ee4e34" 
      },
      axisLine: {
        show: false 
      },
      splitLine: {
        lineStyle: {
          color: "#ee4e34" 
        }
      }
    },
    series: [
      {
        name: "register",
        type: "line",
       
        smooth: true,
        data: yearData[0].data[0]
      },
      {
        name: "visiter",
        type: "line",
        smooth: true,
        data: yearData[0].data[1]
      }
    ]
  };

 
  myChart.setOption(option);

  window.addEventListener("resize", function() {
    myChart.resize();
  });

 
  $(".line h2").on("click", "a", function() {
    
    var obj = yearData[$(this).index()];
    option.series[0].data = obj.data[0];
    option.series[1].data = obj.data[1];
    
    myChart.setOption(option);
  });
})();

// Folding Line Chart
(function() {
  var myChart = echarts.init(document.querySelector(".line2 .chart"));
  var option = {
    tooltip: {
      trigger: "axis"
    },
    legend: {
      top: "0%",
      data: ["S1", "S2", "S3", "S4", "S5"],
      textStyle: {
        color: "rgba(245, 41, 0, 0.897)",
        fontSize: "12"
      }
    },

    grid: {
      left: "10",
      top: "30",
      right: "10",
      bottom: "10",
      containLabel: true
    },
    xAxis: [
      {
        type: "category",
        boundaryGap: false,
        
        data: [
          "01",
          "02",
          "03",
          "04",
          "05",
          "06",
          "07",
          "08",
          "09",
          "10",
          "11",
          "12",
          "13",
          "14",
          "15",
          "16",
          "17",
          "18",
          "19",
          "20",
          "21",
          "22",
          "23",
          "24",
          "25",
          "26",
          "26",
          "28",
          "29",
          "30"
        ],
        
        axisLabel: {
          textStyle: {
            color: "rgba(245, 41, 0, 0.897)",
            fontSize: 12
          }
        },
        
        axisLine: {
          lineStyle: {
            color: "rgba(245, 41, 0, 0.897)"
          }
        }
      }
    ],
    yAxis: [
      {
        type: "value",
        axisTick: { show: false },
        axisLine: {
          lineStyle: {
            color: "rgba(245, 41, 0, 0.897)"
          }
        },
        axisLabel: {
          textStyle: {
            color: "rgba(245, 41, 0, 0.897)",
            fontSize: 12
          }
        },
        
        splitLine: {
          lineStyle: {
            color: "rgba(245, 41, 0, 0.897)"
          }
        }
      }
    ],
    series: [
      {
        name: "Water",
        type: "line",
        smooth: true,
        
        lineStyle: {
          color: "#ee4e34",
          width: "2"
        },
        // 填充颜色设置
        areaStyle: {
          color: new echarts.graphic.LinearGradient(
            0,
            0,
            0,
            1,
            [
              {
                offset: 0,
                color: "rgba(245, 41, 0, 0.897)" // 渐变色的起始颜色
              },
              {
                offset: 0.8,
                color: "rgba(1, 132, 213, 0.5)" // 渐变线的结束颜色
              }
            ],
            false
          ),
          shadowColor: "rgba(0, 0, 0, 0.1)"
        },
       
        symbol: "circle",
        
        symbolSize: 8,
      
        showSymbol: false,
    
        itemStyle: {
          color: "#ee0e34",
          borderColor: "rgba(245, 41, 0, 0.897)",
          borderWidth: 12
        },
        data: [
          30,
          40,
          30,
          40,
          30,
          40,
          30,
          60,
          20,
          40,
          30,
          40,
          30,
          40,
          30,
          40,
          30,
          60,
          20,
          40,
          30,
          40,
          30,
          40,
          30,
          40,
          20,
          60,
          50,
          40
        ]
      },
      {
        name: "Electricity",
        type: "line",
        smooth: true,
        lineStyle: {
          normal: {
            color: "#ee4e34",
            width: 2
          }
        },
        areaStyle: {
          normal: {
            color: new echarts.graphic.LinearGradient(
              0,
              0,
              0,
              1,
              [
                {
                  offset: 0,
                  color: "rgba(245, 41, 0, 0.897)"
                },
                {
                  offset: 0.8,
                  color: "rgba(245, 41, 0, 0.5)"
                }
              ],
              false
            ),
            shadowColor: "rgba(0, 0, 0, 0.1)"
          }
        },
       
        symbol: "circle",
        
        symbolSize: 5,
        
        itemStyle: {
          color: "#00d887",
          borderColor: "rgba(245, 41, 0, 0.897)",
          borderWidth: 12
        },
       
        showSymbol: false,
        data: [
          130,
          10,
          20,
          40,
          30,
          40,
          80,
          60,
          20,
          40,
          90,
          40,
          20,
          140,
          30,
          40,
          130,
          20,
          20,
          40,
          80,
          70,
          30,
          40,
          30,
          120,
          20,
          99,
          50,
          20
        ]
      }
    ]
  };
  myChart.setOption(option);
 
  window.addEventListener("resize", function() {
    myChart.resize();
  });
})();

// Pie
(function() {
 
  var myChart = echarts.init(document.querySelector(".pie .chart"));
  
  var option = {
    color: ["#ee2e34", "#ee5e34", "#ee8e34", "#ef9e38", "#dd9f34"],
    tooltip: {
      trigger: "item",
      formatter: "{a} <br/>{b}: {c} ({d}%)"
    },

    legend: {
      bottom: "0%",
     
      itemWidth: 10,
      itemHeight: 10,
  
      textStyle: {
        color: "rgba(245, 41, 0, 0.897)",
        fontSize: "12"
      }
    },
    series: [
      {
        name: "Age",
        type: "pie",
       
        radius: ["40%", "60%"],
        center: ["50%", "45%"],
        avoidLabelOverlap: false,
        
        label: {
          show: false,
          position: "center"
        },
      
        labelLine: {
          show: false
        },
        data: [
          { value: 1, name: "zero" },
          { value: 4, name: "20-29" },
          { value: 2, name: "30-39" },
          { value: 2, name: "40-49" },
          { value: 1, name: "above 50" }
        ]
      }
    ]
  };


  myChart.setOption(option);

  window.addEventListener("resize", function() {
    myChart.resize();
  });
})();

// pie-city
(function() {
  var myChart = echarts.init(document.querySelector(".pie2 .chart"));
  var option = {
    color: [
      "#ee1e34",
      "#ee3e34",
      "#ee5e34",
      "#ee7e34",
      "#ee9e34",
      "#ff1e34",
      "#ff5e34",
      "#ff8e34"
    ],
    tooltip: {
      trigger: "item",
      formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
      bottom: "0%",
      itemWidth: 10,
      itemHeight: 10,
      textStyle: {
        color: "rgba(245, 41, 0, 0.897)",
        fontSize: "7"
      }
    },
    series: [
      {
        name: "city",
        type: "pie",
        radius: ["10%", "70%"],
        center: ["50%", "50%"],
        roseType: "radius",
        
        label: {
          fontSize: 10
        },
      
        labelLine: {
        
          length: 6,
      
          length2: 8
        },
        data: [
          { value: 20, name: "Paris" },
          { value: 26, name: "Dunkerque" },
          { value: 24, name: "Lille" },
          { value: 25, name: "Cherbourg" },
          { value: 20, name: "Rouen" },
          { value: 25, name: "Nancy" },
          { value: 30, name: "Brest" },
          { value: 42, name: "Orleans" }
        ]
      }
    ]
  };
  myChart.setOption(option);
  
  window.addEventListener("resize", function() {
    myChart.resize();
  });
})();
