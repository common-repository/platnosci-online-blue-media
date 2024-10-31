<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a43c973e63e6dc74ba62c308140c771
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\' => 57,
            'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Client\\' => 56,
            'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\' => 56,
            'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\' => 59,
            'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\' => 51,
            'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\' => 70,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\' => 
        array (
            0 => __DIR__ . '/..' . '/br33f/php-ga4-mp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Common\\EventCollection' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Common/EventCollection.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Common\\UserProperties' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Common/UserProperties.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Common\\UserProperty' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Common/UserProperty.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Common\\ValidationMessage' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Common/ValidationMessage.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\AbstractEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/AbstractEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\AddPaymentInfoEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/AddPaymentInfoEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\AddShippingInfoEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/AddShippingInfoEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\AddToCartEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/AddToCartEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\BaseEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/BaseEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\BeginCheckoutEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/BeginCheckoutEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\ItemBaseEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/ItemBaseEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\LoginEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/LoginEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\PurchaseEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/PurchaseEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\RefundEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/RefundEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\RemoveFromCartEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/RemoveFromCartEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\SearchEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/SearchEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\SelectItemEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/SelectItemEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\SignUpEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/SignUpEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\ViewCartEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/ViewCartEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\ViewItemEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/ViewItemEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\ViewItemListEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/ViewItemListEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Event\\ViewSearchResultsEvent' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Event/ViewSearchResultsEvent.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\ExportableInterface' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/ExportableInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\HydratableInterface' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/HydratableInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Parameter\\AbstractParameter' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Parameter/AbstractParameter.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Parameter\\BaseParameter' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Parameter/BaseParameter.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Parameter\\ItemCollectionParameter' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Parameter/ItemCollectionParameter.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Parameter\\ItemParameter' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Parameter/ItemParameter.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Request\\AbstractRequest' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Request/AbstractRequest.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Request\\BaseRequest' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Request/BaseRequest.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Response\\AbstractResponse' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Response/AbstractResponse.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Response\\BaseResponse' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Response/BaseResponse.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\Response\\DebugResponse' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/Response/DebugResponse.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Dto\\ValidateInterface' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Dto/ValidateInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Enum\\ErrorCode' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Enum/ErrorCode.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Enum\\ValidationCode' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Enum/ValidationCode.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Exception\\HydrationException' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Exception/HydrationException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Exception\\ValidationException' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Exception/ValidationException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\HttpClient' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/HttpClient.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Br33f\\Ga4\\MeasurementProtocol\\Service' => __DIR__ . '/..' . '/br33f/php-ga4-mp/src/Service.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\BodySummarizer' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizer.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\BodySummarizerInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\ClientTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientTrait.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\HeaderProcessor' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\MessageFormatterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Isolated\\Blue_Media\\Isolated_Php_ga4_mp\\Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a43c973e63e6dc74ba62c308140c771::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a43c973e63e6dc74ba62c308140c771::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a43c973e63e6dc74ba62c308140c771::$classMap;

        }, null, ClassLoader::class);
    }
}
