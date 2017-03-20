function submit()
{
  //return input for graphViz
  var tokens;
  var pgm=document.getElementById('pgm').innerHTML;
  pgm=pgm.split("\n");
  pgm=pgm[1:];
  states=[]
var symbols=[]
var transitions=[]
var 
  for(i=0;i<pgm.length;i++)
  {
    tokens=pgm[i].split(" ");
    if(!tokens.length==3)
    {
      console.log("Error at line",i+1);
    }

  }

}
