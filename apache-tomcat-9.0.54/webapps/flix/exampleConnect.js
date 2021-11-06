const oracledb = require('oracledb');

async function run() {

  let connection;

  const user_name = ""//Insert gatorlink id
  const user_pw = ""//Insert Oracledb specific password

  try {

    connection = await oracledb.getConnection({ user: user_name, password: user_pw, connectionString: "oracle.cise.ufl.edu:1521/orcl" });

    console.log("Successfully connected to Oracle Database");

    //selct from table
    result = await connection.execute(
      `select * from CITY`,);

    console.log("Print Result: \n", result, "\n");
    console.log(result.metaData);
    console.log(result.rows);


  } catch (err) {
    console.error(err);
  } finally {
    if (connection) {
      try {
        await connection.close();
      } catch (err) {
        console.error(err);
      }
    }
  }
}

run();