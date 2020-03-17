<?php
namespace App\Helpers;

use const CONFIG_PATH, DIRECTORY_SEPARATOR;

use function call_user_func_array, dd, dump;
use PDO,
    PDOException,
    Throwable,
    Swift_SmtpTransport,
    Swift_Message,
    Swift_Mailer;

use PHLAK\Config\Config;
use Twig\Environment as Twig;

if (!function_exists ('view')) {
    function view (Twig $twig, string $tpl, array $vars = []): void {
        echo $twig->render ($tpl, $vars);
    }
}

if (!function_exists ('array_keys_in')) {
  /**
   * Function is used for checking if values from first argument are existing keys in second one
   *
   * @param  array $keys
   * @param  array $array
   * @return bool
   */
   function array_keys_in (array $config = [], array $array = []): bool {
      foreach ($config as $value) {
        if (is_array ($value)) continue;
        if (!array_key_exists ($value, $array)) {
            return false;
        }
      }

    return true;
  }
}

if (!function_exists ('controller')) {
    function controller (Twig $twig, string $class, string $method, array $args = []) {
        if (!class_exists ($class)) {
            throw new RuntimeException (sprintf ('Class %s not found!', $class));
        }

        return call_user_func_array ([new $class ($twig, [
                'econt'     =>  config ('econt'),
                'speedy'    =>  config ('speedy')
            ]), $method
        ], $args);
    }
}

if (!function_exists ('uriBeginWith')) {
    function uriBeginWith (string $slug) {
        return preg_match ("/^(\/{$slug})+/", $_SERVER ['REQUEST_URI']);
    }
}

if (!function_exists ('pdo_connect')) {
    function pdo_connect () {
        $host = getenv ('DB_HOST');
        $db   = getenv ('DB_NAME');
        $user = getenv ('DB_USER');
        $pass = getenv ('DB_PASSWORD');
        $charset = getenv ('DB_CHARSET');

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=3306";
        $options = [
           PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
           PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw $e;
        }

        return ['pdo' => $pdo];
    }
}

if (!function_exists ('config')) {
    function config (string $name): ?Config {
        $config = null;

        try {
            $config = new Config (sprintf ('%s%s%s.php', CONFIG_PATH, DIRECTORY_SEPARATOR, $name));
        }
        catch (Throwable $ex) {
            $config = null;
        }

        return $config;
    }
}

if (!function_exists ('Mailer')) {
    function Mailer (string $receiver, string $subject, string $template, array $form): bool {
        try {
          $transport = (new Swift_SmtpTransport(getenv ('EMAIL_SMTP_HOST'), getenv ('EMAIL_SMTP_PORT'), 'ssl'))
            ->setUsername (getenv ('EMAIL_SMTP_USER'))
            ->setPassword (getenv ('EMAIL_SMTP_PASSWD'));

            $mailer  = new Swift_Mailer ($transport);
            $message = (new Swift_Message ($subject))
              ->setFrom([getenv ('EMAIL_SENDER')])
              ->setTo([
                  $receiver => sprintf ('%s %s', $form ['first_name'], $form ['last_name'])
              ])
              ->setBody($template)
            ;
        }
        catch (Throwable $ex) {
            return false;
        }

        return (bool) $mailer->send ($message);
    }
}
