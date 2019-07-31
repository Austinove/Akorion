var url = "./interview.php"
fetch("url")
.then(function(resp) {
	return resp.json();
})
.then(function(data) {
	console.log(data);
});