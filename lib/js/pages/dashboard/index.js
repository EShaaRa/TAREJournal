jQuery(document).ready(function(){
     getLatestNotifications();
     
     setInterval(function(){
         getLatestNotifications();
     },10000);
    
     $('#monthly_sales').highcharts({
        chart:{
            animation:true,
            height:243
        },
        title: {
            text: 'Monthly Sales',
            x: -20 //center
        },
        subtitle: {
            text: 'for the month of Jan-2015 above 50,000 LKR',
            x: -20
        },
        xAxis: {
            categories: ['01', '04', '07', '09', '11', '16',
                '17', '23', '25', '27', '29', '31']
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
        series: [{
            name: 'Sales',
            data: [55000, 62000, 50000, 52500, 78000, 79430, 85000, 125000, 92000, 80000, 64000, 96000]
        }],
        credits:{enabled:false}
    });
    
    $('#sales_by_category').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            },
            animation:true,
            height:243
        },
        credits:{enabled:false},
        title: {
            text: 'Sales By Item Categories'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Item Category',
            data: [
                ['Samsung Galaxy S4',   45.0],
                ['Sony Xperia Z',       26.8],
                ['HTC One',    8.5],
                ['T-Mobile',     6.2],
                ['Others',   0.7]
            ]
        }]
    });
});


function getLatestNotifications()
{
    $.ajax({
        url:'../dashboard/getNotifications',
        type:'POST',
        dataType:'json',
        cache:false,
        async:true,
        success:function(data){
            var html='';
            $(data.notifications).each(function(key,val){
                html+='<a href="#" class="list-group-item">';
                html+='<span class="badge">'+val.count+'</span>';
                html+='<h4 class="list-group-item-heading">'+val.title+'</h4>';
                html+='<p class="list-group-item-text">'+val.description+'</p>';
                html+=' </a>';
            });
            
            $('#LatestNotifications').html("");
            $('#LatestNotifications').html(html);
        }
    });
}

