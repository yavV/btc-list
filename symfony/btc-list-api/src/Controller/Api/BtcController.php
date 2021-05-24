<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\DTO\BtcFeeDTO;
use App\Service\BtcService;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/api/btc")
 * @package App\Controller\Api
 */
class BtcController extends AbstractFOSRestController
{
    private BtcService $btcService;

    /**
     * BtcController constructor.
     * @param BtcService $btcService
     */
    public function __construct(BtcService $btcService)
    {
        $this->btcService = $btcService;
    }

    /**
     * @Rest\Get ("/last-transactions-fees")
     * @return BtcFeeDTO[]|JsonResponse
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function getLastTransactionsFees()
    {
        return new JsonResponse($this->btcService->getLastBtcTransactionsFees());
    }
}
