<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>

<div id='world-map'>

</div>
<script type="text/javascript">
var url = "./interview.php"
fetch(url)
.then(function(resp) {
    return resp.json();
})
.then(function(data) {
    console.log(data);
});
</script>