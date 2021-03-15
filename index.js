const fs = require("fs");
const path = require("path");
const express = require("express");
const app = express();
const port = 3000;

let lang = "en";
let langlist = [];

/* EXPRESS INIT */

app.listen(port, () => {
  console.log(`Listening on ${port}`);
});

app.set("views", "./views");
app.set("view engine", "ejs");

app.use(express.static("public"));
app.use("/css", express.static(__dirname + "public/css"));
app.use("/assets", express.static(__dirname + "/public/assets"));

/* LOCALIZATION PARSING */

fs.readFile("./loc.json", "utf8", (err, jstring) => {
  try {
    const textContent = JSON.parse(jstring);
    console.log(jstring);
    console.log(Object.keys(textContent));
    langlist = Object.keys(textContent);
    // readlang(textContent[lang]);
  } catch (err) {
    console.log("Error parsing JSON string: ", err);
  }
});

// const readlang = (obj) => {
//   let art = document.getElementsByClassName("main")[0];
//   for (let key in obj) {
//     console.log(obj[key]);
//   }
// };

/* ROUTER HANDLING */

app.get("", (req, res) => {
  res.render("index");
  lang = "en";
});

app.get("/:lang", (req, res) => {
  if (!langlist.includes(req.params.lang)) {
    res.redirect("/");
    return;
  }
  lang = req.params.lang;
  res.render("index");
});

/* HTML MODIFICATION */

// const main = document.getElementsByClassName("main");
