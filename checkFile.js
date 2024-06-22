const fs = require('fs');

const path = './resources/js/app.js';

fs.access(path, fs.constants.F_OK, (err) => {
  console.log(`${path} ${err ? 'does not exist' : 'exists'}`);
});

fs.access(path, fs.constants.R_OK, (err) => {
  console.log(`${path} ${err ? 'is not readable' : 'is readable'}`);
});
