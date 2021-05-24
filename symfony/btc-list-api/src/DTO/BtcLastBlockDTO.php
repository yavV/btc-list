<?php

declare(strict_types=1);

namespace App\DTO;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

final class BtcLastBlockDTO
{
    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("height")
     */
    private int $height;

    /**
     * @Assert\NotBlank()
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hash")
     */
    private string $hash;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("time")
     */
    private int $time;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("block_index")
     */
    private int $blockIndex;

    /**
     * @Assert\NotBlank()
     * @var array
     * @Serializer\Type("array")
     * @Serializer\SerializedName("txIndexes")
     */
    private array $txIndexes;

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getBlockIndex(): int
    {
        return $this->blockIndex;
    }

    /**
     * @param int $blockIndex
     */
    public function setBlockIndex(int $blockIndex): void
    {
        $this->blockIndex = $blockIndex;
    }

    /**
     * @return int[]
     */
    public function getTxIndexes(): array
    {
        return $this->txIndexes;
    }

    /**
     * @param array $txIndexes
     */
    public function setTxIndexes(array $txIndexes): void
    {
        $this->txIndexes = $txIndexes;
    }
}
