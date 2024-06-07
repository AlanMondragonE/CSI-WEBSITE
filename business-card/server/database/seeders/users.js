const { signData } = require('../../utils/jwt');
const { v4: uuidv4 } = require('uuid');
const connection = require('../connection');
const fs = require('fs').promises;
const ora = require('ora');


const createUsers = async () => {

    
    const spinner = ora({ text: 'Creando tarjetas digitales...', spinner: 'dots', color: 'magenta' }).start();
    
    const response = await fs.readFile("database/seeders/users.json");
    const users = JSON.parse(response);


    try {

        for (let index = 0; index < users.length; index++) {

            const uuid = uuidv4();
            const { name, phone, email, photo, divisionId, areaId } = users[index];
            const token = signData({ uuid, name, email, firstTime: true }, { expiresIn: '1h' });
            const date = new Date().toISOString().slice(0, 19).replace('T', ' ');

            await connection.query(`CALL strCreateUser('${uuid}','${token}', '${name}', '${phone}', '${email}', '${photo}', '${divisionId}','${areaId}', '${date}')`);

            
        }

        spinner.succeed('Tarjetas creadas con éxito');
        
        
    } catch (error) {  
        
        spinner.fail('Hubo un error al crear las tarjetas digitales');
        console.error(error);
    }
   
}

createUsers();
