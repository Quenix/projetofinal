var app = require('./config/server');

const MongoClient = require('mongodb').MongoClient 
const uri = "mongodb://sissoadmin:sissoadmin1@ds121599.mlab.com:21599/sissodb"

MongoClient.connect(uri, (err, client) => {
  if(err) return console.log(err)

  db = client.db('sissodb')

  app.listen(3001, () => {
    console.log('SERVIDOR RODANDO COM SUCESSO!');
  });
})
