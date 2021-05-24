<?php

declare(strict_types=1);

namespace App\DTO;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

final class BtcTransactionDTO
{
    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("hash")
     */
    private int $hash;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("ver")
     */
    private int $ver;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("vin_sz")
     */
    private int $vin_sz;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("vout_sz")
     */
    private int $voutSz;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("size")
     */
    private int $size;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("weight")
     */
    private int $weight;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("fee")
     */
    private int $fee;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("relayed_by")
     */
    private int $relayedBy;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("lock_time")
     */
    private int $lockTime;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("tx_index")
     */
    private int $txIndex;

    /**
     * @Assert\NotBlank()
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("double_spend")
     */
    private bool $doubleSpend;

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
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("block_height")
     */
    private int $blockHeight;

    /**
     * @return int
     */
    public function getHash(): int
    {
        return $this->hash;
    }

    /**
     * @param int $hash
     */
    public function setHash(int $hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @return int
     */
    public function getVer(): int
    {
        return $this->ver;
    }

    /**
     * @param int $ver
     */
    public function setVer(int $ver): void
    {
        $this->ver = $ver;
    }

    /**
     * @return int
     */
    public function getVinSz(): int
    {
        return $this->vin_sz;
    }

    /**
     * @param int $vin_sz
     */
    public function setVinSz(int $vin_sz): void
    {
        $this->vin_sz = $vin_sz;
    }

    /**
     * @return int
     */
    public function getVoutSz(): int
    {
        return $this->voutSz;
    }

    /**
     * @param int $voutSz
     */
    public function setVoutSz(int $voutSz): void
    {
        $this->voutSz = $voutSz;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getFee(): int
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     */
    public function setFee(int $fee): void
    {
        $this->fee = $fee;
    }

    /**
     * @return int
     */
    public function getRelayedBy(): int
    {
        return $this->relayedBy;
    }

    /**
     * @param int $relayedBy
     */
    public function setRelayedBy(int $relayedBy): void
    {
        $this->relayedBy = $relayedBy;
    }

    /**
     * @return int
     */
    public function getLockTime(): int
    {
        return $this->lockTime;
    }

    /**
     * @param int $lockTime
     */
    public function setLockTime(int $lockTime): void
    {
        $this->lockTime = $lockTime;
    }

    /**
     * @return int
     */
    public function getTxIndex(): int
    {
        return $this->txIndex;
    }

    /**
     * @param int $txIndex
     */
    public function setTxIndex(int $txIndex): void
    {
        $this->txIndex = $txIndex;
    }

    /**
     * @return bool
     */
    public function isDoubleSpend(): bool
    {
        return $this->doubleSpend;
    }

    /**
     * @param bool $doubleSpend
     */
    public function setDoubleSpend(bool $doubleSpend): void
    {
        $this->doubleSpend = $doubleSpend;
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
     * @return int
     */
    public function getBlockHeight(): int
    {
        return $this->blockHeight;
    }

    /**
     * @param int $blockHeight
     */
    public function setBlockHeight(int $blockHeight): void
    {
        $this->blockHeight = $blockHeight;
    }

//    /**
//     * @Assert\NotBlank()
//     * @var int
//     * @Serializer\Type("int")
//     * @Serializer\SerializedName("currency")
//     */
//    private string $inputs;
//
//    /**
//     * @Assert\NotBlank()
//     * @var int
//     * @Serializer\Type("int")
//     * @Serializer\SerializedName("currency")
//     */
//    private string $out;


}