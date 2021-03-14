const fs = require("fs");

fs.readFile("./loc.json", "utf8", (err, jstring) => {
  if (err) {
    console.log("Something went wrong reading loc file: ", err);
    return;
  }

  try {
    const artText = JSON.parse(jstring);
    console.log(jstring);
    // for (const element of Object.values(artText.en)) {
    //   console.log(element[0]);
    // }
  } catch (err) {
    console.log("Error parsing JSON string: ", err);
  }
});
