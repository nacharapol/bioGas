<!DOCTYPE html>
<html>
<body>


<script>
var http = new XMLHttpRequest();
var url = '127.0.0.1:3000';
var params = 'orem=ipsum&name=binny';
http.open('GET', url, true);

//Send the proper header information along with the request
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
    }
}
//http.send(params);
</script>

</body>
</html>
