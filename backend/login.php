<html>  
<head>  
    <title>PHP login system</title>   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "loginattempt.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Student Email: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Address: </label>  
                <input type = "text" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <button type="submit" value="submit" name="but_submit" class="login">Login</button> 
            </p>  
        </form> 
			<h1> If you didn't register, register first</h1>
			<a href="reg.php"><input type="button" value="Register"></a>
    </div>  
    
    <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html> 