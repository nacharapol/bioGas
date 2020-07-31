const express = require('express')
const app = express()
const bodyParser = require('body-parser')
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
	extended: true
}));
app.use(function (req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "*");
    res.header("Access-Control-Allow-Methods", "*");
    //res.header("Access-Control-Max-Age", 86400);
    next();
  })
var data = {
    first: 'Ada',
  last: 'Lovelace',
  born: 25
}
app.get('/', function (req, res) {
 // console.log(req.body);
  res.send(data)
})
 
app.listen(3000, () => {
    console.log("server starting")
  });