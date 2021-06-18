window.GOAL_ID = 'VGSSKEKR';

const params = new URLSearchParams(window.location.search);
const source = params.get('source');
if (source) {
  setCookie('source', source, 30);
}

if (getCookie('source') === 'google') {
  window.GOAL_ID = 'TRP6RKPB'
}

function setCookie(name, value, days) {
  let expires = ''
  if (days) {
      let date = new Date()
      date.setTime(date.getTime() + (days*24*60*60*1000))
      expires = '; expires=' + date.toUTCString()
  }
  document.cookie = name + '=' + (value || '')  + expires + '; path=/; SameSite=Lax;'
}

function getCookie(name) {
  var nameEQ = name + '='
  var ca = document.cookie.split(';')
  for(var i=0;i < ca.length;i++) {
      var c = ca[i]
      while (c.charAt(0)==' ') c = c.substring(1,c.length)
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length)
  }
  return null
}
