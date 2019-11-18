<?php

namespace Katas\CmsPrototype;

class CmsBlock
{
    public $dbConnector;
    public $dbConnection;
    public $textParser;
    public $credentialsReader;
    public $blockId;

    public function __construct($id) {
        $this->textParser = new TextParser();
        $this->credentialsReader = new CredentialsReader();
        $this->dbConnector = new DbConnector($this->credentialsReader->read());
        $this->blockId = $id;
    }

    public function render() {
        return $this->textParser->parse('I\'m ' . $this->blockId . ' block \n');
    }
}