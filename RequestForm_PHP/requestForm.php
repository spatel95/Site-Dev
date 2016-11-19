<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <link rel= "stylesheet" href = "style.css" title = "style" type = "text/css"/>
            <title>Software Selection</title>
           
        </head>
        <body>
            <form action="processRequst.php" method="post">
                <div id = "border">
                                <h1 id="head" align="center">Order Request Form</h1>
                                <p id="subTitle">
                                    <!--you can just use "placeholder" to do this too-->
                                    First Name: <input type="text" name="firstName" title="first" placeholder=" i.e John" required/>&nbsp;&nbsp;
                                    Last Name: <input type="text" name="lastName" title="last" placeholder=" i.e Snow" required/><br /><br />
                                    Email:     <input type="text" name="email" title="email" placeholder =" i.e john_snow@crows.before.hoes.com" size="30" required/><br /><br />
                                </p>
                                <p>
                                    <div id="subTitle" >Shipping Method: </div>
                                    <input type="radio" name="delivery" value="USPS" checked="checked" />  USPS 
                                    <input type="radio" name="delivery" value="FedEx"/> FedEx
                                    <input type="radio" name="delivery" value="UPS"/>   UPS  
                                    <input type="radio" name="delivery" value="Other"/> Other
                                </p>

                                <p >
                                    <div id="subTitle"> Softwares: </div>
                                     <?php include 'softwares.php';

                                        $sftwr = $softwares;?>
                                        <select name="softwareList[]" multiple="multiple">
                                        <?php foreach ($sftwr as $key => $value):?>
                                            <option value='<?=$key?>'><?=$key?>&nbsp;($<?=$value?>)</option>

                                        <?php endforeach ?>
                                        </select>
                                    
                                </p>

                                <p>
                                   <div id="subTitle"> Order Specification </div> 
                                   <textarea rows="5" cols="65" name="description"></textarea>
                                </p>

                                <p>
                                    <input type="reset">
                                    <input type="submit">
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
                </div>
            </form>
        </body>
    
    </html>