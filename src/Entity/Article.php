<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableMethodsTrait;

/**
 * @ORM\Entity()
 */
class Article implements TranslatableInterface
{
    use TranslatableMethodsTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * comment/uncomment for see phpstan bug
     */
    public function __toString(): string
    {
        return '';
    }
}
