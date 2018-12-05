module.exports = function(app){

    app.get('/parish', function(req, res) {

        res.render('parish/create');
    });
}