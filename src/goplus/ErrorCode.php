<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus;

class ErrorCode
{
    const SUCCESS = 1;

    const DATA_PENDING_SYNC = 2;

    const ADDRESS_FORMAT_ERROR = 2004;

    const CHAIN_NOT_SUPPORTED = 2018;

    const NON_CONTRACT_ADDRESS = 2020;

    const CONTRACT_INFO_NOT_FOUND = 2021;

    const DAPP_NOT_FOUND = 2026;

    const ABI_NOT_FOUND = 2027;

    const ABI_FUNCTION_UNSUPPOERT = 2028;

    const APP_KEY_NOT_EXIST = 4010;

    const SIGNATURE_EXPIRATION = 4011;

    const SIGNATURE_VERIFICATION_FAILURE = 4012;

    const FREQUENCY_OVER_LIMIT = 4029;

    const INVALID_TOKEN = 4022;

    const TOKEN_NOT_FOUND = 4023;

    const SERVER_ERROR = 5000;

    const PARAM_ERROR = 5006;
}
