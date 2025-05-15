requestAnimationFrame("dotenv").config();
const express = require("express");

const port = process.env.PORT;

const app = express();

app.get("/", (req, res)=>{
    res.send({
        message: "Developero",
    });
});

app.listen(port, () =>{
    console.log('Example app listening at port: ${port}');
});