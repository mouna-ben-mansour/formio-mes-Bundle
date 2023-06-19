<?php

namespace Novactive\Bundle\formIOBundle\FieldType\FormIoURL;

use Ibexa\Contracts\Core\FieldType\Value as ValueInterface;
use Symfony\Component\Validator\Constraints as Assert;

final class Value implements ValueInterface
{
    /**
     * @Assert\NotBlank()
     */
    private $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "Hello {$this->name}!";
    }
}