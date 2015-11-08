/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(document).ready(function() {

    var dateArray;
    var salesArray;

    $.ajax({
        url: '../report/monthsalesbydate',
        type: 'POST',
        dataType: 'json',
        cache: false,
        async: false,
        data: {},
        success: function(jsonData) {
            dateArray = jsonData.dates;
            salesArray = jsonData.sales;

            $('#SalesChart').highcharts({
                title: {
                    text: 'Monthly Sales',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Sales for the current month',
                    x: -20
                },
                xAxis: {
                    categories: dateArray
                },
                yAxis: {
                    title: {
                        text: 'Total Sales (LKR)'
                    },
                    plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                },
                tooltip: {
                    valueSuffix: 'LKR'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                        name: 'Sales',
                        data: salesArray
                    }]
            });
        }
    });
    
    $('#btnPrint').click(function(){
        wait();
        var location =window.location.href;
        $.ajax({
            url:'../report/convertpdf',
            type:'POST',
            dataType:'json',
            cache:false,
            async:false,
            data:{from:location,pdf_name:'monthlyreport.pdf'},
            success:function(jsonData){
                closewait();
               window.open('../PDFConverts/monthlyreport.pdf','__blank');
            }
        });
    });
});