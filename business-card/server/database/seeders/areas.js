const connection = require('../connection');
const fs = require('fs').promises;
const ora = require('ora');


const createAreas = async () => {

    const spinner = ora({ text: 'Creando areas...', spinner: 'dots', color: 'magenta' }).start();
   
    const response = await fs.readFile("database/seeders/areas.json");
    const areas = JSON.parse(response);


    try {


        for (let index = 0; index < areas.length; index++) {

            const { description, status } = areas[index];
            const date = new Date().toISOString().slice(0, 19).replace('T', ' ');

            await connection.query(`CALL strCreateArea('${description}', '${date}', '${status}')`);
            
        }

        spinner.succeed('Areas creadas con éxito');

    } catch (error) {

        spinner.fail('Ocurrió un error al crear las areas');
        console.error(error);
    }

}

createAreas();