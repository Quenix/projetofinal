module.exports = function(app) {

    app.get('/christian/table', function(req, res) {
        res.render('initiations/table_christian');
    });
};