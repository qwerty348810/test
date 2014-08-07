<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" dir="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <title></title>
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
                    <input name=?"keywords" type=?"text" maxlength=?"28">?
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
        <div class="forum">
            <form action="pet.php" method="get" >
                <input class="b1" align="middle" type="submit" value="NEW TOPIC">
            </form>
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
                <td width="20%" class="colortopic">
                    LAST POSTER
                </td>
            </tr>
        </table>
    </body>
</html>    