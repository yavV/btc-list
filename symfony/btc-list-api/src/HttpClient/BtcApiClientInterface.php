<?php

declare(strict_types=1);

namespace App\HttpClient;

use App\DTO\BtcBlockDTO;
use App\DTO\BtcLastBlockDTO;

interface BtcApiClientInterface
{
    /**
     * @return BtcLastBlockDTO|null
     */
    public function getLatestBlock(): ?BtcLastBlockDTO;

    /**
     * @param int $height
     * @return BtcBlockDTO|null
     */
    public function getBlockByHeight(int $height): ?BtcBlockDTO;
}
