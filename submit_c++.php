<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

    <title>Gabriella Mayorga's Final Project</title>

    <meta charset="utf-8" />

    <meta name="Author" content="Gabriella Mayorga" />

    <meta name="generator" content="Notepad++" />

    <link rel="stylesheet" type="text/css" href="./submit_c++.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="submit_c++.js"></script>

</head>

<body>

    <div class="navbar">
        <a href="main_page.html">Programming in a Flash</a>
        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">Click for Web Dev Info!
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
                <a href="contact.html">Contact</a>
                <a href="https://www.linkedin.com/in/gabriella-mayorga/">About</a>
                <a href="resources.html">Resources Used</a>
            </div>
        </div>
    </div>
	
	<div id="navmenu">
        <input type="button" id="toggleg1" value="+" onclick="showonlygroup('1')" /> C++
        <div class="group" id="divg1" style="display:none">
            <hr />
            <input type="button" id="toggle1" value="Study" onclick="window.location.href='study_c++.php'" />
            <div class="person" id='div1' style='display:none'>Study</div>
            <br />
            <hr />
            <input type="button" id="toggle2" value="Submit" onclick="window.location.href='submit_c++.php'" />
            <div class="person" id='div2' style='display:none'>Submit</div>
            <br />
            <hr />
            <input type="button" id="toggle3" value="Vote" onclick="window.location.href='vote_c++.php'" />
            <div class="person" id='div3' style='display:none'>Vote</div>
            <br />
            <hr />
        </div>
    </div>


    <div class="maintext">

        <h3>Submit a term and definition for review</h3>
        <?php

       echo '<form action="add_c++.php">' . "\n";
         
         echo " Term: <input type='text' name='term' />\n";
         echo "Definition: <input type='text' name='definition' />\n";
         
         echo "<input type='submit' />\n";
         
         
         echo '</form>' . "\n";
		 


		?>
    </div>


    <br style="clear: both;" />
    <div id="table">
        <hr />
        <!--
        This page created with tools learned from:
	<a href="http://elvis.rowan.edu/~kilroy/" 
	title="Link to my home page"
	style="margin-right: 5em;">
	D. Provine
	</a>
	-->
        <table style="width:100%" id="webline" title="validation and testing links">
            <tr>
                <td>
                    <div id="validation"> Valid:
                        <a href="http://validator.w3.org/check/referer">HTML5 /</a>
                        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
                            CSS3
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
