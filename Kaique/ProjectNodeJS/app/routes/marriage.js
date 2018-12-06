module.exports = (app) => {

    app.get('/marriage/register', (req, res) =>{
        res.render('marriage/marriage');
    });


    app.get('/marriage/table', (req, res) => {
        res.render('marriage/table');
    });
};