module.exports = function(app) {

    app.get('/christian/initiation', function(req, res) {
        res.render('initiations/christian_initiation');
    });

    app.post('/christian/create', function(req, res) {

        var teste = req.body;
        res.render(teste);
    });
};