 
//  export function getCookie(name) {
//     var dc = document.cookie;
//     var prefix = name + "=";
//     var begin = dc.indexOf("; " + prefix);
//     if (begin == -1) {
//         begin = dc.indexOf(prefix);
//         if (begin != 0) return null;
//     } else {
//         begin += 2;
//         var end = document.cookie.indexOf(";", begin);
//         if (end == -1) {
//          end = dc.length;
//         }
//     }
//     // because unescape has been deprecated, replaced with decodeURI
//     //return unescape(dc.substring(begin + prefix.length, end));
//     return decodeURI(dc.substring(begin + prefix.length, end));
// }

export function checkCookieAndSet(cookieName, value, days) {
  
  var cookieValue = getCookie(cookieName);

  if(cookieName == undefined){
    setCookie(cookieName, value, days);
    // console.log(cookieName+" = "+cookieValue);
  }else{
    //console.log(cookieName+" = "+cookieValue);
  }

  console.log(cookieName+" = "+cookieValue);
  return getCookie(cookieName);;
}

export function getCookie(cookieName) {
  let cookie = {};

  document.cookie.split(';').forEach(function(el) {
    let [key,value] = el.split('=');
    cookie[key.trim()] = value;
  })

  return cookie[cookieName];
}


export function setCookie(name, value, days) {
    if (days)
  {
    var date = new Date();
    date.setTime(date.getTime()+days*24*60*60*1000); // ) removed
    var expires = "; expires=" + date.toGMTString(); // + added
  }
  
  else
    var expires = "";
  document.cookie = name+"=" + value+expires + ";path=/"; // + and " added
  }
  
   function delete_cookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  }