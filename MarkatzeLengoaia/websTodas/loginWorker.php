<html>  

<style></style>
<head>  
    <title>Worker's login PHP</title>  
    // insert style.css file inside index.html  
    <link rel = "stylesheet" type = "text/css" href = "style2.css">   
</head>  
<body>  
    <div id = "frm">  
        <h2>Login as Worker:</h2>  
        <form name="f1" action = "webWorkers.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Specify Id: </label>  
                <input type = "text" id ="id_worker" name  = "id_worker" required />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" required />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
    
    // validation for empty field   
    <script>  
            function validation()  
            {  
                var id=document.f1.id_worker.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Worker ID and password fields are empty. ");  
                    return false;  
                }
                else  
                {  
                    if(id.length=="") {  
                        alert("You must specify your worker ID to continue. ");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Please, enter a password to continue. ");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  