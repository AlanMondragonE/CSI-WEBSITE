const connection = require('../connection');
const fs = require('fs').promises;
const ora = require('ora');


const createDivisions = async () => {
    
    const spinner = ora({ text: 'Creando divisiones...', spinner: 'dots', color: 'magenta' }).start();

    const response = await fs.readFile("database/seeders/divisions.json");
    const divisions = JSON.parse(response);

    try {


        for (let index = 0; index < divisions.length; index++) {

            const { description, icon, status } = divisions[index];
            const date = new Date().toISOString().slice(0, 19).replace('T', ' ');

            await connection.query(`CALL strCreateDivision('${description}', '${icon}', '${date}', '${status}')`);
            
        }

        spinner.succeed('Divisiones creadas con éxito');

    } catch (error) {

        spinner.fail('Ocurrió un error al crear las divisiones');
        console.error(error);
    }

}

createDivisions();