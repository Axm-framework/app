<?php


class Emails
{

    /**
     * --------------------------------------------------------------------------
     * Host
     * --------------------------------------------------------------------------
     *
     * // SMTP SERVER IP/HOST
     *
     * @var string
     */
    public  $host = 'mail.axiomatransfer.com';


    /**
     * --------------------------------------------------------------------------
     * Port
     * --------------------------------------------------------------------------
     *
     * //SMTP SERVER PORT 
     * @var string
     */
    public  $port = 465;


    /**
     * --------------------------------------------------------------------------
     * SMTPAuth
     * --------------------------------------------------------------------------
     *
     * // true / false 
     * @var string
     */
    public  $SMTPAuth = true; 


    /**
     * --------------------------------------------------------------------------
     * name
     * --------------------------------------------------------------------------
     *
     * @var string
     */
    public  $name = 'AXIOMA Transfer';


    /**
     * --------------------------------------------------------------------------
     * Username
     * --------------------------------------------------------------------------
     *
     * username(desde donde se envía)
     * @var string
     */
    public  $username = 'notificaciones@axiomatransfer.com';



    
    /**
     * --------------------------------------------------------------------------
     * Password
     * --------------------------------------------------------------------------
     *
     * // SMTP AUTH PASSWORD if SMTPAuth is true
     * @var string
     */
    public  $pass = 'X1omarit@@';


    /**
     * --------------------------------------------------------------------------
     * SMTPSecure
     * --------------------------------------------------------------------------
     *
     * // SMTP AUTH PASSWORD if SMTPAuth is true
     * @var string
     */
    public  $SMTPSecure = 'ssl'; 


    // /**
    //  * --------------------------------------------------------------------------
    //  * isHTML
    //  * --------------------------------------------------------------------------
    //  *
    //  * // true / false 
    //  * @var string
    //  */
    // public  $isHTML = true; 



}
