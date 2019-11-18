<?php
namespace Katas\CmsPrototype;

use PHPUnit\Framework\Assert;

class TestCmsHeavyPrototype extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function TestOutput()
    {
        $page = new CmsPage();
        $html = $page->render();
        Assert::assertEquals("<div>I'm header block.</div><div>I'm content block.</div><div>I'm footer block.</div>", $html);
    }
}