var express = require("express");
var app = express();

// set port
var port = process.env.PORT || 8080;

// allows all images, css static stuff to run in __dirname variable
// (evaluates to folder name, wherever our code is)
app.use(express.static(__dirname));

// routes
app.get("/", function(req, res) {
  res.render("index");
});

app.listen(port, function() {
  console.log("app running");
});
