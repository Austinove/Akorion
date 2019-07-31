<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/ug/ug-all.js"></script>
</head>
<style type="text/css">
    
#container {
    height: 500px; 
    min-width: 310px; 
    max-width: 800px; 
    margin: 0 auto; 
}
.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}

</style>
<body>
<div id='Uganda-map'>

</div>
<script type="text/javascript">
var url = "http://localhost/KulabaBrian/interview.php"
fetch(url).then(function(resp) {
    return resp.json();
})
.then(function(data) {
    console.log(data)

data = data.map(function(el){
        return {name: el.district, z: parseInt(el.number), 'name': el.district}
    })


Highcharts.mapChart('Uganda-map', {
    chart: {
        map: 'countries/ug/ug-all'
    },

    title: {
        text: 'This is Brian Demo'
    },

    subtitle: {
        text: 'Uganda'
    },

    legend: {
        enabled: true
    },
     mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },
    series: [{
        name: 'District',
        color: '#BADA55',
        enableMouseTracking: false,
        tates: {
            hover: {
                color: '#BADA55'
            }
        }
    }, 
    {
        name: "Farmer's Information",
        joinBy: 'name',
        data: data,
        minSize: 10,
        maxSize: '50%',
        tooltip: {
            pointFormat: '{point.properties.name}: {point.z} Available farmers'
        },

         dataLabels: {
            enabled: true,
            format: '{point.properties.name}'
        }
    }]
 });



});


</script>
</body>
</html>
