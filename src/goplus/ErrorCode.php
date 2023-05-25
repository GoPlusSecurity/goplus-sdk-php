<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus;

class ErrorCode
{
    public const SUCCESS = 1;

    public const DATA_PENDING_SYNC = 2;

    public const ADDRESS_FORMAT_ERROR = 2004;

    public const CHAIN_NOT_SUPPORTED = 2018;

    public const NON_CONTRACT_ADDRESS = 2020;

    public const CONTRACT_INFO_NOT_FOUND = 2021;

    public const DAPP_NOT_FOUND = 2026;

    public const ABI_NOT_FOUND = 2027;

    public const ABI_FUNCTION_UNSUPPOERT = 2028;

    public const APP_KEY_NOT_EXIST = 4010;

    public const SIGNATURE_EXPIRATION = 4011;

    public const SIGNATURE_VERIFICATION_FAILURE = 4012;

    public const FREQUENCY_OVER_LIMIT = 4029;

    public const INVALID_TOKEN = 4022;

    public const TOKEN_NOT_FOUND = 4023;

    public const SERVER_ERROR = 5000;

    public const PARAM_ERROR = 5006;
}
