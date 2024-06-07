require('dotenv').config();

const jwt = require('jsonwebtoken');
const sign = process.env.JWT_SECRET;



const signData = (data, expiration) => {

    const token = jwt.sign(data, sign, expiration);
    return token;

}


const verifyData = (req) => {

    try {

        const authorization = req.headers['Authorization'];

        if(!authorization){
            throw new Error('No se proporcionó un token de autentificación');
        }

        const token = authorization.split(' ')[1];
        const decoded = jwt.verify(token, sign);

        return {
            status: 200,
            message: 'Token validado correctamente',
            data: decoded
        }

    } catch (error) {

        if (error instanceof jwt.JsonWebTokenError) {

            return {
                message: `Token inválido, verifica la información proporcionada`,
                status: 500,
                data: null
            }

        } else {

            return {
                message: `Ocurrió un error al autentificar al usuario: ${error}`,
                status: 500,
                data: null
            }
        }
    }

}


module.exports = {
    signData,
    verifyData
}