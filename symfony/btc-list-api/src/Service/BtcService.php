<?php

declare(strict_types=1);

namespace App\Service;

use App\Cache\BtcHttpClientCacheProvider;
use App\DTO\BtcBlockDTO;
use App\DTO\BtcFeeDTO;
use App\HttpClient\BtcApiClientInterface;

class BtcService
{
    private const LAST_BLOCK_AMOUNT = 100;
    private BtcApiClientInterface $btcApiClient;

    private BtcHttpClientCacheProvider $cache;

    /**
     * @param BtcApiClientInterface $btcApiClient
     * @param BtcHttpClientCacheProvider $cache
     */
    public function __construct(BtcApiClientInterface $btcApiClient, BtcHttpClientCacheProvider $cache)
    {
        $this->btcApiClient = $btcApiClient;
        $this->cache = $cache;
    }

    /**
     * @return BtcFeeDTO[]|null
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function getLastBtcTransactionsFees(): ?array
    {
        $latestBtcBlock = $this->btcApiClient->getLatestBlock();

        if (null === $latestBtcBlock) {
            return null;
        }

        $lastTransactionFees = [];

        for ($i = $latestBtcBlock->getHeight() - self::LAST_BLOCK_AMOUNT + 1; $i <= $latestBtcBlock->getHeight(); $i++) {
            $block = $this->getBlockByHeight($i);

            if (null === $block) {
                return null;
            }

            $lastTransactionFees[] = $this->getBlockFees($block);
        }

        return $lastTransactionFees;
    }

    /**
     * @param int $blockHeight
     * @return BtcBlockDTO|null
     * @throws \Psr\Cache\InvalidArgumentException
     */
    private function getBlockByHeight(int $blockHeight): ?BtcBlockDTO
    {
        $cacheKey = sprintf('%s_%s', 'blockHeight', md5((string) $blockHeight));

        if ($this->cache->isHit($cacheKey) === true) {
            $btcBlockDTO = $this->cache->get($cacheKey);
        } else {
            $btcBlockDTO = $this->btcApiClient->getBlockByHeight($blockHeight);
            $this->cache->save($cacheKey, $btcBlockDTO);
        }

        return $btcBlockDTO;
    }

    /**
     * @param BtcBlockDTO $btcBlockDTO
     * @return BtcFeeDTO|null
     */
    private function getBlockFees(BtcBlockDTO $btcBlockDTO): ?BtcFeeDTO
    {
        $btcTransactionDTOs = $btcBlockDTO->getTx();

        if (count($btcTransactionDTOs) === 0) {
            return null;
        }

        $btcFeeDTO = new BtcFeeDTO();

        $btcSumFees = 0;

        foreach ($btcTransactionDTOs as $btcTransactionDTO) {
            $fee = $btcTransactionDTO->getFee();

            $btcSumFees += $fee;

            if ($btcFeeDTO->getMin() > $fee) {
                $btcFeeDTO->setMin($fee);
            }

            if ($btcFeeDTO->getMax() < $fee) {
                $btcFeeDTO->setMax($fee);
            }
        }

        $btcFeeDTO->setAvg((float) $btcSumFees / count($btcTransactionDTOs));

        return $btcFeeDTO;
    }
}
