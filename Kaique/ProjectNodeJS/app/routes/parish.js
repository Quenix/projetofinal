module.exports = (app) => {

    app.get('/parish', (req, res) => {

        res.render('parish/create');
    });
}