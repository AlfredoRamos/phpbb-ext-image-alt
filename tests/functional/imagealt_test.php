<?php

/**
 * Image Alternate Text extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@protonmail.com>
 * @copyright 2019 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\imagealt\tests\functional;

/**
 * @group functional
 */
class imageatl_test extends \phpbb_functional_test_case
{
	static protected function setup_extensions()
	{
		return ['alfredoramos/imagealt'];
	}

	protected function setUp(): void
	{
		parent::setUp();
		$this->login();
	}

	public function test_image_alt()
	{
		$bbcode = <<<EOT
[img alt="Reset the Net"]https://help.duckduckgo.com/duckduckgo-help-pages/images/fb5a7e58b23313e8c852b2f9ec6a2f6a.png[/img]

[img]https://help.duckduckgo.com/duckduckgo-help-pages/images/2291e0a7248ef66e60686f161361f03d.png[/img]
EOT;
		$post = $this->create_topic(
			2,
			'Image Alternate Text test 1',
			$bbcode
		);

		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$post['topic_id'],
			$this->sid
		));

		$expected = <<<EOT
<img src="https://help.duckduckgo.com/duckduckgo-help-pages/images/fb5a7e58b23313e8c852b2f9ec6a2f6a.png" class="postimage" alt="Reset the Net"><br>
<br>
<img src="https://help.duckduckgo.com/duckduckgo-help-pages/images/2291e0a7248ef66e60686f161361f03d.png" class="postimage" alt="Image">
EOT;
		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$elements = $result->filter('.postimage');

		$this->assertSame(2, $elements->count());
		$this->assertStringContainsString($expected, $result->html());

		$this->assertSame('Reset the Net', $elements->eq(0)->attr('alt'));
		$this->assertSame($this->lang('IMAGE'), $elements->eq(1)->attr('alt'));
	}
}
