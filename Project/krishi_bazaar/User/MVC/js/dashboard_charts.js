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
}