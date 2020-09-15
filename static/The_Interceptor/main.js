
document.addEventListener("DOMContentLoaded",getflag())

function getflag(){
    
    request = new asyncRequest()
    request.open("GET", "request.php?gimme=1", true) 
    request.send()
    
}



function asyncRequest() {
        try {
            var request = new XMLHttpRequest()
        } catch (e1) {
            try {
                request = new ActiveXObject("Msxml2.XMLHTTP")
            } catch (e2) {
                try {
                    request = new ActiveXObject("Microsoft.XMLHTTP")
                } catch (e3) {
                    request = false
                }
            }
        }
        return request
}
