module.exports = function(app) {

    app.get('/rota/teste', function(req, res) {
       
        res.render('christian/teste');
    });

    app.get('/christian/initiation', function(req, res) {
       
        res.render('christian/initiation');
    });

    app.get('/christian/table', function(req, res) {
    
        res.render('christian/table');
    });

    app.post('/christian/create', function(req, res) {
        
        db.collection('christians').save(req.body, (err, result) => {
            if(err) return console.log(err)

            console.log('salvo no banco');
            res.redirect('/')
        })
    });
};