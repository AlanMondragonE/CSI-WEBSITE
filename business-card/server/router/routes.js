
const { verifyData, signData } = require('../utils/jwt');
const { createVCard } = require('../utils/vcard');
const { getCard } = require('../database/models');

const express = require('express');
const router = express.Router();


//Descargar la terjeta digital
router.get('/downloadVCard', (req, res) => {

    const vCard = createVCard();

    res.set('Content-Type', 'text/vcard; name="business_card.vcf"');
    res.set('Content-Disposition', 'inline; filename="business_card.vcf"');
    res.send(vCard);

});


router.get('/viewCard', (req, res) => {

    try {

        const uuid = req.query.uuid;
        const token = signData({ uuid: uuid }, { expiresIn: '10m' });
        res.redirect('http://localhost/inolab-website/business-card?token=' + token);

    } catch (error) {

        console.error('Ocurrió un error al redirigir a la tarjeta.', error);

    }

});


router.post('/getCardByUUID', async (req, res) => {

    try {

        const { uuid } = req.body;
        const card = await getCard(uuid);

        res.json({
            message: card.message,
            status: card.status,
            data: card.data
        });

    } catch (error) {

        res.json({
            message: 'Ocurrió un error al obtener los datos: ' + error.message,
            status: 300,
            data: []
        
        })

    }


});

router.get('/getCardByToken', async (req, res) => {

    try {

        const user = verifyData(req);

        if (user.status !== 200) {
            throw new Error(user.message);
        }

        const card = await getCard(uuid);

        if (card.status !== 200) {
            throw new Error(card.message);
        }

        res.json({
            message: 'Datos obtenidos correctamente',
            status: 200,
            data: card.data
        });

    } catch (error) {

        res.json({
            message: 'Ocurrió un error al obtener los datos: ' + error.message,
            status: 300,
            data: []
        });

    }


});

module.exports = router;
