
function removejscssfile(filename, filetype){
    var targetelement=(filetype=="js")? "script" : (filetype=="css")? "link" : "none" //determine element type to create nodelist from
    var targetattr=(filetype=="js")? "src" : (filetype=="css")? "href" : "none" //determine corresponding attribute to test for
    var allsuspects=document.getElementsByTagName(targetelement)
    for (var i=allsuspects.length; i>=0; i--){ //search backwards within nodelist for matching elements to remove
    if (allsuspects[i] && allsuspects[i].getAttribute(targetattr)!=null && allsuspects[i].getAttribute(targetattr).indexOf(filename)!=-1)
        allsuspects[i].parentNode.removeChild(allsuspects[i]) //remove element by calling parentNode.removeChild()
    }
}

function loadjscssfile(filename, filetype){
    if (filetype=="js"){ //if filename is a external JavaScript file
        var fileref=document.createElement('script')
        fileref.setAttribute("type","text/javascript")
        fileref.setAttribute("src", filename)
    }
    else if (filetype=="css"){ //if filename is an external CSS file
        var fileref=document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css");
        fileref.setAttribute("href", filename)
    }
    if (typeof fileref!="undefined")
        document.getElementsByTagName("head")[0].appendChild(fileref)
    }


    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }
    
      function checkCookie() {
        var value = getCookie("kontrast");
        if (value == "k2") {
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", "http://localhost/wp/hub/wp-content/themes/oees_hub2/acc/k2.css")
            document.getElementsByTagName("head")[0].appendChild(fileref)
        }
        if (value == "k3") {
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", "http://localhost/wp/hub/wp-content/themes/oees_hub2/acc/k3.css")
            document.getElementsByTagName("head")[0].appendChild(fileref)
        }
        if (value == "k4") {
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", "http://localhost/wp/hub/wp-content/themes/oees_hub2/acc/k4.css")
            document.getElementsByTagName("head")[0].appendChild(fileref)
        }
        var value = getCookie("czcionka");
        if (value == "c2") {
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", "http://localhost/wp/hub/wp-content/themes/oees_hub2/acc/c2.css")
            document.getElementsByTagName("head")[0].appendChild(fileref)
        }
        if (value == "c3") {
            var fileref=document.createElement("link");
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", "http://localhost/wp/hub/wp-content/themes/oees_hub2/acc/c3.css")
            document.getElementsByTagName("head")[0].appendChild(fileref)
        }
      }
    checkCookie();

function addCookie(name, val){
    var d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = name + "=" + val + ";" + expires + ";path=/";
}
