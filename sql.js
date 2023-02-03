
const mysql = require('mysql');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'password',
  database: 'test'
});

// Use the user-provided value as a parameter in the query
const query = `SELECT * FROM users WHERE username = '${req.body.username}'`;
connection.query(query, (err, result) => {
  if (err) {
    // Handle the error
  } else {
    // Do something with the result
    console.log(result);
  }
});
