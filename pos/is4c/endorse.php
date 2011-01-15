<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head></head>
    <body bgcolor='#ffffff'>
        <?php
            require_once("session.php");
            require_once("printLib.php");
            require_once("printReceipt.php");
            require_once("connect.php");
            require_once("prehkeys.php");

            $endorseType = $_SESSION["endorseType"];

            if (strlen($endorseType) > 0) {
                $_SESSION["endorseType"] = "";

                switch ($endorseType) {
                    case "check":
                        frank();
                        break;

                    case "giftcert":
                        frankgiftcert();
                        break;

                    case "stock":
                        frankstock();
                        break;

                    case "classreg":
                        frankclassreg();
                        break;

                    default:
                        break;
                }
            }
        ?>
    </body>
</html>

