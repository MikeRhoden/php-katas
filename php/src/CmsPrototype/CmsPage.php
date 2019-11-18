<?php

namespace Katas\CmsPrototype;

class CmsPage
{
    public function render() {
        $html = '';

        $headerBlock = new CmsBlock('header');
        $html .= $headerBlock->render();

        $contentBlock = new CmsBlock('content');
        $html .= $contentBlock->render();

        $footerBlock = new CmsBlock('footer');
        $html .= $footerBlock->render();

        return $html;
    }
}