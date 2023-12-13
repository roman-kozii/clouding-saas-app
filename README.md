Coulding SaaS Web app (PHP)

# Introduction
Welcome to use Cloud Developer Tool Kit (SDK) 3.0. SDK3.0 is a supporting tool for the cloud API3.0 platform.
To facilitate PHP developers to debug and access Cloud product APIs, here we introduce you to the Tencent Cloud Development Kit for PHP and provide a simple example of using the development kit for the first time. Allows you to quickly obtain Tencent Cloud PHP SDK and start calling.
# Depends on the environment
1. PHP version 5.6.0 and above
2. Activate the corresponding product from the Cloud console
3. Obtain the SecretID, SecretKey and calling address (endpoint). The general form of endpoint is *.tencentcloudapi.com. For example, the calling address of CVM is cvm.tencentcloudapi.com. Please refer to each product description for details.

# Get the installation
Before installing the PHP SDK, obtain security credentials. Before using the cloud API for the first time, users first need to apply for security credentials on the Tencent Cloud console. The security credentials include SecretID and SecretKey. SecretID is used to identify the API caller, and SecretKey is used to encrypt the signature string and server. The key used to verify the signed string. SecretKey must be kept strictly to avoid leakage.
## Install via Composer
Getting the installation via Composer is the recommended way to use the PHP SDK. Composer is PHP's dependency management tool that takes the dependencies your project needs and installs them into your project. For details about Composer, please refer to the Composer official website.
1. Install Composer:
     For windows environment, please visit [Composer official website](https://getcomposer.org/download/) to download and install the installation package.
    
     In unix environment, execute the following command on the command line to install.
     > curl -sS https://getcomposer.org/installer | php

     > sudo mv composer.phar /usr/local/bin/composer
2. It is recommended that users in mainland China set up Tencent Cloud mirror source: `composer config -g repos.packagist composer https://mirrors.tencent.com/composer/`
3. Execute the command `composer require tencentcloud/tencentcloud-sdk-php` to add dependencies. If you only want to install a certain product, you can use `composer require tencentcloud/product name`, for example `composer require tencentcloud/cvm`. It is recommended to use a fixed SDK version to develop, test and publish applications, for example `composer require tencentcloud/tencentcloud-sdk-php=xx.yy.zz`
4. Add the following reference code to the code. Note: The following is only an example. Composer will generate the vendor directory in the project root directory. `/path/to/` is the actual absolute path of the project root directory. If executed in the current directory, the absolute path can be omitted.
    
     > require '/path/to/vendor/autoload.php';

# Example

The following takes the query instance interface DescribeInstances as an example:

### Short version

```php
<?php
require_once '/path/to/vendor/autoload.php';

use TencentCloud\Cvm\V20170312\CvmClient;
use TencentCloud\Cvm\V20170312\Models\DescribeInstancesRequest;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;

try {
     // In order to protect the security of the key, it is recommended to set the key in the environment variable or configuration file.
     // Hardcoding the key into the code may be exposed when the code is leaked, which has security risks and is not recommended.
     // $cred = new Credential("SecretId", "SecretKey");
     $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                            getenv("TENCENTCLOUD_SECRET_KEY"));
     $client = new CvmClient($cred, "ap-guangzhou");
     $req = new DescribeInstancesRequest();
     $resp = $client->DescribeInstances($req);
     print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
     echo $e;
}
```

### Detailed version

```php
<?php
require_once '/path/to/vendor/autoload.php';
//Import the client of the corresponding product module
use TencentCloud\Cvm\V20170312\CvmClient;
//Import the Request class corresponding to the interface to be requested
use TencentCloud\Cvm\V20170312\Models\DescribeInstancesRequest;
use TencentCloud\Cvm\V20170312\Models\Filter;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
//Import optional configuration classes
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
     // Instantiate a certificate object. The input parameters need to be the Tencent Cloud account SecretId and SecretKey.
     // In order to protect the security of the key, it is recommended to set the key in the environment variable or configuration file.
     // Hardcoding the key into the code may be exposed when the code is leaked, which has security risks and is not recommended.
     // $cred = new Credential("SecretId", "SecretKey");
     $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                            getenv("TENCENTCLOUD_SECRET_KEY"));

     // Instantiate an http option, optional, can be skipped if there are no special requirements
     $httpProfile = new HttpProfile();
     //Configure proxy
     // $httpProfile->setProxy("https://ip:port");
     $httpProfile->setReqMethod("GET"); // post request (default is post request)
     $httpProfile->setReqTimeout(30); //Request timeout in seconds (default 60 seconds)
     $httpProfile->setEndpoint("cvm.ap-shanghai.tencentcloudapi.com"); // Specify the access region domain name (default is nearby access)

     // Instantiate a client option, optional, can be skipped if there are no special requirements
     $clientProfile = new ClientProfile();
     $clientProfile->setSignMethod("TC3-HMAC-SHA256"); //Specify signature algorithm (default is HmacSHA256)
     $clientProfile->setHttpProfile($httpProfile);

     // Instantiate the client object to request the product (take cvm as an example), clientProfile is optional
     $client = new CvmClient($cred, "ap-shanghai", $clientProfile);

     // Instantiate a cvm instance information query request object. Each interface will correspond to a request object.
     $req = new DescribeInstancesRequest();

     // Fill in the request parameters. The member variables of the request object here are the input parameters of the corresponding interface.
     // You can check the definition of request parameters through the official website interface document or jump to the definition of the request object.
     $respFilter = new Filter(); // Create a Filter object and query the cvm instance using the zone dimension
     $respFilter->Name = "zone";
     $respFilter->Values = ["ap-shanghai-1", "ap-shanghai-2"];
     $req->Filters = [$respFilter]; // Filters is a list whose members are Filter objects

     // Call the DescribeInstances method through the client object to initiate a request. Note that the request method name corresponds to the request object
     //The returned resp is an instance of the DescribeInstancesResponse class, corresponding to the request object
     $resp = $client->DescribeInstances($req);

     // Output the string return packet in json format
     print_r($resp->toJsonString());

     // You can also take out a single value.
     // You can check the definition of the return field through the official website interface document or jump to the definition of the response object.
     print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
     echo $e;
}
```

## Common Client

Starting from version 3.0.839, the common request method Common Client is supported and can initiate interface requests not defined in the SDK.

Note: Currently only the POST method is supported, and the signature method only supports signature method v3.


# common problem

## acting

If there is a proxy environment, you need to set the system environment variable `https_proxy`, otherwise it may not be called normally and a connection timeout exception will be thrown.

Or use GuzzleHttp proxy configuration:
```php
$httpProfile = new HttpProfile();
$httpPro
