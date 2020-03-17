<?php
namespace App\Controllers;

use const VIEWS_PATH, EMAIL_TEMPLATE, EMAIL_TEMPLATE_CACHE;

use Throwable, Swift_SmtpTransport, Swift_Message, Swift_Mailer;

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

class IndexController {
  private const PRODUCT_SIRIUS_CLASSIC_KEY = 'classic';
  private const PRODUCT_SIRIUS_INTENSE_KEY = 'intense';
  private const PRODUCT_SIRIUS_LIGHT_KEY   = 'light';
  private const PRODUCT_SIRIUS_SPORT_KEY   = 'sport';
  private const VISITOR_LAST_PRODUCT_SHOW  = 'last_product';
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
    private $product_types = [];
    /**
     *
     *
     */
    public function __construct (Twig $twig, array $configs = []) {
        $this->twig = $twig;
        $this->configs = $configs;
        $this->post = &$_POST;
        $this->session = &$_SESSION;

        $this->product_types = [
            self::PRODUCT_SIRIUS_CLASSIC_KEY,
            self::PRODUCT_SIRIUS_INTENSE_KEY,
            self::PRODUCT_SIRIUS_LIGHT_KEY,
            self::PRODUCT_SIRIUS_SPORT_KEY
        ];

        if (!array_key_exists (self::VISITOR_LAST_PRODUCT_SHOW, $this->session)) {
            $this->session [self::VISITOR_LAST_PRODUCT_SHOW] = [];
        }
    }

    public function index () {

        return view ($this->twig, 'home.html.twig');
    }

    public function prices () {
        return view ($this->twig, 'ceni.html.twig', [
            'pdo_connect'   =>  pdo_connect ()
        ]);
    }

    public function about () {
        return view ($this->twig, 'about.html.twig', []);

    }

    public function dose () {
        return view ($this->twig, 'doza.html.twig', []);
    }

    public function feedback () {
        return view ($this->twig, 'otzivi.html.twig', []);
    }

    public function contact () {
        return view ($this->twig, 'contact.html.twig', []);
    }

    public function enHarmony () {
        return view ($this->twig, 'en-harmony.html.twig', []);
    }

    public function kvAnalisator () {
        return view ($this->twig, 'kv-analisator.html.twig', []);
    }

    public function auraDiagnosis () {
        return view ($this->twig, 'aura-diagnosis.html.twig', []);
    }

    public function bioDiagnosis () {
        return view ($this->twig, 'bio-diagnosis.html.twig', []);
    }

    public function irisDiagnosis () {
        return view ($this->twig, 'iris-diagnosis.html.twi', []);
    }

    public function radioestesia () {
        return view ($this->twig, 'radioestesia.html.twig', []);
    }

    public function siriusclub () {
        return view ($this->twig, 'clubsirius.html.twig', []);
    }

    public function product () {
        if ($this->post) {
          $product_type = $this->post ['product_type'];

          foreach ($this->product_types as $type) {
              if (!array_key_exists ($type, $this->session ['shopping_cart'])) {
                  $this->session ['shopping_cart'][$type] = [];
              }
          }

          if (array_key_exists ('first', $this->post) &&
              array_keys_in ([
                'id', 'name', 'price', 'product-quantity', 'short_description'
              ], $this->post)) {

              $this->session [self::VISITOR_LAST_PRODUCT_SHOW] = [
                  'id'                =>  $this->post ['id'],
                  'name'              =>  $this->post ['name'],
                  'price'             =>  $this->post ['price'],
                  'product-quantity'  =>  $this->post ['product-quantity'],
                  'product_type'      =>  $this->post ['product_type'],
                  'short_description' =>  $this->post ['short_description']
              ];
          }
          else if(array_key_exists ('second', $this->post)) {
              $temp   = [];
              $nextId = count ($this->session ['shopping_cart'][$product_type]) + 1;

               if(strlen ($type) && array_key_exists ('shopping_cart', $this->session))
               {
                  $this->session['shopping_cart'][$product_type][] = [
                     'id'                  => $nextId,
                     'name'                => $this->post['name'],
                     'price'               => $this->post['price'],
                     'product_type'        => $product_type,
                     'product-quantity'    => $this->post['product_quantity'],
                     'short_description'   => $this->post['short_description'],
                     'description'         => $this->post['description']
                  ];

                  $temp [] = $this->post['id'];
               }
               else
               {
                   $this->session['shopping_cart'][$product_type][] = [
                     'id'                  => $nextId,
                     'name'                => $this->post['name'],
                     'price'               => $this->post['price'],
                     'product_type'        => $product_type,
                     'product-quantity'    => $this->post['product-quantity'],
                     'short_description'   => $this->post['short_description'],
                     'description'         => $this->post['description']
                   ];

                   $temp [] = $this->post['id'];
               }
          }
          $session = $this->session;

          return view ($this->twig, 'shop/product.html.twig', [
              'session'   =>  $this->session,
              'post'      =>  $this->post,
              'clearCart' =>  (function () use (&$session, &$type) {
                                $session ['shopping_cart'][$type] = [];
                              }) ()
          ]);
        }

        return view ($this->twig, 'shop/product.html.twig', [
            'session' =>  $this->session
        ]);
    }

    public function cart () {
        $content = include (VIEWS_PATH . '/scripts/cart.php');

        echo $content; exit;
    }

    public function clear () {
        $id = (int) $this->post ['id'];
        $product_type = $this->post ['product_type'];

        foreach ($this->session ['shopping_cart'][$product_type] as $key => $value) {
          if ($value ['id'] == $id) {
              unset ($this->session ['shopping_cart'][$product_type][$key]);
          }
      }

        header ('Location: /product', 301);
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
              $body = sprintf (EMAIL_TEMPLATE, $order_id, $date, $total);

              $toClient = Mailer ($this->post ['email'], $subject->client, $body, $this->post);
              $toOwner  = Mailer (getenv ('EMAIL_OWNER'), $subject->owner, $body, $this->post);

              return $this->orderCompleted (true, 'bank.html.twig', array_merge ($this->post, [
                  'order_id'  =>  $order_id,
                  'date'      =>  $date,
                  'total'     =>  (float) $total
                ])
              );
            }
            else if ($cache === 1) {
              $body = sprintf (EMAIL_TEMPLATE_CACHE, $order_id, $date, $total);

              $toClient = Mailer ($this->post ['email'], $subject->client, $body, $this->post);
              $toOwner  = Mailer (getenv ('EMAIL_OWNER'), $subject->owner, $body, $this->post);

              return $this->orderCompleted (true, 'cache.html.twig', array_merge ($this->post, [
                  'order_id'  =>  $order_id,
                  'date'      =>  $date,
                  'total'     =>  (float) $total
                ])
              );
            }
        }

        return $this->orderCompleted (false, []);
    }

    public function orderCompleted (bool $success = false, string $template, array $details = []) {
        if ($success) {
          $this->session ['shopping_cart'] = [];
        }

        return view ($this->twig, $template, [
            'success' =>  $success,
            'details' =>  $details
        ]);
    }

    public function bank () {
        //return view ($this->twig, 'scripts/bank.html.twig', []);
    }
}
