<?php

namespace com\formconstructor\form\response;

use Closure;
use pocketmine\Player;


class ModalFormResponse extends FormResponse {

    public function __construct(?Closure $handler, ?string $data) {
        parent::__construct($handler, $data);
    }

    public function handle(Player $player): void {
        if ($this->getHandler() !== null) {
            $this->getHandler()($player, $this->getData() === "1");
        }
    }
}