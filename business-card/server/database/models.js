const connection = require('./connection');


const getCard = async (uuid) => {

  try {

    const [results] = await connection.query(`CALL strGetCard('${uuid}')`);

    return {
      message: 'Datos obtenidos correctamente',
      status: 200,
      data: results[0][0]
    }

  } catch (error) {

    return {
      message: 'Ocurrió un error al obtener los datos: ' + error.message,
      status: 300,
      data: []
    }

  }

  
}


module.exports = {
  getCard
}