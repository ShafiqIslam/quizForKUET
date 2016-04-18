<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    private $_gmail = "islamshafiq03@gmail.com";
    private $_gmail_password = "10213223";

    public $components = array(
        'Session', 'RequestHandler','Cookie',
        'Auth' => array(
            'loginAction' => array('controller' => 'users', 'action' => 'login', 'admin' => true),
            'loginRedirect' => array('controller' => 'users', 'action' => 'dashboard', 'admin' => true),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login', 'admin' => true),
            'authError' => 'You are not allowed',
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email', 'password' => 'password')
                )
            )
        )
    );

    public function beforeFilter() {
        $this->layout = 'public';
        $this->Auth->allow();
    }

    public function random_string($len, $num=0, $alpha=0, $spec_char=0) {
        $alphabets = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers = "0123456789";
        $special_characters = "!@#$%^&*()_-+=}{][|:;.,/?";

        $characters = "";
        if($num)
            $characters .= $numbers;
        if($alpha)
            $characters .= $alphabets;
        if($spec_char)
            $characters .= $special_characters;
        if(!$num && !$alpha && !$spec_char)
            $characters .= $numbers.$alphabets.$special_characters;

        $rand_string = '';
        for ($i = 0; $i < $len; $i++) {
            $rand_string .= $characters[mt_rand(0, strlen($characters)-1)];
        }

        return $rand_string;
    }

    public function send_mail($receiver, $name, $subject, $body, $plain_body){
        App::import('Vendor', 'PHPMailer', array('file' => 'PHPMailer' . DS . 'class.phpmailer.php'));
        $mail = new PHPMailer;

        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  					// Specify main and backup SMTP servers
        $mail->Port = '587';
        $mail->SMTPDebug = 1;                               // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPSecure = 'tls';                          // secure transfer enabled REQUIRED for GMail
        $mail->SMTPAuth = true;                             // Enable SMTP authentication
        $mail->Username = $this->_gmail;                    // SMTP username
        $mail->Password = $this->_gmail_password;           // SMTP password
        $mail->SetFrom($this->_gmail);
        $mail->FromName = "Online Quiz KUET";

        $mail->addAddress($receiver, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $plain_body;

        if(!$mail->send()) {
            //return false;
            echo "Mailer Error: " . $mail->ErrorInfo; die();
        } else {
            return true;
            //echo "Message has been sent successfully";
        }
    }
}
