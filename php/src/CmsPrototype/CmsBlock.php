<?php

namespace Katas\CmsPrototype;

class CmsBlock implements CmsPrototype
{
    public $dbConnector = null;
    public $textParser = null;
    public $credentialsReader = null;
    public $blockId;

    public function __construct($id) {
        $this->textParser = new TextParser();
        $this->credentialsReader = new CredentialsReader();
        $this->dbConnector = new DbConnector($this->credentialsReader->read());
        $this->blockId = $id;
    }

    public function render() {
        return $this->textParser->parse('<div>I\'m ' . $this->blockId . ' block.</div>');
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}