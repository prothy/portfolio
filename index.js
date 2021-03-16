const fs = require("fs");
const path = require("path");
const express = require("express");
const app = express();
const port = 3000;

const filetext = JSON.parse(fs.readFileSync("./loc.json", "utf8"));
const langlist = Object.keys(filetext);
let lang = "en";

/* EXPRESS INIT */

app.listen(port, () => {
  console.log(`Listening on ${port}`);
});

app.set("views", "./views");
app.set("view engine", "ejs");

app.use(express.static("public"));
app.use("/css", express.static(__dirname + "public/css"));
app.use("/assets", express.static(__dirname + "/public/assets"));

/* ROUTER HANDLING */

app.get("", (req, res) => {
  res.redirect(`/${lang}`);
});

app.get("/:lang", (req, res) => {
  if (!langlist.includes(req.params.lang)) {
    res.redirect("/");
    return;
  }
  lang = req.params.lang;
  res.render("index", filetext[lang]);
});

/* HTML MODIFICATION */

// const main = document.getElementsByClassName("main");
