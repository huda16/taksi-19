var result = [
  { x: "18:00", y: "230" },
  { x: "19:00", y: "232" },
  { x: "20:00", y: "236" },
  { x: "22:00", y: "228" },
];
var labels = result.map((e) => moment(e.x, "HH:mm"));
var data = result.map((e) => +e.y);

var ctx = document.getElementById("grafikMaskerPengunjung").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: labels,
    datasets: [
      {
        label: "Jumlah Pengunjung",
        data: data,
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(255, 159, 64, 0.2)",
        ],
        borderColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    title: {
      display: true,
      text: "Grafik Masker Pengunjung",
    },
    legend: {
      display: true,
      labels: {
        position: "bottom",
        text: "waktu",
      },
    },
    scales: {
      xAxes: [
        {
          type: "time",
          time: {
            unit: "hour",
            displayFormats: {
              hour: "HH:mm",
            },
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
  },
});
