const vcard = require('vcards-js');


const createVCard = () => {

    const businessCard = vcard();

    businessCard.firstName = 'Eric';
    businessCard.middleName = 'J';
    businessCard.lastName = 'Nesser';
    businessCard.organization = 'ACME Corporation';

    return businessCard.getFormattedString();
}

module.exports = {
    createVCard
}