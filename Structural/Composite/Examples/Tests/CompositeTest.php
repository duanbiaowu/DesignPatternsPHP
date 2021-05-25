<?php

namespace DesignPatterns\Structural\Composite\Examples\Tests;

use DesignPatterns\Structural\Composite\Examples\ButtonElement;
use DesignPatterns\Structural\Composite\Examples\Form;
use DesignPatterns\Structural\Composite\Examples\InputElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new InputElement('text', 'username'));
        $form->addElement(new InputElement('hidden', 'token'));
        $form->addElement(new ButtonElement('submit', 'submit'));

        $html = <<<HTML
<form><input type="username" name="text" /><input type="token" name="hidden" /><button type="submit">submit</button></form>
HTML;

        $this->assertSame($html, $form->render());
    }
}
