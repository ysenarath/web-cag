<?php

namespace AppBundle\Model\Institute;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="assignment")
 * @ORM\Entity
 */
class Assignment {
    /**
     * @var int
     *
     * @ORM\Column(name="assignment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $assignmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="question")
     * @ORM\JoinTable(name="assignment_question",
     *      joinColumns={@ORM\JoinColumn(name="assignment_id", referencedColumnName="assignment_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="question_id")})
     */
    private $questions;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    /**
     * Get assignmentId
     *
     * @return integer
     */
    public function getAssignmentId()
    {
        return $this->assignmentId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Assignment
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Assignment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add question
     *
     * @param \AppBundle\Model\Institute\Question $question
     *
     * @return Assignment
     */
    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \AppBundle\Model\Institute\question $question
     */
    public function removeQuestion(Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }
}
