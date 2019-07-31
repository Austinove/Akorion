var data = [{"Country":"Australia","persons":"5","CountryCode":"AU"}, 
{"Country":"India","persons":"8","CountryCode":"IN"}, 
{"Country":"Mexico","persons":"4","CountryCode":"MX"}, 
{"Country":"Spain","persons":"2","CountryCode":"ES"},
{"Country":"United States","persons":"4","CountryCode":"US"}]
data = data.map(function(el){
	return {name: el.Country, z: parseInt(el.persons), 'iso-a2': el.CountryCode}
})

Highcharts.mapChart('world-map', {
    chart: {
        borderWidth: 1,
        map: 'custom/world'
    },

    title: {
        text: 'World population 2013 by country'
    },

    subtitle: {
        text: 'Demo of Highcharts map with bubbles'
    },

    legend: {
        enabled: false
    },
     mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },
    series: [{
        name: 'Countries',
        color: '#E0E0E0',
        enableMouseTracking: false
    }, {
        type: 'mapbubble',
        name: 'Population 2016',
      	joinBy: 'iso-a2',//'iso-a3', 'code3'],
        data: data,
        minSize: 4,
        maxSize: '12%',
        tooltip: {
            pointFormat: '{point.properties.name}: {point.z} thousands'
        }
    }]
 });
