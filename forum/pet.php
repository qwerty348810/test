<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <title>Pet</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>        
    </head>
    <body>
        <table align="center" class="parent">
            <tr>
                <td>
                    <a href="index.php?action=register">Registration</a>
                </td>
                <td>
                    <a href="index.php?action=login">Login</a>
                </td>
                <td>
                    Search
                </td>
                <td>
                    <input name="keywords" type="text" maxlength="28" />
                </td>
            </tr>
        </table>
         <table align="center" class="child">
            <tr>
                <td width="17%">
                    <a class="menu" href="index.php?action=page_not">General</a>
                </td>
                <td width="17%">
                    <a class="menu" href="index.php?action=page_not">Forums</a>
                </td>
                <td width="17%">
                    <a class="menu" href="index.php?action=page_not">Files</a>
                </td>
                <td width="16%">
                    <a class="menu" href="index.php?action=page_not">Info Base</a>
                </td>
                 <td width="18%">
                    <a class="menu" href="index.php?action=page_not">Documentation</a>
                </td>
                 <td>
                    <a class="menu" href="index.php?action=page_not">FAQ</a>
                </td>
            </tr>
        </table>              
        <form action="pet.php" method="get" >
            <div class="forum">
                <input type="hidden"  name="action" value="variable_coment" />
                <input class="b1" align="middle" type="submit" value="NEW COMENT"/>           
            </div>                                 
            <table align="center" cellspacing="1" border="1">
                <tr>
                    <td width="60%" class="colortopic">
                        SUBJECT
                    </td>
                    <td width="15%" class="colortopic">
                        AUTHOR
                    </td>
                    <td class="colortopic">
                        REPLIES
                    </td>
                    <td class="colortopic">
                        VIEWS
                    </td>
                    <td width="20%" class="colortopic" >

                    </td>
                <tr>
                    <td  class="colortopic">
                        <p>Coment<Br>
                        <textarea name="text" cols="40" rows="3"></textarea></p>   
                    </td>
                    <td  class="colortopic">

                    </td>
                    <td class="colortopic">

                    </td>
                    <td class="colortopic">

                    </td>
                    <td  class="colortopic" >

                    </td>
                </tr>               
            </table>
        </form>
    </body>
</html>    