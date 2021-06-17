var express = require('express');
var fetch = require('node-fetch');

var app = express();

app.get('/', function(req, res){
    
fetch('https://60c80edcafc88600179f60be.mockapi.io/api/v1/veiculo')
    .then(resposta => resposta.json())
    .then(resposta => console.log(resposta))
    .then(res.send(resposta))

    
});

//servidor
app.listen(8080);