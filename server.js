const express = require("express");
const staticDir = __dirname + "/public";

var app = express();

app
  .use(express.static(staticDir))
  .listen(3000);
