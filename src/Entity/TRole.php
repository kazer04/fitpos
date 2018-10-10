<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * TRole
 *
 * @ORM\Table(name="t_role", uniqueConstraints={@ORM\UniqueConstraint(name="lg_ROLE_ID", columns={"lg_ROLE_ID"})})
 * @ORM\Entity
 */
class TRole
{
/**
 * @var string
 *
 * @ORM\Column(name="lg_ROLE_ID", type="string", length=20, nullable=false)
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="IDENTITY")
 */
private $lgRoleId;

/**
 * @var string
 *
 * @ORM\Column(name="str_NAME", type="string", length=50, nullable=true)
 */
private $strName;

/**
 * @var string
 *
 * @ORM\Column(name="str_DESIGNATION", type="string", length=50, nullable=true)
 */
private $strDesignation;

/**
 * @var string
 *
 * @ORM\Column(name="str_TYPE", type="string", length=20, nullable=true)
 */
private $strType = 'custom';

/**
 * @var string
 *
 * @ORM\Column(name="str_STATUT", type="string", length=50, nullable=true)
 */
private $strStatut = 'enable';

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

public function getLgRoleId(): ?string
{
return $this->lgRoleId;
}

public function getStrName(): ?string
{
return $this->strName;
}

public function setStrName(?string $strName): self
{
$this->strName = $strName;

return $this;
}

public function getStrDesignation(): ?string
{
return $this->strDesignation;
}

public function setStrDesignation(?string $strDesignation): self
{
$this->strDesignation = $strDesignation;

return $this;
}

public function getStrType(): ?string
{
return $this->strType;
}

public function setStrType(?string $strType): self
{
$this->strType = $strType;

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

private $strdtCreated;
public function getStrdtCreated()
{
$stringValue = "  ";
// $dateImmutable = DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now'));
if ($this->dtCreated instanceof \DateTime) {
$stringValue = $this->dtCreated->format('Y-m-d H:i:s');
}
//$output =format_date($this->strLastConnectionDate, 'dd-MM-yyyy, HH:mm');//date('H\hi m/d/Y', $this->strLastConnectionDate);;

return $stringValue; //array('ROLE_USER');
}


private $stractionEDIT;
public function getstractionEDIT()
{
$stractionEDIT = "<td data-value='1'><a href='../roles/edit?ID=".$this->lgRoleId."'    class='md-btn md-raised m-b-sm w-xs green'>Edit</a></td>";

return $stractionEDIT; //array('ROLE_USER');
}

private $stractionDELETE;
public function getstractionDELETE()
{
$stractionDELETE= "<td data-value='1'><a href='../roles/delete?ID=".$this->lgRoleId."'  class='md-btn md-raised m-b-sm w-xs red'>Delete</a></td>";

return $stractionDELETE; //array('ROLE_USER');
}
}

