var xml =createXmlHttpRequestObject();
// creating object
function createXmlHttpRequestObject(){
    
    var xmlHttp;
    
    if(window.XMLHttpRequest){
        xmlHttp = new XMLHttpRequest();
        }
        else{
            xmlHttp = new ActiveXobject("Microsoft.XMLHTTP");
            
        }
    return xmlHttp;
}

// onload

function process(){
    if(xmlHttp){
        try { 
            xmlHttp.open("GET","movies.xsl", true);
            xmlHttp.onreadystatechange = handleStateChange;
            xmlHttp.send(null);
    
   }
   catch(e){
        alert(e.toString());
      }
    }
    
// for change of state
function handleStateChange(){
    if(xmlHttp.readyState==4){
        if(xmlHttp.statis==200){
            try{
                handleRespose();
            }
            catch(e){
                alert(e,toString());
            }
            
            }
            else{alert(xmlHttp.statusText);
            }
        }
    }
    
    //handle the server respones
    function handleRespose(){
        var xmlResponse = xml.responseXml;
        root = xmlResponse.documentElement;
        title = root.getElementsByTagName("title");
        rank = root.getElementsByTagName("rank");
        year= root.getElementsByTagName("year");
        rating = root.getElementsByTagName("rating");
    {
        var stuff = "";
        for(var i=0; i<names.length;i++){
            stuff=title.item(i).firstChild.data+rank.item(i).firstChild.data+year.item(i).firstChild.data+rating.item(i).firstChild.data;
        }
        targetDiv = document.getElementById("targetDiv");
        targetDiv.innerHTML=stuff;
    }
    