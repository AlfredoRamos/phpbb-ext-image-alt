<?php

/**
 * Image Alternate Text extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2019 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\imagealt\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\language\language;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\language\language */
	protected $language;

	/**
	 * Listener constructor.
	 *
	 * @param \phpbb\language\language $language;
	 *
	 * @return void
	 */
	public function __construct(language $language)
	{
		$this->language = $language;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core.
	 *
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return [
			'core.text_formatter_s9e_configure_after' => 'image_alt'
		];
	}

	/**
	 * Add alternate text to image tags.
	 *
	 * @param object $event
	 *
	 * @return void
	 */
	public function image_alt($event)
	{
		// Get configurator
		$configurator = $event['configurator'];

		// Image tag must exist
		if (!isset($configurator->tags['IMG'], $configurator->BBCodes['IMG']))
		{
			return;
		}

		// Create image alternate text
		if (!isset($configurator->tags['IMG']->attributes['alt']))
		{
			// Configure image alternate text
			$alt = $configurator->tags['IMG']->attributes->add('alt');
			$alt->required = false;
			$alt->defaultValue = $this->language->lang('IMAGE');
			$alt->filterChain->prepend('#regexp')->setRegexp('/\\S/');
		}

		// Get image template for DOM manipulation
		$dom = $configurator->tags['IMG']->template->asDOM();

		// Set image alternate text
		foreach ($dom->getElementsByTagName('img') as $node)
		{
			$node->setAttribute('alt', '{@alt}');
		}

		// Save changes
		$dom->saveChanges();
	}
}
