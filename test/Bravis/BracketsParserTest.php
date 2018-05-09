<?php

namespace Bravi;

use PHPUnit\Framework\TestCase;

class BracketsParserTest extends TestCase
{
    public function testIsBalanced()
    {
        $this->assertTrue(BracketsParser::isBalanced("(){}[]"));
        $this->assertTrue(BracketsParser::isBalanced("[{()}](){}"));
        $this->assertFalse(BracketsParser::isBalanced("[]{()"));
        $this->assertFalse(BracketsParser::isBalanced("[{)]"));
        $this->assertTrue(BracketsParser::isBalanced("[({})(()[{}])]"));
    }
}