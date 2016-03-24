<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 24.03.2016
 * Time: 12:54
 */

namespace ignatenkovnikita\refillmobile;


use GuzzleHttp\Client;
use yii\base\Component;
use yii\helpers\ArrayHelper;

class ClientRefill extends Component
{

    /** @var  Client $_client */
    private $_client;
    /** @var  string $url */
    public $url;
    /** @var  string $user */
    public $user;
    /** @var  string $pass */
    public $pass;
    /** @var  integer $actionId */
    public $actionId;

    public function init()
    {
        parent::init();
        $this->_client = new Client(['base_uri' => $this->url]);
    }

    private function _send($method, $url, $data, $body)
    {
        return $this->_client->request($method, $url, ['auth' => [$this->user, $this->pass], 'query' => ArrayHelper::merge(['actionId' => $this->actionId], $data), 'body' => $body]);

    }

    function refill($telephone, $sum)
    {
        $body = '<payments>';
        $body .= '<payment>';
        $body .= '<ids>';
        $body .= '<id>' . uniqid() . '</id>';
        $body .= '</ids>';
        $body .= '<phone>'.$telephone.'</phone>';
        $body .= '<sum>'.$sum.'</sum>';
        $body .= '</payment>';
        $body .= '</payments>';

        $request = $this->_send('POST', 'upload', [], $body);
        return $request->getBody()->getContents();
    }


    function state($taskId)
    {
        $request = $this->_send('GET', 'taskstate', ['taskId' => $taskId], null);
        return $request->getBody()->getContents();
    }
}