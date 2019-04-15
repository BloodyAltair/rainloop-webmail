<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28ee81a4685b992b3bf21c757c75dbdb
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unsplash\\OAuth2\\Client\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'Crew\\Unsplash\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unsplash\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/hughbertd/oauth2-unsplash/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Crew\\Unsplash\\' => 
        array (
            0 => __DIR__ . '/..' . '/unsplash/unsplash/src',
        ),
    );

    public static $classMap = array (
        'Crew\\Unsplash\\ArrayObject' => __DIR__ . '/..' . '/unsplash/unsplash/src/ArrayObject.php',
        'Crew\\Unsplash\\Category' => __DIR__ . '/..' . '/unsplash/unsplash/src/Category.php',
        'Crew\\Unsplash\\Collection' => __DIR__ . '/..' . '/unsplash/unsplash/src/Collection.php',
        'Crew\\Unsplash\\Connection' => __DIR__ . '/..' . '/unsplash/unsplash/src/Connection.php',
        'Crew\\Unsplash\\CuratedBatch' => __DIR__ . '/..' . '/unsplash/unsplash/src/CuratedBatch.php',
        'Crew\\Unsplash\\CuratedCollection' => __DIR__ . '/..' . '/unsplash/unsplash/src/CuratedCollection.php',
        'Crew\\Unsplash\\Endpoint' => __DIR__ . '/..' . '/unsplash/unsplash/src/Endpoint.php',
        'Crew\\Unsplash\\Exception' => __DIR__ . '/..' . '/unsplash/unsplash/src/Exception.php',
        'Crew\\Unsplash\\HttpClient' => __DIR__ . '/..' . '/unsplash/unsplash/src/HttpClient.php',
        'Crew\\Unsplash\\PageResult' => __DIR__ . '/..' . '/unsplash/unsplash/src/PageResult.php',
        'Crew\\Unsplash\\Photo' => __DIR__ . '/..' . '/unsplash/unsplash/src/Photo.php',
        'Crew\\Unsplash\\Search' => __DIR__ . '/..' . '/unsplash/unsplash/src/Search.php',
        'Crew\\Unsplash\\Stat' => __DIR__ . '/..' . '/unsplash/unsplash/src/Stat.php',
        'Crew\\Unsplash\\User' => __DIR__ . '/..' . '/unsplash/unsplash/src/User.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'League\\OAuth2\\Client\\Grant\\AbstractGrant' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/AbstractGrant.php',
        'League\\OAuth2\\Client\\Grant\\AuthorizationCode' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/AuthorizationCode.php',
        'League\\OAuth2\\Client\\Grant\\ClientCredentials' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/ClientCredentials.php',
        'League\\OAuth2\\Client\\Grant\\Exception\\InvalidGrantException' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/Exception/InvalidGrantException.php',
        'League\\OAuth2\\Client\\Grant\\GrantFactory' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/GrantFactory.php',
        'League\\OAuth2\\Client\\Grant\\Password' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/Password.php',
        'League\\OAuth2\\Client\\Grant\\RefreshToken' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/RefreshToken.php',
        'League\\OAuth2\\Client\\OptionProvider\\HttpBasicAuthOptionProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/HttpBasicAuthOptionProvider.php',
        'League\\OAuth2\\Client\\OptionProvider\\OptionProviderInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/OptionProviderInterface.php',
        'League\\OAuth2\\Client\\OptionProvider\\PostAuthOptionProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/PostAuthOptionProvider.php',
        'League\\OAuth2\\Client\\Provider\\AbstractProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/AbstractProvider.php',
        'League\\OAuth2\\Client\\Provider\\Exception\\IdentityProviderException' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/Exception/IdentityProviderException.php',
        'League\\OAuth2\\Client\\Provider\\GenericProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/GenericProvider.php',
        'League\\OAuth2\\Client\\Provider\\GenericResourceOwner' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/GenericResourceOwner.php',
        'League\\OAuth2\\Client\\Provider\\ResourceOwnerInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/ResourceOwnerInterface.php',
        'League\\OAuth2\\Client\\Token\\AccessToken' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/AccessToken.php',
        'League\\OAuth2\\Client\\Token\\AccessTokenInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/AccessTokenInterface.php',
        'League\\OAuth2\\Client\\Token\\ResourceOwnerAccessTokenInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/ResourceOwnerAccessTokenInterface.php',
        'League\\OAuth2\\Client\\Tool\\ArrayAccessorTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/ArrayAccessorTrait.php',
        'League\\OAuth2\\Client\\Tool\\BearerAuthorizationTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/BearerAuthorizationTrait.php',
        'League\\OAuth2\\Client\\Tool\\GuardedPropertyTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/GuardedPropertyTrait.php',
        'League\\OAuth2\\Client\\Tool\\MacAuthorizationTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/MacAuthorizationTrait.php',
        'League\\OAuth2\\Client\\Tool\\ProviderRedirectTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/ProviderRedirectTrait.php',
        'League\\OAuth2\\Client\\Tool\\QueryBuilderTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/QueryBuilderTrait.php',
        'League\\OAuth2\\Client\\Tool\\RequestFactory' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/RequestFactory.php',
        'League\\OAuth2\\Client\\Tool\\RequiredParameterTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/RequiredParameterTrait.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Unsplash\\OAuth2\\Client\\Provider\\Unsplash' => __DIR__ . '/..' . '/hughbertd/oauth2-unsplash/src/Provider/Unsplash.php',
        'Unsplash\\OAuth2\\Client\\Provider\\UnsplashResourceOwner' => __DIR__ . '/..' . '/hughbertd/oauth2-unsplash/src/Provider/UnsplashResourceOwner.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28ee81a4685b992b3bf21c757c75dbdb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28ee81a4685b992b3bf21c757c75dbdb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28ee81a4685b992b3bf21c757c75dbdb::$classMap;

        }, null, ClassLoader::class);
    }
}
