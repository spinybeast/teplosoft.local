<?php
/**
 * Module is prohibited to sales! Violation of this condition leads to the deprivation of the license!
 *
 * @author    Yandex.Money <cms@yamoney.ru>
 * @copyright © 2015-2017 NBCO Yandex.Money LLC
 * @license   https://money.yandex.ru/doc.xml?id=527052
 *
 * @category  Front Office Features
 * @package   Yandex Payment Solution
 */
class Dispatcher extends DispatcherCore
{
    /*
    * module: yandexmodule
    * date: 2019-11-18 16:38:44
    * version: 1.1.10
    */
    protected function setRequestUri()
    {
        parent::setRequestUri();
        if (Module::isInstalled('yandexmodule') && strpos($this->request_uri, 'module/yandexmodule/')) {
            $this->request_uri = iconv('windows-1251', 'UTF-8', $this->request_uri);
        }
    }
}
