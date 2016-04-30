<?php

namespace AppBundle\Model\Institute;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity
 */
class Section {
	/**
	 * @var int
	 *
	 * @ORM\Column(name="section_id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $sectionId;

	/**
	 * @var int
	 *
	 * @ORM\ManyToOne(targetEntity="course")
	 * @ORM\JoinColumn(name="course_id", referencedColumnName="course_id", nullable=false)
	 */
	private $courseId;

	/**
	 * @var int
	 *
	 * @ORM\Column(name="year", type="integer")
	 */
	private $year;

	/**
	 * @var int
	 *
	 * @ORM\Column(name="semester", type="integer")
	 */
	private $semester;

	/**
	 * @ORM\OneToOne(targetEntity="teacher")
	 * @ORM\JoinColumn(name="teacher_id", referencedColumnName="username", nullable=false)
	 */
	private $teacher;

    /**
     * Get sectionId
     *
     * @return integer
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Section
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set semester
     *
     * @param integer $semester
     *
     * @return Section
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return integer
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set courseId
     *
     * @param \AppBundle\Model\Institute\Course $courseId
     *
     * @return Section
     */
    public function setCourseId(Course $courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return \AppBundle\Model\Institute\Course
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set teacher
     *
     * @param \AppBundle\Model\Institute\Teacher $teacher
     *
     * @return Section
     */
    public function setTeacher(Teacher $teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \AppBundle\Model\Institute\Teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
