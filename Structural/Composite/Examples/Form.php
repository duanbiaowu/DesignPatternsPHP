<?php


namespace DesignPatterns\Structural\Composite\Examples;


class Form implements FormElement
{
    /**
     * @var FormElement[]
     */
    private array $elements = [];

    public function render(): string
    {
        $html = '<form>';

        foreach ($this->elements as $element) {
            $html .= $element->render();
        }

        $html .= '</form>';

        return $html;
    }

    public function addElement(FormElement $formElement)
    {
        $this->elements[] = $formElement;
    }
}