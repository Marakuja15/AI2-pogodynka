<?php

namespace App\Entity;

use App\Repository\MeasurementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeasurementRepository::class)]
class Measurement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column]
    private ?float $temperatureC = null;

    #[ORM\Column(nullable: true)]
    private ?float $feelsLikeC = null;

    #[ORM\Column(nullable: true)]
    private ?int $pressureHpa = null;

    #[ORM\Column(nullable: true)]
    private ?int $humidityPercent = null;

    #[ORM\Column(nullable: true)]
    private ?float $windSpeedMs = null;

    #[ORM\Column(nullable: true)]
    private ?int $windDirectionDeg = null;

    #[ORM\Column(nullable: true)]
    private ?float $precipitationMn = null;

    #[ORM\Column(nullable: true)]
    private ?int $cloudCoverPercent = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $source = null;

    #[ORM\ManyToOne(inversedBy: 'measurements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(?\DateTimeImmutable $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getTemperatureC(): ?float
    {
        return $this->temperatureC;
    }

    public function setTemperatureC(?float $temperatureC): static
    {
        $this->temperatureC = $temperatureC;
        return $this;
    }

    public function getFeelsLikeC(): ?float
    {
        return $this->feelsLikeC;
    }

    public function setFeelsLikeC(?float $feelsLikeC): static
    {
        $this->feelsLikeC = $feelsLikeC;

        return $this;
    }

    public function getPressureHpa(): ?int
    {
        return $this->pressureHpa;
    }

    public function setPressureHpa(?int $pressureHpa): static
    {
        $this->pressureHpa = $pressureHpa;

        return $this;
    }

    public function getHumidityPercent(): ?int
    {
        return $this->humidityPercent;
    }

    public function setHumidityPercent(?int $humidityPercent): static
    {
        $this->humidityPercent = $humidityPercent;

        return $this;
    }

    public function getWindSpeedMs(): ?float
    {
        return $this->windSpeedMs;
    }

    public function setWindSpeedMs(?float $windSpeedMs): static
    {
        $this->windSpeedMs = $windSpeedMs;

        return $this;
    }

    public function getWindDirectionDeg(): ?int
    {
        return $this->windDirectionDeg;
    }

    public function setWindDirectionDeg(?int $windDirectionDeg): static
    {
        $this->windDirectionDeg = $windDirectionDeg;

        return $this;
    }

    public function getPrecipitationMn(): ?float
    {
        return $this->precipitationMn;
    }

    public function setPrecipitationMn(?float $precipitationMn): static
    {
        $this->precipitationMn = $precipitationMn;

        return $this;
    }

    public function getCloudCoverPercent(): ?int
    {
        return $this->cloudCoverPercent;
    }

    public function setCloudCoverPercent(?int $cloudCoverPercent): static
    {
        $this->cloudCoverPercent = $cloudCoverPercent;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): static
    {
        $this->source = $source;

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }
}
