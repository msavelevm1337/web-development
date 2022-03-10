<?php

header("Content-Type: text/plain");

$identifier = isset($_GET['identifier']) ? $_GET['identifier'] : 'null';

if ($identifier !== null)
{
    if (ctype_alpha(substr($identifier, 0, 1)))
    {
        if (ctype_alnum($identifier))
        {
            echo 'yes';
        }
        else
        {
            echo 'no\ncontains special chars';
        }
    }
    else
    {
        echo "строка1<br>";
        echo "строка2";
    }
}

?>