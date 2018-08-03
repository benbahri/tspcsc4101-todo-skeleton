<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Contrat
 *
 * @ORM\Table(name="todos")
 * @ORM\Entity()
 *
 */
class Todo {
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="tid", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string Description de la tâche
     *
     * La description plutôt complète de la tâche
     *
     * @ORM\Column(name="title", type="text", nullable=True)
     */
    private $title = "";
    /**
     * @ORM\Column(type="boolean")
     */
    private $completed;

    /**
     * @var Datetime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    /**
     * @var Datetime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;
    public function __construct(){
        $this->created = new \DateTime();
        $this->updated = new \DateTime();
    }
    public function __toString(){
        return $this->id .' '. $this->title.' completed :'.$this->completed;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setTitle(string $title): self
    {
        $this->title = $title;
        
        return $this;
    }
    
    public function getCompleted(): ?bool
    {
        return $this->completed;
    }
    
    public function setCompleted(bool $completed): self
    {
        $this->completed = $completed;
        
        return $this;
    }

    /**
     * @return Datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return Datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param Datetime $created
     */
    public function setCreated(Datetime $created)
    {
        $this->created = $created;
    }

    /**
     * @param Datetime $updated
     */
    public function setUpdated(Datetime $updated)
    {
        $this->updated = $updated;
    }

    
}