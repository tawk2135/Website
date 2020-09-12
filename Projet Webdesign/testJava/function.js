function test()
{
    try 
    {
        alert("Bonjour tout le mon")
    }
     catch (erreur)
    {
        console.log("une erreur s'est produite");
    }
}
function lirenomex()
{
    try
     {
      var elementGras=document.getElementsByClassName("gras");
        for(var index=0; index<elementGras.length;index++)
        {
            elementGras[index].className +=" rouge";
        }
    }
    catch (error)
    {
        console.log("Une erreur s'est produite:"+error);
        
    }
    
}
function loop()
{
    compteur=0;
    while(compteur<5)
    {
        document.write("compteur:"+compteur+"<br>")
        ++compteur
    }
}
function lirenouveaunom()
{
  
}
function loopdowhile()
{
    compteur=1
    do
    {
        document.write(compteur+"fois 7 égale"+compteur*7+"<br>")
    }
    while(++compteur<=7)
}
function afficheelement()
{
    for(j=0;j<afficheelement.arguments.length;++j)
    document.write("<br>"+afficheelement.arguments[j]+"<br>")
}
