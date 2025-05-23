<?php

namespace CortexPE\Commando\args;

use pocketmine\command\CommandSender;

class OptionArgument extends StringEnumArgument
{
    public function __construct(string $name, private readonly array $enumValues, bool $optional = false)
    {
        parent::__construct($name, $optional);
    }

    public function getTypeName(): string
    {
        return "string";
    }

    public function parse(string $argument, CommandSender $sender): string
    {
        return $argument;
    }

    public function getEnumValues(): array
    {
        return $this->enumValues;
    }

    public function getEnumName(): string
    {
        return $this->name;
    }
}