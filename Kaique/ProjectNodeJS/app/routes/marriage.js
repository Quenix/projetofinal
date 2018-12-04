module.exports = function(app) {

    app.get('/marriage/register', function(req, res){
        res.render('marriage/marriage');
    });


    app.get('/marriage/table', function(req, res){
        res.render('marriage/table');
    });
};