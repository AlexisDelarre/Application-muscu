<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 30/07/18
 * Time: 21:51
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="exercices")
 * @ORM\Entity(repositoryClass="App\Repository\ExerciceRepository")
 */
class Exercice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $desc;

    /**
     * @ORM\Column(type="integer")
     */
    private $repeat;

    /**
     * Exercice constructor.
     */
    public function __construct()
    {
        $this->name = "";
        $this->desc = "";
        $this->repeat = 0;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * @param mixed $repeat
     */
    public function setRepeat($repeat)
    {
        $this->repeat = $repeat;
    }




}