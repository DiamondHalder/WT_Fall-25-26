

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

function renderLineGraph(chartData) {
    var svgWidth = 400;
    var svgHeight = 200;
    var padding = 40;   
    var points="";
    var xGap = (svgWidth - 2 * padding) / (chartData.length - 1 || 1);

    chartData.forEach((item, index) => {
        var x = padding + (index * xGap);
        var y = svgHeight - padding - (item.price / 2000) * (svgHeight - 2 * padding);
        points += x + "," + y + " ";
    });

    var svgHTML = `<svg width="${svgWidth}" height="${svgHeight}" style="background: #fdfdfd; border: 1px solid #ddd;">
        <line x1="${padding}" y1="${svgHeight-padding}" x2="${svgWidth-10}" y2="${svgHeight-padding}" stroke="#333" stroke-width="2"/>
        <line x1="${padding}" y1="10" x2="${padding}" y2="${svgHeight-padding}" stroke="#333" stroke-width="2"/>
        <polyline fill="none" stroke="#2196f3" stroke-width="3" points="${points}" />
        ${chartData.map((item, index) => {
            var x = padding + (index * xGap);
            var y = svgHeight - padding - (item.price / 2000) * (svgHeight - 2 * padding);
            return `<circle cx="${x}" cy="${y}" r="5" fill="#f44336"><title>${item.name}: ${item.price}</title></circle>`;
        }).join('')}
    </svg>`;

    document.getElementById("lineGraphContainer").innerHTML = svgHTML;
}
