<?php

class Shopware_Plugins_Backend_ImageSlider_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    public function getInfo()
    {
        return array(
            'version'     => $this->getVersion(),
            'label'       => $this->getLabel(),
            'link'        => 'http://scriptkid.de',
			'autor' => 'Pieter Paßmann',
			'copyright' => 'Copyright (c) 2014, Pieter Paßmann',
            'description' => 'A small and light Image Slider based on the bxSlider.'
        );
    }

    public function getLabel()
    {
        return 'Image Slider';
    }

    public function getVersion()
    {
        return "0.0.1";
    }

    public function install()
    {
		$component = $this->createEmotionComponent(array(
			'name' => 'Image Slider Widget',
			'template' => 'emotion_imageslider',
			'description' => 'A small and light Image Slider based on the bxSlider.'
        ));


		/* --- IMAGE START --- */

		$component->createField(array(
			'name' => 'image_1',	
			'fieldLabel' => 'Image 1',
			'supportText' => 'First image in our slider.',
			'xtype' => 'mediaselectionfield',
			'allowBlank' => true
		));
		$component->createTextField(array(
			'name' => 'image_alt_1',
			'fieldLabel' => 'Image 1 Alt',
			'supportText' => 'Alt-Attribute',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_link_1',
			'fieldLabel' => 'Image Link 1',
			'supportText' => 'Link for our first image.',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_title_1',
			'fieldLabel' => 'Image Link Title 1',
			'supportText' => 'Title-Attribute',
			'allowBlank' => true
        ));

		
		/* --- IMAGE START --- */

		$component->createField(array(
			'name' => 'image_2',	
			'fieldLabel' => 'Image 2',
			'supportText' => 'Second image in our slider.',
			'xtype' => 'mediaselectionfield',
			'allowBlank' => true
		));
		$component->createTextField(array(
			'name' => 'image_alt_2',
			'fieldLabel' => 'Image 2 Alt',
			'supportText' => 'Alt-Attribute',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_link_2',
			'fieldLabel' => 'Image Link 2',
			'supportText' => 'Link for our second image.',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_title_2',
			'fieldLabel' => 'Image Link Title 2',
			'supportText' => 'Title-Attribute',
			'allowBlank' => true
        ));


		/* --- IMAGE START --- */

		$component->createField(array(
			'name' => 'image_3',	
			'fieldLabel' => 'Image 3',
			'supportText' => 'Third image in our slider.',
			'xtype' => 'mediaselectionfield',
			'allowBlank' => true
		));
		$component->createTextField(array(
			'name' => 'image_alt_3',
			'fieldLabel' => 'Image 3 Alt',
			'supportText' => 'Alt-Attribute',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_link_3',
			'fieldLabel' => 'Image Link 3',
			'supportText' => 'Link for our third image.',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_title_3',
			'fieldLabel' => 'Image Link Title 3',
			'supportText' => 'Title-Attribute',
			'allowBlank' => true
        ));


		/* --- IMAGE START --- */

		$component->createField(array(
			'name' => 'image_4',	
			'fieldLabel' => 'Image 4',
			'supportText' => 'Fourth image in our slider.',
			'xtype' => 'mediaselectionfield',
			'allowBlank' => true
		));
		$component->createTextField(array(
			'name' => 'image_alt_4',
			'fieldLabel' => 'Image 4 Alt',
			'supportText' => 'Alt-Attribute',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_link_4',
			'fieldLabel' => 'Image Link 4',
			'supportText' => 'Link for our fourth image.',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_title_4',
			'fieldLabel' => 'Image Link Title 4',
			'supportText' => 'Title-Attribute',
			'allowBlank' => true
        ));


		/* --- IMAGE START --- */

		$component->createField(array(
			'name' => 'image_5',	
			'fieldLabel' => 'Image 5',
			'supportText' => 'Fifth image in our slider.',
			'xtype' => 'mediaselectionfield',
			'allowBlank' => true
		));
		$component->createTextField(array(
			'name' => 'image_alt_5',
			'fieldLabel' => 'Image 5 Alt',
			'supportText' => 'Alt-Attribute',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_link_5',
			'fieldLabel' => 'Image Link 5',
			'supportText' => 'Link for our fifth image.',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_title_5',
			'fieldLabel' => 'Image Link Title 5',
			'supportText' => 'Title-Attribute',
			'allowBlank' => true
        ));


		/*
		$component->createTextField(array(
			'name' => 'vimeo_video_id',
			'fieldLabel' => 'Video ID',
			'supportText' => 'Enter the ID of the video you want to embed.',
			'allowBlank' => false
        ));

        $component->createTextField(array(
                    'name' => 'vimeo_interface_color',
                    'fieldLabel' => 'Interface Color',
                    'supportText' => 'Enter the #hex color code for the video player interface.',
                    'defaultValue' => '#0096FF'
        ));

        $component->createCheckboxField(array(
                    'name' => 'vimeo_show_portrait',
                    'fieldLabel' => 'Show Portrait',
                    'defaultValue' => false
        ));

        $component->createCheckboxField(array(
                    'name' => 'vimeo_show_title',
                    'fieldLabel' => 'Show Title',
                    'defaultValue' => false
        ));

        $component->createCheckboxField(array(
                    'name' => 'vimeo_show_author',
                    'fieldLabel' => 'Show Author',
                    'defaultValue' => false
        ));
		*/
        return true;
    }

    public function uninstall()
    {
        return true;
    }
}