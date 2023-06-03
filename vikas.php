
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
body{
    background:url('login.jpg')no-repeat;
}

        #form{
            width:25%;
            margin: 120px auto;
            padding: 50px;
            border-radius: 10px;       
        }
        #btn{
            background-color: red;
            padding:10px;
            font-size:lagre;
            border-radius:4px;
            cursor: pointer;
        }
        #vk{
            font-size:30px;
            color:red;
        }
        #nk{
            font-size:30px;
            color:blue;
        }
        #vikas{
            height: 100%;
            width: 100%;
        }

    </style>
     

</head>
<body>



<div id="form">
    <h1>Login Page</h1>
    <form name="form" method="POST" id="auth" >
        <label id="vk">UserName :</label>
        <input type="text" id="user" name="user"></br></br>
        <label id="nk">password :</label>
        <input type="password" id="pass" name="pass"></br></br>
        <input type="submit" id="btn" value="login" name="submit" >

      </form>
</div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>

const signupForm = document.querySelector('#auth');
signupForm.addEventListener("submit", function(event) {
  console.log(event);
  event.preventDefault();
});

   
</script>
</body>
</html>


