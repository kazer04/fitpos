<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTypeDepense
 *
 * @ORM\Table(name="t_type_depense")
 * @ORM\Entity
 */
class TTypeDepense
{
    /**
     * @var string
     *
     * @ORM\Column(name="lg_TYPE_DEPENSE_ID", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lgTypeDepenseId;

    /**
     * @var string
     *
     * @ORM\Column(name="str_TYPE_DEPENSE", type="string", length=40, nullable=true)
     */
    private $strTypeDepense;

    /**
     * @var string
     *
     * @ORM\Column(name="str_NUMERO_COMPTE", type="string", length=20, nullable=true)
     */
    private $strNumeroCompte;

    public function getLgTypeDepenseId(): ?string
    {
        return $this->lgTypeDepenseId;
    }

    public function getStrTypeDepense(): ?string
    {
        return $this->strTypeDepense;
    }

    public function setStrTypeDepense(?string $strTypeDepense): self
    {
        $this->strTypeDepense = $strTypeDepense;

        return $this;
    }

    public function getStrNumeroCompte(): ?string
    {
        return $this->strNumeroCompte;
    }

    public function setStrNumeroCompte(?string $strNumeroCompte): self
    {
        $this->strNumeroCompte = $strNumeroCompte;

        return $this;
    }


}

