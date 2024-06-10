// Mengatur font family dan warna font default baru untuk meniru gaya default Bootstrap
(Chart.defaults.global.defaultFontFamily =
  "Nunito, -apple-system,system-ui,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif"),
  (Chart.defaults.global.defaultFontColor = "#858796");

// Fungsi untuk mengambil data dan menginisialisasi grafik
function getData() {
  $.ajax({
    type: "GET",
    url: "backend.php",
    data: {
      functionName: "getDataPieChart",
    },
    success: function (response) {
      let data = JSON.parse(response);
      console.log(data);

      let labels = [];
      let values = [];
      let backgroundColors = [];

      data.forEach(function (item, index) {
        labels.push(item.tipe_fswm);
        values.push(item.jumlah);
        backgroundColors.push(index % 2 === 0 ? 'rgba(255, 99, 132, 0.2)' : 'rgba(54, 162, 235, 0.2)'); // Pink and dark blue
      });

      // Inisialisasi grafik dengan data yang diambil
      var ctx = document.getElementById("myPieChart");
      var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
          labels: labels,
          datasets: [
            {
              data: values,
              backgroundColor: backgroundColors,
              hoverBackgroundColor: backgroundColors.map(color => color.replace('0.2', '0.4')),
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            },
          ],
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
          },
          legend: {
            display: false,
          },
          cutoutPercentage: 80,
        },
      });
    },
  });
}

// Panggil fungsi untuk mengambil data dan menginisialisasi grafik
getData();
