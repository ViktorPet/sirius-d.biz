<?php
namespace App\Utils;

use function http_build_query, simplexml_load_string, json_encode, json_decode;

use PHLAK\Config\Config;
use Rexlabs\HyperHttp\Hyper;
use RefactorStudio\PhpArrayToXml\PhpArrayToXml;

use InvalidArgumentException;

class Econt {
    private $config;
    private $mode;

    public function __construct (Config $config) {
        $this->config = $config;

        $this->setMode ();
    }

    private function setMode (): self {
        $this->mode = $this->config ['mode'];

        return $this;
    }

    /**
     *
     *
     *
     * @param array $form - The HTTP POST request
     * @return array
     */
    public function placeOrder (array $form) {
        $httptarget  = $this->config [$this->mode]['url'];
      $form = [];
        return $this->httpRequest ($httptarget, [
            'xml' =>  $this->toXML ([
                        'system' => [
                            'validate'            =>  0,
                            'response_type'       =>  'XML',
                            'only_calculate'      =>  0,
                            'process_all_parcels' =>  1,
                            'e-mail_errors_to'    =>  $form ['fkff']
                        ],
                        'client' => [
                            'username'  =>  'demo',
                            'password'  =>  'demo'
                        ],
                        'loadings' => [
                            'row' => [
                                'returned_loading' => [
                                    'first_loading_num' =>  '',
                                    'first_loading_receiver_phone'  =>  ''
                                ],
                                // 'sender' => [
                                //     'country_code'        =>  $this->config ['sender']['country_code'],
                                //     'city'                =>  $this->config ['sender']['city'],
                                //     'post_code'           =>  $this->config ['sender']['post_code'],
                                //     'office_code'         =>  $this->config ['sender']['office_code'],
                                //     'name'                =>  $this->config ['sender']['name'],
                                //     'name_person'         =>  $this->config ['sender']['name_person'],
                                //     'quarter'             =>  $this->config ['sender']['quarter'],
                                //     'street'              =>  $this->config ['sender']['street'],
                                //     'street_num'          =>  $this->config ['sender']['street_num'],
                                //     'street_bl'           =>  $this->config ['sender']['street_bl'],
                                //     'street_vh'           =>  $this->config ['sender']['street_vh'],
                                //     'street_et'           =>  $this->config ['sender']['street_et'],
                                //     'street_ap'           =>  $this->config ['sender']['street_ap'],
                                //     'street_other'        =>  $this->config ['sender']['street_other'],
                                //     'phone_num'           =>  $this->config ['sender']['phone_num'],
                                //     'email_on_delivery'   =>  $this->config ['sender']['email_on_delivery'],
                                // ],
                                'receiver' => [
                                    'country_code'  =>  $this->config ['receiver']['country_code'],
                                    'city'          =>  form['city'],
                                    'post_code'     =>  form['post_code'],
                                    'office_code'   =>  form['office_code'],
                                    'name'          =>  form['name'],
                                    'name_person'   =>  form['name_person'],
                                    'quarter'       =>  form['quarter'],
                                    'street'        =>  form['street'],
                                    'street_num'    =>  form['street_num' ],
                                    'street_bl'     =>  form['street_bl' ],
                                    'street_vh'     =>  form['street_vh' ],
                                    'street_et'     =>  form['street_et' ],
                                    'street_ap'     =>  form['street_ap' ],
                                    'street_other'  =>  form['street_other' ],
                                    'phone_num'     =>  form['phone_num'],
                                    'sms_no'        =>  form['sms_no']
                                    'bic'           =>  form['bic']
                                    'iban'          =>  form['iban']
                                    'provider_id'   =>  ''
                                ],
                                'courier_request' => [
                                    'only_courier_request'  =>  form['only_courier_request'],
                                    'time_from'             =>  form['time_from'],
                                    'time_to'               =>  form['time_to'],
                                ],
                                'payment' => [
                                    'side'                =>  form['side'],
                                    'method'              =>  form['method'],
                                    'receiver_share_sum'  =>  form['receiver_share_sum'],
                                    'share_percent'       =>  form['share_percent'],
                                    'key_word'            =>  form['key_word'],
                                ],
                                'shipment' => [
                                    'envelope_num'          =>  form[''],
                                    'shipment_type'         =>  form[''],
                                    'description'           =>  form[''],
                                    'pack_count'            =>  form[''],
                                    'weight'                =>  form[''],
                                    'tariff_code'           =>  form[''],
                                    'tariff_sub_code'       =>  form[''],
                                    'invoice_before_pay_CD' =>  ''
                                ],
                                'services' => [
                                    'e'                       =>  form[''],
                                    'e1'                      =>  form[''],
                                    'e2'                      =>  form[''],
                                    'e3'                      =>  form[''],
                                    'dc'                      =>  form[''],
                                    'dc_cp'                   =>  form[''],
                                    'dp'                      =>  form[''],
                                    'irregular'               =>  form[''],
                                    'pack1'                   =>  form[''],
                                    'pack2'                   =>  form[''],
                                    'ref'                     =>  form[''],
                                    'sms_notification'        =>  form[''],
                                    'oc'                      =>  form[''],
                                    'oc_currency'             =>  form[''],
                                    'money_transfer'          =>  form[''],
                                    'cd type'                 =>  form[''],
                                    'cd_currency'             =>  form[''],
                                    'cd_agreement_num'        =>  form[''],
                                    'cd_pay_options' => [

                                    ]
                               ],
                                'instructions' => [

                                ],
                                'packing_list' => [

                                ]
                            ]
                        ],
                        'letters' => [
                            'row' => [

                            ]
                        ]
                    ])

        ], [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: ' . sprintf ('Basic %s:%s', $this->config [$this->mode]['user'], $this->config [$this->mode]['passwd'])
        ]);
    }

    /**
     *
     *
     * @param array $url
     * @param array $body
     * @param array $header
     * @return array
     */
    public function httpRequest (string $url, array $body = [], array $headers = []): array {
        $response = null;

        if (!filter_var ($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException ('');
        }
        $ch = curl_init ($url);

        curl_setopt_array ($ch, [
            CURLOPT_SSL_VERIFYPEER  =>  false,
            CURLOPT_HTTPHEADER      =>  $headers,
            CURLOPT_RETURNTRANSFER  =>  true,
            CURLOPT_POST            =>  true,
            CURLOPT_POSTFIELDS      =>  http_build_query ($body),
            CURLOPT_CONNECTTIMEOUT  =>  20
        ]);
        //$response = curl_exec ($ch); <- Ako e na speedy
        $response = json_encode ((array) simplexml_load_string (curl_exec ($ch)));

        if (!$ch || !curl_errno ($ch)) {
            curl_close ($ch);
        }

        return json_decode ($response, true);
    }

    public function toJson (array $data = []): string {
        return count ($data) ? json_encode ($data) ?? '{}' : '{}';
    }

    public function toXML (array $data = []): string {
        return (new PhpArrayToXml)->setCustomRootName ('parcels')->toXmlString ($data);
    }
}
