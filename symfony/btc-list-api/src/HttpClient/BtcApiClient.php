<?php

declare(strict_types=1);

namespace App\HttpClient;

use App\DTO\BtcBlockDTO;
use App\DTO\BtcLastBlockDTO;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use JMS\Serializer\ArrayTransformerInterface;
use Symfony\Component\HttpFoundation\Request;

final class BtcApiClient extends AbstractApiClient implements BtcApiClientInterface
{
    /**
     * BTCApiClient constructor.
     * @param ArrayTransformerInterface $transformer
     * @param HttpClient $httpClient
     * @param MessageFactory $messageFactory
     * @param string $host
     */
    public function __construct(
        ArrayTransformerInterface $transformer,
        HttpClient $httpClient,
        MessageFactory $messageFactory,
        string $host
    ) {
        parent::__construct($transformer, $httpClient, $messageFactory, $host);
    }

    /**
     * @return BtcLastBlockDTO|null
     * @throws \Http\Client\Exception
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getLatestBlock(): ?BtcLastBlockDTO
    {
        return $this->process(
            Request::METHOD_GET,
            'latestblock',
            [],
            [],
            BtcLastBlockDTO::class
        );
    }

    /**
     * @param int $height
     * @return BtcBlockDTO|null
     * @throws \Http\Client\Exception
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getBlockByHeight(int $height): ?BtcBlockDTO
    {
        $btcBlockDTOs = $this->process(
            Request::METHOD_GET,
            'block-height/' . $height,
            [],
            [],
            'array<' . BtcBlockDTO::class . '>',
            [],
            'blocks'
        );

        if (!is_array($btcBlockDTOs) || count($btcBlockDTOs) === 0) {
            return null;
        }

        return $btcBlockDTOs[0];
    }
}
