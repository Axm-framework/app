<?php

namespace App\Controllers;

use Axm;
use Axm\Controller;
use App\Models\Offers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->accessControl(
            [
                '/', 'intro', 'iniLogin', 'iniRegister', 'iniReceivedCapture', 'iniDeleteCapture', 'iniReeCodeEmail',
                'iniVerificaEmail', 'renoveCodeOTP', 'iniRedirect2FA', 'helps', 'faq', 'doc', 'tcpp',
                'paymeUserLink', 'load_Gateway_Fields2', 'iniValidate', 'languageSel', 'run', 'po',
            ],
            true
        );

        if (true == Axm::app()->session->countDownSession('offersTimeAvalible', 900)) {
            return $this->terminateTimeOffer();
        }
    }


    public function terminateTimeOffer()
    {
        try {

            $app = Axm::app();
            $app->session->remove('timeSession');
            $app->session->remove('offersTimeAvalible');

            $id = $app->session->get('offersIdAvalible');
            Offers::_update('acquired', 0, "id = '$id' ");

            $app->session->remove('offersIdAvalible');

            setFlash('warning', 'El Tiempo de oferta adquirida ha expirado.');
        } catch (\Throwable $th) {
            return false;
        }
    }
}
