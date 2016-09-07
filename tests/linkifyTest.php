<?php

namespace Smarty_Modifier_linkify\Test;

class linkifyTest extends \PHPUnit_Framework_TestCase
{
    public function testLinkifyModifier()
    {
        $this->assertEquals(
            'coucou',
            Smarty_Modifier_linkify('coucou')
        );
        $this->assertEquals(
            'Link to my website: <a href="https://rudloff.pro/">https://rudloff.pro/</a>',
            Smarty_Modifier_linkify('Link to my website: https://rudloff.pro/')
        );
        $this->assertEquals(
            'Contact me: <a href="mailto:contact@rudloff.pro">contact@rudloff.pro</a>',
            Smarty_Modifier_linkify('Contact me: contact@rudloff.pro')
        );
    }
}
