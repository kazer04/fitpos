<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * TUser
 *
 * @ORM\Table(name="t_user", uniqueConstraints={@ORM\UniqueConstraint(name="str_LOGIN", columns={"str_LOGIN"})}, indexes={@ORM\Index(name="lg_SKIN_ID", columns={"lg_SKIN_ID"}), @ORM\Index(name="lg_Language_ID", columns={"lg_Language_ID"})})
 * @ORM\Entity
 */
class TUser implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="lg_USER_ID", type="string", length=30, nullable=false)
     * @ORM\Id
    
     */
    public $lgUserId;
// * @ORM\GeneratedValue(strategy="IDENTITY")
    /**
     * @var string
     *
     * @ORM\Column(name="str_LOGIN", type="string", length=40, nullable=true)
     */
    private $strLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="str_PASSWORD", type="string", length=40, nullable=true)
     */
   // private $strPassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_CREATED", type="datetime", nullable=true)
     */
    private $dtCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_UPDATED", type="datetime", nullable=true)
     */
    private $dtUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="str_CREATED_BY", type="string", length=20, nullable=true)
     */
    private $strCreatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="str_UPDATED_BY", type="string", length=20, nullable=true)
     */
    private $strUpdatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="str_FIRST_NAME", type="string", length=20, nullable=true)
     */
    private $strFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="str_LAST_NAME", type="string", length=20, nullable=true)
     */
    private $strLastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="str_LAST_CONNECTION_DATE", type="datetime", nullable=true)
     */
    private $strLastConnectionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="str_STATUT", type="string", length=20, nullable=true)
     */
    private $strStatut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_LAST_ACTIVITY", type="datetime", nullable=true)
     */
    private $dtLastActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="FUNCTION", type="string", length=20, nullable=true)
     */
    private $function;

    /**
     * @var string
     *
     * @ORM\Column(name="str_PHONE", type="string", length=20, nullable=true)
     */
    private $strPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="str_MAIL", type="string", length=20, nullable=true)
     */
    private $strMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="str_IDS", type="integer", nullable=true)
     */
    private $strIds;

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_CHANGE_PASSWORD", type="boolean", nullable=true)
     */
    private $bChangePassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_CONNEXION", type="integer", nullable=true)
     */
    private $intConnexion;

    /**
     * @var string
     *
     * @ORM\Column(name="str_FUNCTION", type="string", length=50, nullable=true)
     */
    private $strFunction;

    /**
     * @var string
     *
     * @ORM\Column(name="lg_EMPLACEMENT_ID", type="string", length=20, nullable=true)
     */
    private $lgEmplacementId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_is_connected", type="boolean", nullable=true)
     */
    private $bIsConnected;

    /**
     * @var \TSkin
     *
     * @ORM\ManyToOne(targetEntity="TSkin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lg_SKIN_ID", referencedColumnName="lg_SKIN_ID")
     * })
     */
    private $lgSkin;

    /**
     * @var \TLanguage
     *
     * @ORM\ManyToOne(targetEntity="TLanguage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lg_Language_ID", referencedColumnName="lg_Language_ID")
     * })
     */
    private $lgLanguage;

    public function getLgUserId(): ?string
    {
        return $this->lgUserId;
    }

    public function getStrLogin(): ?string
    {
        return $this->strLogin;
    }

    public function setStrLogin(?string $strLogin): self
    {
        $this->strLogin = $strLogin;

        return $this;
    }

    public function getStrPassword(): ?string
    {
        return $this->password;
    }

    public function setStrPassword(?string $strPassword): self
    {
        $this->password = $strPassword;

        return $this;
    }

    public function getDtCreated(): ?\DateTimeInterface
    {
        return $this->dtCreated;
    }

    public function setDtCreated(?\DateTimeInterface $dtCreated): self
    {
        $this->dtCreated = $dtCreated;

        return $this;
    }

    public function getDtUpdated(): ?\DateTimeInterface
    {
        return $this->dtUpdated;
    }

    public function setDtUpdated(?\DateTimeInterface $dtUpdated): self
    {
        $this->dtUpdated = $dtUpdated;

        return $this;
    }

    public function getStrCreatedBy(): ?string
    {
        return $this->strCreatedBy;
    }

    public function setStrCreatedBy(?string $strCreatedBy): self
    {
        $this->strCreatedBy = $strCreatedBy;

        return $this;
    }

    public function getStrUpdatedBy(): ?string
    {
        return $this->strUpdatedBy;
    }

    public function setStrUpdatedBy(?string $strUpdatedBy): self
    {
        $this->strUpdatedBy = $strUpdatedBy;

        return $this;
    }

    public function getStrFirstName(): ?string
    {
        return $this->strFirstName;
    }

    public function setStrFirstName(?string $strFirstName): self
    {
        $this->strFirstName = $strFirstName;

        return $this;
    }

    public function getStrLastName(): ?string
    {
        return $this->strLastName;
    }

    public function setStrLastName(?string $strLastName): self
    {
        $this->strLastName = $strLastName;

        return $this;
    }

    public function getStrLastConnectionDate(): ?\DateTimeInterface
    {
        return $this->strLastConnectionDate;
    }

    public function setStrLastConnectionDate(?\DateTimeInterface $strLastConnectionDate): self
    {
        $this->strLastConnectionDate = $strLastConnectionDate;

        return $this;
    }

    public function getStrStatut(): ?string
    {
        return $this->strStatut;
    }

    public function setStrStatut(?string $strStatut): self
    {
        $this->strStatut = $strStatut;

        return $this;
    }

    public function getDtLastActivity(): ?\DateTimeInterface
    {
        return $this->dtLastActivity;
    }

    public function setDtLastActivity(?\DateTimeInterface $dtLastActivity): self
    {
        $this->dtLastActivity = $dtLastActivity;

        return $this;
    }

    public function getFunction(): ?string
    {
        return $this->function;
    }

    public function setFunction(?string $function): self
    {
        $this->function = $function;

        return $this;
    }

    public function getStrPhone(): ?string
    {
        return $this->strPhone;
    }

    public function setStrPhone(?string $strPhone): self
    {
        $this->strPhone = $strPhone;

        return $this;
    }

    public function getStrMail(): ?string
    {
        return $this->strMail;
    }

    public function setStrMail(?string $strMail): self
    {
        $this->strMail = $strMail;

        return $this;
    }

    public function getStrIds(): ?int
    {
        return $this->strIds;
    }

    public function setStrIds(?int $strIds): self
    {
        $this->strIds = $strIds;

        return $this;
    }

    public function getBChangePassword(): ?bool
    {
        return $this->bChangePassword;
    }

    public function setBChangePassword(?bool $bChangePassword): self
    {
        $this->bChangePassword = $bChangePassword;

        return $this;
    }

    public function getIntConnexion(): ?int
    {
        return $this->intConnexion;
    }

    public function setIntConnexion(?int $intConnexion): self
    {
        $this->intConnexion = $intConnexion;

        return $this;
    }

    public function getStrFunction(): ?string
    {
        return $this->strFunction;
    }

    public function setStrFunction(?string $strFunction): self
    {
        $this->strFunction = $strFunction;

        return $this;
    }

    public function getLgEmplacementId(): ?string
    {
        return $this->lgEmplacementId;
    }

    public function setLgEmplacementId(?string $lgEmplacementId): self
    {
        $this->lgEmplacementId = $lgEmplacementId;

        return $this;
    }

    public function getBIsConnected(): ?bool
    {
        return $this->bIsConnected;
    }

    public function setBIsConnected(?bool $bIsConnected): self
    {
        $this->bIsConnected = $bIsConnected;

        return $this;
    }

    public function getLgSkin(): ?TSkin
    {
        return $this->lgSkin;
    }

    public function setLgSkin(?TSkin $lgSkin): self
    {
        $this->lgSkin = $lgSkin;

        return $this;
    }

    public function getLgLanguage(): ?TLanguage
    {
        return $this->lgLanguage;
    }

    public function setLgLanguage(?TLanguage $lgLanguage): self
    {
        $this->lgLanguage = $lgLanguage;

        return $this;
    }

   

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
   // private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
   private $password;

    /**
     * @ORM\Column(type="string", length=254, unique=true)
     */
    //private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getUsername()
    {
        return $this->strLogin;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->lgUserId,
            $this->strLogin,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->lgUserId,
            $this->strLogin,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized, array('allowed_classes' => false));
    }
}
