<?php

namespace Scourgen\PersonFinderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scourgen\PersonFinderBundle\Entity\PersonRepository")
 */
class Person
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
     * @ORM\OneToMany(targetEntity="Note", mappedBy="person")
     **/
    private $person_records;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="linked_person")
     **/
    private $linked_person_records;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $entry_date;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $expiry_date;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
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
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $source_name;

    /**
     * @ORM\Column(type="datetime",nullable=false)
     */
    private $source_date;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $source_url;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    private $full_name;

    /**
     * @ORM\Column(type="string", length=20,nullable=true)
     */
    private $given_name;

    /**
     * @ORM\Column(type="string", length=20,nullable=true)
     */
    private $family_name;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $alternate_names;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=10,nullable=true)
     */
    private $sex;

    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="smallint",nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $home_street;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $home_neighborhood;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $home_city;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $home_state;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $home_postal_code;

    /**
     * @ORM\Column(type="string", length=45,nullable=true)
     */
    private $home_country;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */
    private $photo_url;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */
    private $profile_urls;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->person_records = new \Doctrine\Common\Collections\ArrayCollection();
        $this->linked_person_records = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set person_record_id
     *
     * @param string $personRecordId
     * @return Person
     */
    public function setPersonRecordId($personRecordId)
    {
        $this->person_record_id = $personRecordId;
    
        return $this;
    }

    /**
     * Get person_record_id
     *
     * @return string 
     */
    public function getPersonRecordId()
    {
        return $this->person_record_id;
    }

    /**
     * Set entry_date
     *
     * @param \DateTime $entryDate
     * @return Person
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
     * Set expiry_date
     *
     * @param \DateTime $expiryDate
     * @return Person
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiry_date = $expiryDate;
    
        return $this;
    }

    /**
     * Get expiry_date
     *
     * @return \DateTime 
     */
    public function getExpiryDate()
    {
        return $this->expiry_date;
    }

    /**
     * Set author_name
     *
     * @param string $authorName
     * @return Person
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
     * @return Person
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
     * @return Person
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
     * Set source_name
     *
     * @param string $sourceName
     * @return Person
     */
    public function setSourceName($sourceName)
    {
        $this->source_name = $sourceName;
    
        return $this;
    }

    /**
     * Get source_name
     *
     * @return string 
     */
    public function getSourceName()
    {
        return $this->source_name;
    }

    /**
     * Set source_date
     *
     * @param \DateTime $sourceDate
     * @return Person
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
     * Set source_url
     *
     * @param string $sourceUrl
     * @return Person
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->source_url = $sourceUrl;
    
        return $this;
    }

    /**
     * Get source_url
     *
     * @return string 
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * Set full_name
     *
     * @param string $fullName
     * @return Person
     */
    public function setFullName($fullName)
    {
        $this->full_name = $fullName;
    
        return $this;
    }

    /**
     * Get full_name
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Set given_name
     *
     * @param string $givenName
     * @return Person
     */
    public function setGivenName($givenName)
    {
        $this->given_name = $givenName;
    
        return $this;
    }

    /**
     * Get given_name
     *
     * @return string 
     */
    public function getGivenName()
    {
        return $this->given_name;
    }

    /**
     * Set family_name
     *
     * @param string $familyName
     * @return Person
     */
    public function setFamilyName($familyName)
    {
        $this->family_name = $familyName;
    
        return $this;
    }

    /**
     * Get family_name
     *
     * @return string 
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * Set alternate_names
     *
     * @param string $alternateNames
     * @return Person
     */
    public function setAlternateNames($alternateNames)
    {
        $this->alternate_names = $alternateNames;
    
        return $this;
    }

    /**
     * Get alternate_names
     *
     * @return string 
     */
    public function getAlternateNames()
    {
        return $this->alternate_names;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Person
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
     * Set sex
     *
     * @param string $sex
     * @return Person
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set date_of_birth
     *
     * @param \DateTime $dateOfBirth
     * @return Person
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->date_of_birth = $dateOfBirth;
    
        return $this;
    }

    /**
     * Get date_of_birth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Person
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set home_street
     *
     * @param string $homeStreet
     * @return Person
     */
    public function setHomeStreet($homeStreet)
    {
        $this->home_street = $homeStreet;
    
        return $this;
    }

    /**
     * Get home_street
     *
     * @return string 
     */
    public function getHomeStreet()
    {
        return $this->home_street;
    }

    /**
     * Set home_neighborhood
     *
     * @param string $homeNeighborhood
     * @return Person
     */
    public function setHomeNeighborhood($homeNeighborhood)
    {
        $this->home_neighborhood = $homeNeighborhood;
    
        return $this;
    }

    /**
     * Get home_neighborhood
     *
     * @return string 
     */
    public function getHomeNeighborhood()
    {
        return $this->home_neighborhood;
    }

    /**
     * Set home_city
     *
     * @param string $homeCity
     * @return Person
     */
    public function setHomeCity($homeCity)
    {
        $this->home_city = $homeCity;
    
        return $this;
    }

    /**
     * Get home_city
     *
     * @return string 
     */
    public function getHomeCity()
    {
        return $this->home_city;
    }

    /**
     * Set home_state
     *
     * @param string $homeState
     * @return Person
     */
    public function setHomeState($homeState)
    {
        $this->home_state = $homeState;
    
        return $this;
    }

    /**
     * Get home_state
     *
     * @return string 
     */
    public function getHomeState()
    {
        return $this->home_state;
    }

    /**
     * Set home_postal_code
     *
     * @param string $homePostalCode
     * @return Person
     */
    public function setHomePostalCode($homePostalCode)
    {
        $this->home_postal_code = $homePostalCode;
    
        return $this;
    }

    /**
     * Get home_postal_code
     *
     * @return string 
     */
    public function getHomePostalCode()
    {
        return $this->home_postal_code;
    }

    /**
     * Set home_country
     *
     * @param string $homeCountry
     * @return Person
     */
    public function setHomeCountry($homeCountry)
    {
        $this->home_country = $homeCountry;
    
        return $this;
    }

    /**
     * Get home_country
     *
     * @return string 
     */
    public function getHomeCountry()
    {
        return $this->home_country;
    }

    /**
     * Set photo_url
     *
     * @param string $photoUrl
     * @return Person
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
     * Set profile_urls
     *
     * @param string $profileUrls
     * @return Person
     */
    public function setProfileUrls($profileUrls)
    {
        $this->profile_urls = $profileUrls;
    
        return $this;
    }

    /**
     * Get profile_urls
     *
     * @return string 
     */
    public function getProfileUrls()
    {
        return $this->profile_urls;
    }

    /**
     * Add person_records
     *
     * @param \Scourgen\PersonFinderBundle\Entity\Note $personRecords
     * @return Person
     */
    public function addPersonRecord(\Scourgen\PersonFinderBundle\Entity\Note $personRecords)
    {
        $this->person_records[] = $personRecords;
    
        return $this;
    }

    /**
     * Remove person_records
     *
     * @param \Scourgen\PersonFinderBundle\Entity\Note $personRecords
     */
    public function removePersonRecord(\Scourgen\PersonFinderBundle\Entity\Note $personRecords)
    {
        $this->person_records->removeElement($personRecords);
    }

    /**
     * Get person_records
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonRecords()
    {
        return $this->person_records;
    }

    /**
     * Add linked_person_records
     *
     * @param \Scourgen\PersonFinderBundle\Entity\Note $linkedPersonRecords
     * @return Person
     */
    public function addLinkedPersonRecord(\Scourgen\PersonFinderBundle\Entity\Note $linkedPersonRecords)
    {
        $this->linked_person_records[] = $linkedPersonRecords;
    
        return $this;
    }

    /**
     * Remove linked_person_records
     *
     * @param \Scourgen\PersonFinderBundle\Entity\Note $linkedPersonRecords
     */
    public function removeLinkedPersonRecord(\Scourgen\PersonFinderBundle\Entity\Note $linkedPersonRecords)
    {
        $this->linked_person_records->removeElement($linkedPersonRecords);
    }

    /**
     * Get linked_person_records
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinkedPersonRecords()
    {
        return $this->linked_person_records;
    }
}