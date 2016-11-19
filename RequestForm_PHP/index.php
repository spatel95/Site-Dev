<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>Software Selection</title>
            <h1>Title</h1>
        </head>
        <body>
            <form action="processRequst.php" method="post">
                <p>
                    <!--you can just use "placeholder" to do this too-->
                    First Name: <input type="text" name="firstName" title="firstName"
                                value="i.e: John" onfocus="inFocus(this)"
                                onblur="inBlur(this)"/>&nbsp;&nbsp;
                    Last Name: <input type="text" name="lastName" title="lastName"
                                value="i.e: Smith" onfocus="inFocus(this)"
                                onblur="inBlur(this)"/><br /><br />
                    Email:     <input type="text" name="lastName" title="lastName"
                                value="i.e: johnsmith@not.email.com" size="35" onfocus="inFocus(this)"
                                onblur="inBlur(this)"/><br /><br />
                </p>
                
                <p>
                    <div> Type of Delevery Service</div>
                    
                </p>
                
                <script type="text/javascript">
                    function inFocus(input) {
                        if (input.value === input.defaultValue) {
                            input.value="";
                            input.style.color="#000"
                        }
                    }
                    
                    function inBlur(input) {
                        if (input.value=="") {
                            input.value = i.defaultValue;
                            input.style.color = "#888";
                        }
                    }
                </script>
            </form>
        </body>
    
    </html>