<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListCurrencies
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $nameDe;

    /**
     * @var string|null
     */
    protected $nameEn;

    /**
     * @var string|null
     */
    protected $nameFr;

    /**
     * @var string|null
     */
    protected $nameEs;

    /**
     * @var string|null
     */
    protected $nameNl;

    /**
     * @var string|null
     */
    protected $nameIt;

    /**
     * @var string
     */
    protected $symbol;

    /**
     * @var string
     */
    protected $minPrice;

    /**
     * @var string
     */
    protected $maxPrice;

    /**
     * @var float|null
     */
    protected $toEUR;

    /**
     * @var float|null
     */
    protected $toUSD;

    /**
     * @var float|null
     */
    protected $toCHF;

    /**
     * @var string[]
     */
    protected $isDefaultForCountries;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNameDe(): ?string
    {
        return $this->nameDe;
    }

    public function setNameDe(?string $nameDe): self
    {
        $this->nameDe = $nameDe;

        return $this;
    }

    public function getNameEn(): ?string
    {
        return $this->nameEn;
    }

    public function setNameEn(?string $nameEn): self
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    public function getNameFr(): ?string
    {
        return $this->nameFr;
    }

    public function setNameFr(?string $nameFr): self
    {
        $this->nameFr = $nameFr;

        return $this;
    }

    public function getNameEs(): ?string
    {
        return $this->nameEs;
    }

    public function setNameEs(?string $nameEs): self
    {
        $this->nameEs = $nameEs;

        return $this;
    }

    public function getNameNl(): ?string
    {
        return $this->nameNl;
    }

    public function setNameNl(?string $nameNl): self
    {
        $this->nameNl = $nameNl;

        return $this;
    }

    public function getNameIt(): ?string
    {
        return $this->nameIt;
    }

    public function setNameIt(?string $nameIt): self
    {
        $this->nameIt = $nameIt;

        return $this;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getMinPrice(): string
    {
        return $this->minPrice;
    }

    public function setMinPrice(string $minPrice): self
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    public function getMaxPrice(): string
    {
        return $this->maxPrice;
    }

    public function setMaxPrice(string $maxPrice): self
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    public function getToEUR(): ?float
    {
        return $this->toEUR;
    }

    public function setToEUR(?float $toEUR): self
    {
        $this->toEUR = $toEUR;

        return $this;
    }

    public function getToUSD(): ?float
    {
        return $this->toUSD;
    }

    public function setToUSD(?float $toUSD): self
    {
        $this->toUSD = $toUSD;

        return $this;
    }

    public function getToCHF(): ?float
    {
        return $this->toCHF;
    }

    public function setToCHF(?float $toCHF): self
    {
        $this->toCHF = $toCHF;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getIsDefaultForCountries(): array
    {
        return $this->isDefaultForCountries;
    }

    /**
     * @param string[] $isDefaultForCountries
     */
    public function setIsDefaultForCountries(array $isDefaultForCountries): self
    {
        $this->isDefaultForCountries = $isDefaultForCountries;

        return $this;
    }
}
