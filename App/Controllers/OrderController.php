<?php
namespace App\Controllers;

use const VIEWS_PATH, EMAIL_TEMPLATE;

use Swift_SmtpTransport, Swift_Message;

use function App\Helpers\{
    view,
    pdo_connect,
    array_keys_in,
    controller,
    Mailer
};
use function dd, dump;
use App\Utils\{
    Econt,
    Speedy
};
use Twig\Environment as Twig;
use Respect\Validation\Validator as v;

class OrderController {
    /**
     *
     *
     */
    private $twig;
    /**
     *
     *
     */
    private $configs = [];
    /**
     *
     *
     */
    private $session = [];
    /**
     *
     *
     */
    private $post = [];
    /**
     *
     *
     */
    public function __construct (Twig $twig, array $configs = []) {
        $this->twig = $twig;
        $this->configs = $configs;
        $this->post = &$_POST;
        $this->session = &$_SESSION;
    }

    public function order () {
        if (!array_keys_in (['id', 'name', 'price', 'product-quantity', 'short_description'], $this->post)) {

        }

        $subject = (object) [
          'client'  =>  sprintf (getenv ('EMAIL_SUBJECT_CLIENT'), $this->post ['first_name']),
          'owner'   =>  getenv ('EMAIL_SUBJECT_OWNER')
        ];

        if ($_SERVER ['REQUEST_METHOD'] == 'POST' && array_key_exists ('order', $this->post)) {
            include (VIEWS_PATH . '/scripts/order.php');

            $date = date ('Y-m-d h:i:s');

            if ($bank === 1) {
              $body = sprintf ($this->email_template, $order_id, $date, $total);

              $toClient = Mailer ($this->post ['email'], $subject->client, $body, $this->post);
              $toOwner  = Mailer (getenv ('EMAIL_OWNER'), $subject->owner, $body, $this->post);

              return $this->orderCompleted (true, array_merge ($this->post, [
                  'order_id'  =>  $order_id,
                  'date'      =>  $date,
                  'total'     =>  (float) $total
                ])
              );
            }
        }

        return $this->orderCompleted (false, []);
    }

    public function orderCompleted (bool $success = false, array $details = []) {
        if ($success) {
          $this->session ['shopping_cart'] = [];
        }

        return view ($this->twig, 'bank.html.twig', [
            'success' =>  $success,
            'details' =>  $details
        ]);
    }
}
