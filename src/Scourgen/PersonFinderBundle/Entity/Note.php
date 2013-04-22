<?php

namespace Scourgen\PersonFinderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="person_records")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id",nullable=false)
     **/
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="linked_person_records")
     * @ORM\JoinColumn(name="linked_person_id", referencedColumnName="id",nullable=true)
     **/
    private $linked_person;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $entry_date;

    /**
     * @ORM\Column(type="string", length=45,nullable=false)
     */
    private $author_name;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $author_email;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $author_phone;

    /**
     * @ORM\Column(type="datetime",nullable=false)
     */
    private $source_date;

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $author_made_contact;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $email_of_found_person;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $phone_of_found_person;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $last_known_location;

    /**
     * @ORM\Column(type="text", length=45,nullable=false)
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $photo_url;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set entry_date
     *
     * @param \DateTime $entryDate
     * @return Note
     */
    public function setEntryDate($entryDate)
    {
        $this->entry_date = $entryDate;
    
        return $this;
    }

    /**
     * Get entry_date
     *
     * @return \DateTime 
     */
    public function getEntryDate()
    {
        return $this->entry_date;
    }

    /**
     * Set author_name
     *
     * @param string $authorName
     * @return Note
     */
    public function setAuthorName($authorName)
    {
        $this->author_name = $authorName;
    
        return $this;
    }

    /**
     * Get author_name
     *
     * @return string 
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * Set author_email
     *
     * @param string $authorEmail
     * @return Note
     */
    public function setAuthorEmail($authorEmail)
    {
        $this->author_email = $authorEmail;
    
        return $this;
    }

    /**
     * Get author_email
     *
     * @return string 
     */
    public function getAuthorEmail()
    {
        return $this->author_email;
    }

    /**
     * Set author_phone
     *
     * @param string $authorPhone
     * @return Note
     */
    public function setAuthorPhone($authorPhone)
    {
        $this->author_phone = $authorPhone;
    
        return $this;
    }

    /**
     * Get author_phone
     *
     * @return string 
     */
    public function getAuthorPhone()
    {
        return $this->author_phone;
    }

    /**
     * Set source_date
     *
     * @param \DateTime $sourceDate
     * @return Note
     */
    public function setSourceDate($sourceDate)
    {
        $this->source_date = $sourceDate;
    
        return $this;
    }

    /**
     * Get source_date
     *
     * @return \DateTime 
     */
    public function getSourceDate()
    {
        return $this->source_date;
    }

    /**
     * Set author_made_contact
     *
     * @param boolean $authorMadeContact
     * @return Note
     */
    public function setAuthorMadeContact($authorMadeContact)
    {
        $this->author_made_contact = $authorMadeContact;
    
        return $this;
    }

    /**
     * Get author_made_contact
     *
     * @return boolean 
     */
    public function getAuthorMadeContact()
    {
        return $this->author_made_contact;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Note
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set email_of_found_person
     *
     * @param string $emailOfFoundPerson
     * @return Note
     */
    public function setEmailOfFoundPerson($emailOfFoundPerson)
    {
        $this->email_of_found_person = $emailOfFoundPerson;
    
        return $this;
    }

    /**
     * Get email_of_found_person
     *
     * @return string 
     */
    public function getEmailOfFoundPerson()
    {
        return $this->email_of_found_person;
    }

    /**
     * Set phone_of_found_person
     *
     * @param string $phoneOfFoundPerson
     * @return Note
     */
    public function setPhoneOfFoundPerson($phoneOfFoundPerson)
    {
        $this->phone_of_found_person = $phoneOfFoundPerson;
    
        return $this;
    }

    /**
     * Get phone_of_found_person
     *
     * @return string 
     */
    public function getPhoneOfFoundPerson()
    {
        return $this->phone_of_found_person;
    }

    /**
     * Set last_known_location
     *
     * @param string $lastKnownLocation
     * @return Note
     */
    public function setLastKnownLocation($lastKnownLocation)
    {
        $this->last_known_location = $lastKnownLocation;
    
        return $this;
    }

    /**
     * Get last_known_location
     *
     * @return string 
     */
    public function getLastKnownLocation()
    {
        return $this->last_known_location;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Note
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set photo_url
     *
     * @param string $photoUrl
     * @return Note
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photo_url = $photoUrl;
    
        return $this;
    }

    /**
     * Get photo_url
     *
     * @return string 
     */
    public function getPhotoUrl()
    {
        return $this->photo_url;
    }

    /**
     * Set person
     *
     * @param \Scourgen\PersonFinderBundle\Entity\Person $person
     * @return Note
     */
    public function setPerson(\Scourgen\PersonFinderBundle\Entity\Person $person = null)
    {
        $this->person = $person;
    
        return $this;
    }

    /**
     * Get person
     *
     * @return \Scourgen\PersonFinderBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set linked_person
     *
     * @param \Scourgen\PersonFinderBundle\Entity\Person $linkedPerson
     * @return Note
     */
    public function setLinkedPerson(\Scourgen\PersonFinderBundle\Entity\Person $linkedPerson = null)
    {
        $this->linked_person = $linkedPerson;
    
        return $this;
    }

    /**
     * Get linked_person
     *
     * @return \Scourgen\PersonFinderBundle\Entity\Person 
     */
    public function getLinkedPerson()
    {
        return $this->linked_person;
    }
}