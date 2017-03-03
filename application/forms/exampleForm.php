<?php

use Staple\Form\ButtonElement;
use Staple\Form\CheckboxElement;
use Staple\Form\CheckboxGroupElement;
use Staple\Form\FileElement;
use Staple\Form\Form;
use Staple\Form\ImageElement;
use Staple\Form\PasswordElement;
use Staple\Form\RadioElement;
use Staple\Form\SelectElement;
use Staple\Form\SubmitElement;
use Staple\Form\TextareaElement;
use Staple\Form\TextElement;
use Staple\Form\Validate\LengthValidator;

class exampleForm extends Form
{
    public function _start()
    {
		/*
		 * Form Setup
		 */
        $this->setName('exampleform')
            ->setAction($this->link(array('index', 'formexample')))
            ->setEnctype(Form::ENC_TEXT);

		//Text Element Example
        $TextElement = TextElement::create('TextElement', 'Text Element:')
						->addValidator(new LengthValidator(1,250,'Length is too short or too long'))
						->setRequired();

		$this->addField($TextElement);

		//Text Area Element Example
		$TextAreaElement = TextareaElement::create('TextAreaElement', 'Text Area Element')
						->addInstructions('Text Area Instructions');

		$this->addField($TextAreaElement);

		//Password Element Example
		$PasswordElement = PasswordElement::create('PasswordElement', 'Password Element');

		$this->addField($PasswordElement);

		//Select Element Example
		$SelectElement = SelectElement::create('SelectElement', 'Select Element:')
						->addOption('Value1', 'Option 1')
						->addOption('Value2', 'Option 2')
						->addOption('Value3', 'Option 3');

		$this->addField($SelectElement);

		//Checkbox Element Example
		$CheckboxElement = CheckboxElement::create('CheckboxElement', 'CheckboxElement');

		$this->addField($CheckboxElement);

		//Checkbox Group Element Example
		$CheckboxGroupElement = CheckboxGroupElement::create('CheckboxGroupElement', 'Checkbox Group Element')
							->addCheckbox(CheckboxElement::create('Checkbox1','Checkbox 1'))
							->addCheckbox(CheckboxElement::create('Checkbox2', 'Checkbox 2'))
							->addCheckbox(CheckboxElement::create('Checkbox3', 'Checkbox 3'));

		$this->addField($CheckboxGroupElement);

		//Radio Element Example
		$RadioElement = RadioElement::create('RadioElement', 'Radio Element')
						->addButton('Button1', 'Button 1')
						->addButton('Button2', 'Button 2')
						->addButton('Button3', 'Button 3');

		$this->addField($RadioElement);

		//File Element Example
		$FileElement = FileElement::create('FileElement','File Element');

		$this->addField($FileElement);

		//Image Element Example
		$ImageElement = ImageElement::create('Image','https://dummyimage.com/200x150/000/fff')
					->setSrc('https://dummyimage.com/200x150/000/fff');

		$this->addField($ImageElement);

		//Button Element Example
		$ButtonElement = ButtonElement::create('ButtonElement','Button Element');

		$this->addField($ButtonElement);

		//Submit Element Example
        $submit = new SubmitElement('submit', 'Submit');
		$submit->addClass('');

        $this->addField($submit);
    }

}