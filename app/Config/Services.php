<?php

return [

    /**
     * **************************************************************************
     * **********************    SERVICES CORE    *******************************
     * **************************************************************************
     **/

    /**
     * --------------------------------------------------------------------------
     * Logger
     * --------------------------------------------------------------------------
     * 
     * clase para manejar el logger 
     */
    // 'logger' => [
    //     'class'  => 'Axm\Logger\Logger',
    //     'shared' => true,
    // ],


    /**
     * --------------------------------------------------------------------------
     * Session
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'view' => [
        'closure' => function () {
            return new Axm\Views\View();
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * Session
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'event' => [
        'closure' => function () {
            return new Axm\EventManager();
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * Session
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'session' => [
        'closure' => function () {
            return new Axm\Session\Session();
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * Request
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'response' => [
        'closure' => function () {
            return new Axm\Http\Response();
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * Request
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'request' => [
        'closure' => function () {
            return new Axm\Http\Request();
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * Router
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'router' => [
        'closure' => function () {
            return new Axm\Http\Router(Axm::app(), $this->request, $this->response);
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * DefaultController
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'controller' => [
        'closure' => function () {
            return new class() extends Axm\Controller
            {
            };
        },
        'share' => true
    ],


    /**
     * --------------------------------------------------------------------------
     * BaseConfig
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'config' => [
        'closure' => function () {
            return Axm\BaseConfig::getInstance();
        },
        'share' => true
    ],


    /**
     * --------------------------------------------------------------------------
     * DebugBar
     * --------------------------------------------------------------------------
     * 
     * Clase para mostar la barra de depuracion
     */
    'debugbar' => [
        'closure' => function () {
            return Axm\Debug\Debug::this();
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * User
     * --------------------------------------------------------------------------
     * 
     * clase para el manejo de la session de usuario y la autenticacion
     */
    // 'user' => [
    //     'closure' => function () {
    //         return new App\Models\User;
    //     },
    //     'share' => true
    // ],


    /**
     * --------------------------------------------------------------------------
     * Mailer
     * --------------------------------------------------------------------------
     * 
     * clase para manejar los emails 
     */
    'mailer' => [
        'closure' => function () {
            return new Axm\Email\PHPMailer;
        },
        'share' => true
    ],

    /**
     * --------------------------------------------------------------------------
     * Cache
     * --------------------------------------------------------------------------
     * 
     * clase para manejar el cache
     */
    'cache' => [
        'closure' => function () {
            return new Axm\Cache\Cache;
        },
        'share' => true
    ],
];
