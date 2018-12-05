var app = require('./config/server');

/*
var routerHome = require('./app/routes/index');
var routerInitiation = require('./app/routes/christian_initiation');
var routerTableChristian = require('./app/routes/table_christian');

routerHome(app);
routerInitiation(app);
routerTableChristian(app);
*/

const MongoClient = require('mongodb').MongoClient 
const uri = "mongodb://sissoadmin:sissoadmin1@ds121599.mlab.com:21599/sissodb"

MongoClient.connect(uri, (err, client) => {
  if(err) return console.log(err)

  db = client.db('sissodb')

  app.listen(3001, function() {
    console.log('SERVIDOR RODANDO COM SUCESSO!');
});
})
