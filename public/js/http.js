var http = function() {
  var header = "application/json";
  
  function get(url, callback) {
    __request('GET', url, null, callback);
  }
   
  function post(url, params, callback) {
    if(typeof params === 'function') {
      callback = params;
      params = null;
    }
    
    __request('POST', url, params, callback);
  }

  function put(url, params, callback) {
    if(typeof params === 'function') {
      callback = params;
      params = null;
    }
    
    __request('PUT', url, params, callback);
  }

  function del(url, callback) {
    __request('DELETE', url, null, callback);
  }

  function __request(method, url, params, callback) {
    var req = new XMLHttpRequest();

    req.open(method, url, true);
    req.setRequestHeader("Content-type", header);

    req.onerror = function() {
      if(req.responseText !== '')
        callback(JSON.parse(req.responseText), undefined, req.status);
      else
        callback(undefined, undefined, req.status);
    }

    req.onload = function() {
      if(req.readyState == 4 && req.status == 200) 
        callback(undefined, JSON.parse(req.responseText), req.status);
      else {
        try {
          callback(JSON.parse(req.responseText), undefined, req.status);
        } catch (err) {
          callback(undefined, undefined, req.status);
        }
      }
    }

    //La función send valida internamente que sea una petición que acepte parámetros, de lo contrario lo setea a null
    req.send(JSON.stringify(params));
  }

  return {
    header: header,
    get: get,
    post: post,
    put: put,
    delete: del
  };
}();