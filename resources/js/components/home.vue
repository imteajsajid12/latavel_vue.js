<template>
  <div id="app">
    <div class="main-content">
      <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                      <h2>10368</h2>
                      <span>members online</span>
                    </div>
                  </div>
                  <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="text">
                      <h2>388,688</h2>
                      <span>items solid</span>
                    </div>
                  </div>
                  <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                    <div class="text">
                      <h2>1,086</h2>
                      <span>this week</span>
                    </div>
                  </div>
                  <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                      <h2>$1,060,386</h2>
                      <span>total earnings</span>
                    </div>
                  </div>
                  <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="au-card chart-percent-card">
                <div class="au-card-inner">
                  <h3 class="title-2 tm-b-5">char by %</h3>
                  <div class="row no-gutters">
                    <div class="col-xl-6">
                      <div class="chart-note-wrap">
                        <div class="chart-note mr-0 d-block">
                          <span class="dot dot--blue"></span>
                          <span>products</span>
                        </div>
                        <div class="chart-note mr-0 d-block">
                          <span class="dot dot--red"></span>
                          <span>services</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="percent-chart">
                        <canvas id="percent-chart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="au-card chart-percent-card">
                <div class="au-card-inner">
                  <h3 class="title-2 tm-b-5">char by %</h3>
                  <div class="row no-gutters">
                    <div class="col-xl-6">
                      <div class="chart-note-wrap">
                        <div class="chart-note mr-0 d-block">
                          <span class="dot dot--blue"></span>
                          <span>products</span>
                        </div>
                        <div class="chart-note mr-0 d-block">
                          <span class="dot dot--red"></span>
                          <span>services</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="percent-chart">
                        <canvas id="percent-chart2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h2 class="title-1 m-b-25">Earnings By Items</h2>
              <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                  <thead>
                    <tr>
                      <th>date</th>
                      <th>order ID</th>
                      <th>name</th>
                      <th class="text-right">price</th>
                      <th class="text-right">quantity</th>
                      <th class="text-right">total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2018-09-29 05:57</td>
                      <td>100398</td>
                      <td>iPhone X 64Gb Grey</td>
                      <td class="text-right">$999.00</td>
                      <td class="text-right">1</td>
                      <td class="text-right">$999.00</td>
                    </tr>
                    <tr>
                      <td>2018-09-28 01:22</td>
                      <td>100397</td>
                      <td>Samsung S8 Black</td>
                      <td class="text-right">$756.00</td>
                      <td class="text-right">1</td>
                      <td class="text-right">$756.00</td>
                    </tr>
                    <tr>
                      <td>2018-09-27 02:12</td>
                      <td>100396</td>
                      <td>Game Console Controller</td>
                      <td class="text-right">$22.00</td>
                      <td class="text-right">2</td>
                      <td class="text-right">$44.00</td>
                    </tr>
                    <tr>
                      <td>2018-09-26 23:06</td>
                      <td>100395</td>
                      <td>iPhone X 256Gb Black</td>
                      <td class="text-right">$1199.00</td>
                      <td class="text-right">1</td>
                      <td class="text-right">$1199.00</td>
                    </tr>
                    <tr>
                      <td>2018-09-25 19:03</td>
                      <td>100393</td>
                      <td>USB 3.0 Cable</td>
                      <td class="text-right">$10.00</td>
                      <td class="text-right">3</td>
                      <td class="text-right">$30.00</td>
                    </tr>
                    <tr>
                      <td>2018-09-29 05:57</td>
                      <td>100392</td>
                      <td>Smartwatch 4.0 LTE Wifi</td>
                      <td class="text-right">$199.00</td>
                      <td class="text-right">6</td>
                      <td class="text-right">$1494.00</td>
                    </tr>
                    <tr>
                      <td>2018-09-24 19:10</td>
                      <td>100391</td>
                      <td>Camera C430W 4k</td>
                      <td class="text-right">$699.00</td>
                      <td class="text-right">1</td>
                      <td class="text-right">$699.00</td>
                    </tr>
                    <tr>
                      <td>2018-09-22 00:43</td>
                      <td>100393</td>
                      <td>USB 3.0 Cable</td>
                      <td class="text-right">$10.00</td>
                      <td class="text-right">3</td>
                      <td class="text-right">$30.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="copyright">
                <p>
                  Copyright © 2018 Colorlib. All rights reserved. Template by
                  <a href="https://colorlib.com">Colorlib</a>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    var ctx = document.getElementById("widgetChart1");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          type: "line",
          datasets: [
            {
              data: [78, 81, 80, 45, 34, 12, 40],
              label: "Dataset",
              backgroundColor: "rgba(255,255,255,.1)",
              borderColor: "rgba(255,255,255,.55)",
            },
          ],
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false,
          },
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0,
            },
          },
          responsive: true,
          scales: {
            xAxes: [
              {
                gridLines: {
                  color: "transparent",
                  zeroLineColor: "transparent",
                },
                ticks: {
                  fontSize: 2,
                  fontColor: "transparent",
                },
              },
            ],
            yAxes: [
              {
                display: false,
                ticks: {
                  display: false,
                },
              },
            ],
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 0,
            },
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
            },
          },
        },
      });
    }
    //WidgetChart 2
    var ctx = document.getElementById("widgetChart2");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: ["January", "February", "March", "April", "May", "June"],
          type: "line",
          datasets: [
            {
              data: [1, 18, 9, 17, 34, 22],
              label: "Dataset",
              backgroundColor: "transparent",
              borderColor: "rgba(255,255,255,.55)",
            },
          ],
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          responsive: true,
          tooltips: {
            mode: "index",
            titleFontSize: 12,
            titleFontColor: "#000",
            bodyFontColor: "#000",
            backgroundColor: "#fff",
            titleFontFamily: "Montserrat",
            bodyFontFamily: "Montserrat",
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [
              {
                gridLines: {
                  color: "transparent",
                  zeroLineColor: "transparent",
                },
                ticks: {
                  fontSize: 2,
                  fontColor: "transparent",
                },
              },
            ],
            yAxes: [
              {
                display: false,
                ticks: {
                  display: false,
                },
              },
            ],
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              tension: 0.00001,
              borderWidth: 1,
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4,
            },
          },
        },
      });
    }

    //WidgetChart 3
    var ctx = document.getElementById("widgetChart3");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: ["January", "February", "March", "April", "May", "June"],
          type: "line",
          datasets: [
            {
              data: [65, 59, 84, 84, 51, 55],
              label: "Dataset",
              backgroundColor: "transparent",
              borderColor: "rgba(255,255,255,.55)",
            },
          ],
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          responsive: true,
          tooltips: {
            mode: "index",
            titleFontSize: 12,
            titleFontColor: "#000",
            bodyFontColor: "#000",
            backgroundColor: "#fff",
            titleFontFamily: "Montserrat",
            bodyFontFamily: "Montserrat",
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [
              {
                gridLines: {
                  color: "transparent",
                  zeroLineColor: "transparent",
                },
                ticks: {
                  fontSize: 2,
                  fontColor: "transparent",
                },
              },
            ],
            yAxes: [
              {
                display: false,
                ticks: {
                  display: false,
                },
              },
            ],
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 1,
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4,
            },
          },
        },
      });
    }
    // Percent Chart
    var ctx = document.getElementById("percent-chart");
    if (ctx) {
      ctx.height = 280;
      var myChart = new Chart(ctx, {
        type: "doughnut",
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: [60, 40],
              backgroundColor: ["#00b5e9", "#fa4251"],
              hoverBackgroundColor: ["#00b5e9", "#fa4251"],
              borderWidth: [0, 0],
              hoverBorderColor: ["transparent", "transparent"],
            },
          ],
          labels: ["Products", "Services"],
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 55,
          animation: {
            animateScale: true,
            animateRotate: true,
          },
          legend: {
            display: false,
          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16,
          },
        },
      });
    }
    // Percent Chart
    var ctx = document.getElementById("percent-chart2");
    if (ctx) {
      ctx.height = 280;
      var myChart = new Chart(ctx, {
        type: "doughnut",
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: [60, 40],
              backgroundColor: ["#00b5e9", "#fa4251"],
              hoverBackgroundColor: ["#00b5e9", "#fa4251"],
              borderWidth: [0, 0],
              hoverBorderColor: ["transparent", "transparent"],
            },
          ],
          labels: ["Products", "Services"],
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 55,
          animation: {
            animateScale: true,
            animateRotate: true,
          },
          legend: {
            display: false,
          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16,
          },
        },
      });
    }

    //WidgetChart 4
    var ctx = document.getElementById("widgetChart4");
    if (ctx) {
      ctx.height = 115;
      var myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
          ],
          datasets: [
            {
              label: "My First dataset",
              data: [78, 81, 80, 65, 58, 75, 60, 75, 65, 60, 60, 75],
              borderColor: "transparent",
              borderWidth: "0",
              backgroundColor: "rgba(255,255,255,.3)",
            },
          ],
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false,
          },
          scales: {
            xAxes: [
              {
                display: false,
                categoryPercentage: 1,
                barPercentage: 0.65,
              },
            ],
            yAxes: [
              {
                display: false,
              },
            ],
          },
        },
      });
    }
  },
};
</script>
