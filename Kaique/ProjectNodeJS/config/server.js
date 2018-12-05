/** MÓDULO DE CONFIGURAÇÃO DO SERVER **/

const express = require('express');
const consign = require('consign');
const bodyParse = require('body-parser');

const app = express();

/* MOTOR DE GERAÇÃO DE VIEWS */
app.set('view engine', 'ejs');


app.use('/assets', express.static('assets'));

/* DIRETÓRIO DE VIEWS PADRÃO */
app.set('views', './app/views');

app.use(bodyParse.urlencoded({extended: true}));

/* CONSIGN LÊ AS ROTAS E ENVIA(INTO) PARA O SERVER */
consign()
    .include('app/routes')
    .into(app);

module.exports = app;