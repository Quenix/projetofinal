module.exports = (app) => {

    app.get('/rota/teste', (req, res) => {
       
        res.render('christian/teste');
    });

    app.get('/christian/initiation', (req, res) => {
       
        res.render('christian/initiation');
    });

    app.get('/christian/table', (req, res) => {

        db.
        res.render('christian/table');
    });

    app.get('/christian/data', (req, res) => {

        db.collection('christians').find().toArray((err, results) => {
            if(err) return console.log(err)

            console.log(results);
        })
    });

    app.post('/christian/create', (req, res) => {
        
        db.collection('christians').save(req.body, (err, result) => {
            if(err) return console.log(err)

            console.log('salvo no banco');
            res.redirect('/')
        })
    });
};