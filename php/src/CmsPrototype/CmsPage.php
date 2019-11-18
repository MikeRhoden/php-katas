<?php

namespace Katas\CmsPrototype;

class CmsPage
{
    public function render() {
        $html = '';

        $headerBlock = new CmsBlock('header');
        $html .= $headerBlock->render();

        $contentBlock = clone $headerBlock;
        $contentBlock->blockId = "content";
        $html .= $contentBlock->render();

        $footerBlock = clone $headerBlock;
        $footerBlock->blockId = "footer";
        $html .= $footerBlock->render();

        return $html;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}