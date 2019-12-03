<!doctype html>
<html lang="en">
    <head>
        <meta charset="GB2312">
        <title>Cruise Client</title>
	  <meta http-equiv="refresh" content="60">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Cruise Client" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Cruise <span>Client</span></h1>
            </header>
		<div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="tologin" class="animate form">
                            <h1>Table</h1> 
			                <p><?php include 'Clien.php';?></p>
                            <form  action="add.php" method="post"> 
                                <h1>Info</h1>
                                <p>
                                    <h2>Class:   single-chip</h2>
                                    <h2>Time:    16:00-18:00</h2>
                                    <h2>Teacher: Dr. Du</h2>
                                </p>
                                <h1>Add</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p class="Add button"> 
                                    <input type="submit" name="submit" value="Add" /> 
								</p>
                            </form>
                        </div>
				   <form  action="cla.php" method="post"> 
                                <h1>Clear</h1> 
                                <p class="cla button"> 
                                    <input type="submit" name="submit" value="cla" /> 
								</p>
                            </form>
		    </div>
                </div>  
        </div>
    </body>
</html>
