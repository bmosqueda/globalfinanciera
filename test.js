<html>
  paginita
</html>
<script>
  (()=> {
    let fd = new FormData();
    fd.append('name','carlos');
    fd.append('email','cfr4123@gmail.com');
    fd.append('phone','3123175976');
    fd.append('message','mensaje largo');
  
    fetch('/send-emai.php',{
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: fd
    }).then(res => {
      console.log(res.status)
      console.log(res.body)
      console.log(res.statusText)
    });
  })()
</script>
