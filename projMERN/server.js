// server.js
const http = require("http");

http.createServer(
    function(request, response) 
    {    
        response.writeHead(200, {"Content-Type": "text/html"});
        response.write("<h1>Hello, Node.js!</h1>"); 
        response.write("<h3>Jace Zavarelli - n76t836</h3>");  
        response.write("<p>Running Node Server on port 3046.</p> <p>Github Link:  <a href='https://github.com/Jzavarelli/csci-331-fall2022-public'>https://github.com/Jzavarelli/</a></p>"); 
        response.end();
    }
    
).listen(3046);