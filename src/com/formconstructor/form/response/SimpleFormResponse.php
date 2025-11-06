<?php

namespace com\formconstructor\form\response;


use com\formconstructor\form\element\simple\Button;
use pocketmine\Player;

class SimpleFormResponse extends FormResponse {

    private Button $button;

    public function __construct(Button $button) {
        parent::__construct($button->getHandler(), "");
        $this->button = $button;
    }

    public function handle(Player $player): void {
        if ($this->getHandler() !== null) {
            $this->getHandler()($player, $this->button);
        }
    }
}