

function loadCharts(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);

            renderBarChart(data.orderStats);
            
            renderLineGraph(data.productInfo);
        }
    };
    xhttp.open("GET", "../php/get_chart_data.php", true);
    xhttp.send();
}

function renderPieChart(ChartData) {
    var html = "<div style='display: flex; align-items: flex-end; height: 200px; border-left: 2px solid #333; border-bottom: 2px solid #333; padding: 10px;'>";
    chartData.forEach(item => {
        var height = (item.total_income / 5000) * 150; // Scaling
        html += `<div style="margin: 0 10px; text-align: center;">
                    <div style="background-color: #4caf50; width: 35px; height: ${height}px;" title="Income: ${item.total_income}"></div>
                    <div style="font-size: 10px; width: 35px; overflow: hidden;">${item.name}</div>
                 </div>`;
    });
    html += "</div>";
    document.getElementById("barChartContainer").innerHTML = html;

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