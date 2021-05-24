<?php

declare(strict_types=1);

namespace App\DTO;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

final class BtcBlockDTO
{
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
     * @Serializer\SerializedName("ver")
     */
    private int $ver;

    /**
     * @Assert\NotBlank()
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("prev_block")
     */
    private string $prevBlock;

    /**
     * @Assert\NotBlank()
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("mrkl_root")
     */
    private string  $mrklRoot;

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
     * @Serializer\SerializedName("bits")
     */
    private int $bits;

    /**
     * @Assert\NotBlank()
     * @var array
     * @Serializer\Type("array")
     * @Serializer\SerializedName("next_block")
     */
    private array $nextBlock;

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
     * @Serializer\SerializedName("nonce")
     */
    private int $nonce;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("n_tx")
     */
    private int $nTx;

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
     * @Serializer\SerializedName("block_index")
     */
    private int $blockIndex;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("main_chain")
     */
    private int $mainChain;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("height")
     */
    private int $height;

    /**
     * @Assert\NotBlank()
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("weight")
     */
    private int $weight;

    /**
     * @Assert\NotBlank()
     * @var BtcTransactionDTO[]
     * @Serializer\Type("array<App\DTO\BtcTransactionDTO>")
     * @Serializer\SerializedName("tx")
     */
    private array $tx;

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
     * @return string
     */
    public function getPrevBlock(): string
    {
        return $this->prevBlock;
    }

    /**
     * @param string $prevBlock
     */
    public function setPrevBlock(string $prevBlock): void
    {
        $this->prevBlock = $prevBlock;
    }

    /**
     * @return string
     */
    public function getMrklRoot(): string
    {
        return $this->mrklRoot;
    }

    /**
     * @param string $mrklRoot
     */
    public function setMrklRoot(string $mrklRoot): void
    {
        $this->mrklRoot = $mrklRoot;
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
    public function getBits(): int
    {
        return $this->bits;
    }

    /**
     * @param int $bits
     */
    public function setBits(int $bits): void
    {
        $this->bits = $bits;
    }

    /**
     * @return array
     */
    public function getNextBlock(): array
    {
        return $this->nextBlock;
    }

    /**
     * @param array $nextBlock
     */
    public function setNextBlock(array $nextBlock): void
    {
        $this->nextBlock = $nextBlock;
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
    public function getNonce(): int
    {
        return $this->nonce;
    }

    /**
     * @param int $nonce
     */
    public function setNonce(int $nonce): void
    {
        $this->nonce = $nonce;
    }

    /**
     * @return int
     */
    public function getNTx(): int
    {
        return $this->nTx;
    }

    /**
     * @param int $nTx
     */
    public function setNTx(int $nTx): void
    {
        $this->nTx = $nTx;
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
    public function getMainChain(): int
    {
        return $this->mainChain;
    }

    /**
     * @param int $mainChain
     */
    public function setMainChain(int $mainChain): void
    {
        $this->mainChain = $mainChain;
    }

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
     * @return BtcTransactionDTO[]
     */
    public function getTx(): array
    {
        return $this->tx;
    }

    /**
     * @param BtcTransactionDTO[] $tx
     */
    public function setTx(array $tx): void
    {
        $this->tx = $tx;
    }
}
