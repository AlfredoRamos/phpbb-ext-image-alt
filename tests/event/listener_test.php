<?php

/**
 * Image Alternate Text extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@protonmail.com>
 * @copyright 2019 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\imagealt\tests\event;

use phpbb_test_case;
use phpbb\language\language;
use alfredoramos\imagealt\event\listener;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener_test extends phpbb_test_case
{
	protected $language;

	public function setUp(): void
	{
		parent::setUp();

		$this->language = $this->getMockBuilder(language::class)
			->disableOriginalConstructor()->getMock();
	}

	public function test_instance()
	{
		$this->assertInstanceOf(
			EventSubscriberInterface::class,
			new listener($this->language)
		);
	}

	public function test_subscribed_events()
	{
		$this->assertSame(
			['core.text_formatter_s9e_configure_after'],
			array_keys(listener::getSubscribedEvents())
		);
	}
}
