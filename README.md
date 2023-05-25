# GoPlus SDK For PHP

### Installation

```
composer require goplus/php-sdk
```

### Get AccessToken
```php

use Goplus\Auth\Auth;

$key = "";
$secret = "";
$auth = (new Auth($key, $secret))->getAccessToken();

```


### Get Supported Blockchains

```php
use Goplus\Api\Chain;

(new Chain())->getChainList();

```

### Token Security

```php
use Goplus\Api\Token;

$data = (new Token())->tokenSecurity("1", "0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48");

// or
$accessToken = $auth->getResult()->getAccessToken();
$data = (new Token($accessToken))->tokenSecurity("1", ["0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48", "0xC02aaA39b223FE8D0A0e5C4F27eAD9083C756Cc2", ...]);

```

### Address Security

```php
use Goplus\Api\Address;

(new Address())->addressSecurity("0xc8b759860149542a98a3eb57c14aadf59d6d89b9");

```


### Approval Security API v1
```php
use Goplus\Api\Approve;

(new Approve())->approveSecurityV1("1", "0x4639cd8cd52ec1cf2e496a606ce28d8afb1c792f");

```


### Approval Security API v2

#### Token Approval Security

```php
use Goplus\Api\Approve;

(new Approve())->tokenApproveSecurity("56", "0xd018e2b543a2669410537f96293590138cacedf3");

```

#### ERC721 NFT Approval Security

```php
use Goplus\Api\Approve;

(new Approve())->erc721ApproveSecurity("1", "0xd95dbdab08a9fed2d71ac9c3028aac40905d8cf3");

```

#### ERC1155 NFT Approval Security

```php
use Goplus\Api\Approve;

(new Approve())->erc1155ApproveSecurity("56", "0xb0dccbb9c4a65a94a41a0165aaea79c8b2fc54ce");

```


### Signature Data Decode
```php
use Goplus\Api\Decode;

(new Decode())->signatureDataDecode("1", "0xa0712d680000000000000000000000000000000000000000000000000000000062fee481", "0x4cc8aa0c6ffbe18534584da9b592aa438733ee66")

```

### NFT Security
```php
use Goplus\Api\Nft;

(new Nft())->nftSecurity("1", "0x82f5ef9ddc3d231962ba57a9c2ebb307dc8d26c2")

```

### dApp Security Info API
```php
use Goplus\Api\Dapp;

(new Dapp())->dappSecurity("https://for.tube")
```

### Phishing Site Detection API
```php
use Goplus\Api\PhishingSite;

(new PhishingSite())->pushingSiteSecurity("https://xn--cm-68s.cc/")
```