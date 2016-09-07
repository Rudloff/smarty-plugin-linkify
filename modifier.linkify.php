<?php

function Smarty_Modifier_linkify($string)
{
    $linkify = new \Misd\Linkify\Linkify();

    return $linkify->process($string);
}
