<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>
    <script src="https://kit.fontawesome.com/b3c27dd02c.js" crossorigin="anonymous"></script>

    <title>Lab Exercise 3</title>
</head>
<body>
    <header class="header-fix">
        <div class="header-container">     
        <h1><i class="fa-solid fa-table"></i> Forms</h1>
        </div>  
    </header>
       <section id="LoginForm">
           <div class="container">
                
                    <aside>
                        <h2><i class="fa-solid fa-question"></i>Info</h2>
                        <ul>
                            <li><b>method: POST</b></li>
                            <li><b>Mandatory: fields</b></li>
                            <li><b>Standard field: text and password</b></li>
                            <li><b>Checkbox: heckbox</b></li>
                            <li><b>Standard button: submit</b></li>
                        </ul>
                    </aside>

                    <h2>Login Form</h2>
                    <p>Standard form to enter these <b>login credentials.</b></p>
                    
                    <br/>
                    <br/>
                <article>
                    <form action="LoginForm" method="POST" class="FormElement" name="form">
                        <label>Enter your username: </label>
                        <input type="text" name="username"/>
                        <br/>
                        <br/>
                        <label>Enter your password: </label>
                        <input type="password" name="password"/>
                        <br/>

                        <input type="checkbox" id="checkbox"/>
                        <label>Remember me</label>
                        <br/>
                        <input type="submit" value="login" name="form" id="loginbutton"/>
                    </form>

                
                    <?php if(!empty($_POST) && $_POST['form']){ ?>
                        <div class="result">
                            <b>Values returned by the form:</b><br/>
                            <ul>
                                <?php foreach($_POST as $key => $value) {echo'<li>'.$key.'=>'.$value.'</li>';
                                }?>
                            </ul>
                        </div>
                    <?php }?>

                </article>
                
           </div>
       </section>





</body>
</html>

