<?php

namespace FOND\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulaire
 *
 * @ORM\Table(name="formulaire")
 * @ORM\Entity(repositoryClass="FOND\UserBundle\Repository\FormulaireRepository")
 */
class Formulaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question1", type="string", length=255)
     */
    private $question1;

    /**
     * @var string
     *
     * @ORM\Column(name="question2", type="string", length=255)
     */
    private $question2;

    /**
     * @var string
     *
     * @ORM\Column(name="question3", type="string", length=255)
     */
    private $question3;

    /**
     * @var string
     *
     * @ORM\Column(name="question4", type="string", length=255)
     */
    private $question4;

    /**
     * @var string
     *
     * @ORM\Column(name="question5", type="string", length=255)
     */
    private $question5;

    /**
     * @var string
     *
     * @ORM\Column(name="question6", type="string", length=255)
     */
    private $question6;

    /**
     * @var string
     *
     * @ORM\Column(name="question7", type="string", length=255)
     */
    private $question7;

    /**
     * @var string
     *
     * @ORM\Column(name="question8", type="string", length=255)
     */
    private $question8;


    /**
     * @var string
     *
     * @ORM\Column(name="question9", type="string", length=255)
     */
    private $question9;
    /**
     * @var string
     *
     * @ORM\Column(name="question10", type="string", length=255)
     */
    private $question10;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question1
     *
     * @param string $question1
     *
     * @return Formulaire
     */
    public function setQuestion1($question1)
    {
        $this->question1 = $question1;

        return $this;
    }

    /**
     * Get question1
     *
     * @return string
     */
    public function getQuestion1()
    {
        return $this->question1;
    }

    /**
     * Set question2
     *
     * @param string $question2
     *
     * @return Formulaire
     */
    public function setQuestion2($question2)
    {
        $this->question2 = $question2;

        return $this;
    }

    /**
     * Get question2
     *
     * @return string
     */
    public function getQuestion2()
    {
        return $this->question2;
    }

    /**
     * Set question3
     *
     * @param string $question3
     *
     * @return Formulaire
     */
    public function setQuestion3($question3)
    {
        $this->question3 = $question3;

        return $this;
    }

    /**
     * Get question3
     *
     * @return string
     */
    public function getQuestion3()
    {
        return $this->question3;
    }

    /**
     * Set question4
     *
     * @param string $question4
     *
     * @return Formulaire
     */
    public function setQuestion4($question4)
    {
        $this->question4 = $question4;

        return $this;
    }

    /**
     * Get question4
     *
     * @return string
     */
    public function getQuestion4()
    {
        return $this->question4;
    }

    /**
     * Set question5
     *
     * @param string $question5
     *
     * @return Formulaire
     */
    public function setQuestion5($question5)
    {
        $this->question5 = $question5;

        return $this;
    }

    /**
     * Get question5
     *
     * @return string
     */
    public function getQuestion5()
    {
        return $this->question5;
    }

    /**
     * Set question6
     *
     * @param string $question6
     *
     * @return Formulaire
     */
    public function setQuestion6($question6)
    {
        $this->question6 = $question6;

        return $this;
    }

    /**
     * Get question6
     *
     * @return string
     */
    public function getQuestion6()
    {
        return $this->question6;
    }

    /**
     * Set question7
     *
     * @param string $question7
     *
     * @return Formulaire
     */
    public function setQuestion7($question7)
    {
        $this->question7 = $question7;

        return $this;
    }

    /**
     * Get question7
     *
     * @return string
     */
    public function getQuestion7()
    {
        return $this->question7;
    }

    /**
     * Set question8
     *
     * @param string $question8
     *
     * @return Formulaire
     */
    public function setQuestion8($question8)
    {
        $this->question8 = $question8;

        return $this;
    }

    /**
     * Get question8
     *
     * @return string
     */
    public function getQuestion8()
    {
        return $this->question8;
    }

    /**
     * Set question9
     *
     * @param string $question9
     *
     * @return Formulaire
     */
    public function setQuestion9($question9)
    {
        $this->question9 = $question9;

        return $this;
    }

    /**
     * Get question9
     *
     * @return string
     */
    public function getQuestion9()
    {
        return $this->question9;
    }

    /**
     * Set question10
     *
     * @param string $question10
     *
     * @return Formulaire
     */
    public function setQuestion10($question10)
    {
        $this->question10 = $question10;

        return $this;
    }

    /**
     * Get question10
     *
     * @return string
     */
    public function getQuestion10()
    {
        return $this->question10;
    }
}
