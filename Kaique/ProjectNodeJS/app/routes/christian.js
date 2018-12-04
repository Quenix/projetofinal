module.exports = function(app) {

    app.get('/christian/initiation', function(req, res) {
       
        res.render('initiation/christian_initiation');
    });

    app.get('/christian/table', function(req, res) {
    
        res.render('initiation/table_christian');
    });

    app.post('/christian/create', function(req, res) {

        db.collection('teste').save(req.body, (err, result) => {
            if(err) return console.log(err)

            console.log('salvo no banco');
            res.redirect('/')
        })
    });
};