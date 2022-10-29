window.addEventListener("DOMContentLoaded", domLoaded);

function domLoaded() 
{
   let convertButt = document.querySelector("#convertButton");
   convertButt.addEventListener("click", function() {

      let Celsi = convertFtoC(parseFloat(document.querySelector("#fInput").value));
      
      // let Fahren = convertCtoF(parseFloat(document.querySelector("#cInput").value));

      // if(document.querySelector("#cInput").value == " ") {

      //    convertCtoF(parseFloat(document.querySelector("#cInput").value));
      // }
      // else if(document.querySelector("#fInput").value == " ")
      // {
      //    convertFtoC(parseFloat(document.querySelector("#fInput").value));
      // }

      document.querySelector("#cInput").innerHTML = Celsi;
   });
}

function convertCtoF(degreesCelsius) 
{
   let Fahren = degreesCelsius * (9/5) + 32;
   return Fahren;
}

function convertFtoC(degreesFahrenheit) 
{
   let Celsi = (degreesFahrenheit - 32) * (5/9);
   return Celsi;
}
