<?php

// src/AppBundle/Entity/event.php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A book.
 * 
 * @ApiResource
 * @ORM\Entity
 */
class Event
{
    /**
     * @var int The id of this event.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name of this event.
     *
     * @ORM\Column(nullable=false)
     */
    private $name;

    /**
     * @var string The description of this event.
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var \DateTimeInterface The begin date of this event.
     *
     * @ORM\Column(type="datetime")
     */
    private $dateStart;

    /**
     * @var \DateTimeInterface The end of this event.
     *
     * @ORM\Column(type="datetime")
     */
    private $dateEnd;   

     /**
     * @var Group group events.
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="features")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $group; 

    /**
     * @var User[] Available users for this group.
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="events")
     */
    private $participants;
}
