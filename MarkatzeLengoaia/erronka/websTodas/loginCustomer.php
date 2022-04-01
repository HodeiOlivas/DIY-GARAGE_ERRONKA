<html>  

<style></style>
<head>  
    <title>PHP login system</title>  
    // insert style.css file inside index.html  
    <link rel = "stylesheet" type = "text/css" href = "style2.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "webCustomers.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" size="15" required />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" size="15" required />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" style="height: 30px;width: 100px" value = "Login" /> 
                <br>
                <p style="font-size:15px"><a href="select_employees.php">Sign up now FOR FREE!</a></p>
            </p>  
        </form>  
        
    </div>  
    
    // validation for empty field   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
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