var myPieChart= null;
var myBarChart= null;

function loadCharts(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);

            document.getElementById("pieStatus").style.display = "none";
            document.getElementById("barStatus").style.display = "none";

            renderPieChart(data.pieChartData);
            renderBarChart(data.barChartData);
        }
    };
    xhttp.open("GET", "../php/get_chart_data.php", true);
    xhttp.send();
}

function renderPieChart(ChartData) {
    var labels = ChartData.map(item => item.name);
    var values = ChartData.map(item => item.total_value);
    var ctx = document.getElementById('pieChartCanvas').getContext('2d');

    if (myPieChart) {
        myPieChart.destroy();
    }

    myPieChart = new Chart(ctx, {
        type: 'pie',
        data: { labels: labels,datasets: [{ data: values, backgroundColor:['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'] }] }
        });

}

function renderBarChart(ChartData) {
    var labels = ChartData.map(item => item.name);
    var values = ChartData.map(item => item.price);
    var ctx = document.getElementById('barChartCanvas').getContext('2d');

    if (myBarChart) {
        myBarChart.destroy();
    }

    myBarChart = new Chart(ctx, {
        type: 'bar',
        data: { labels: labels, datasets: [{ data: values, backgroundColor: '#4caf50' }] },
        options: { scales: { y: { beginAtZero: true } } }

    });
}