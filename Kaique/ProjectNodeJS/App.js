var app = require('./config/server');

/*
var routerHome = require('./app/routes/index');
var routerInitiation = require('./app/routes/christian_initiation');
var routerTableChristian = require('./app/routes/table_christian');

routerHome(app);
routerInitiation(app);
routerTableChristian(app);
*/
app.listen(3001, function() {
    console.log('SERVIDOR RODANDO COM SUCESSO!');
});