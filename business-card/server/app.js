require('dotenv').config();

const routes = require('./router/routes');
const express = require('express');
const cors = require('cors');
const app = express();
const port = process.env.APP_PORT;


app.use(express.json());
app.use(cors({
    origin: '*'
}));

app.use('/api', routes);

app.listen(port, () => {
    console.log(`Servidor iniciado en el puerto ${port}`);
});