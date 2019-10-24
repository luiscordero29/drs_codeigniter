<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Email_model extends CI_MODEL
{
	public function __construct()
	{
		parent::__construct();
	}

	public function send($to, $from, $subject, $message)
	{
		#CONFIGURACION
		$config['protocol'] = 'smtp';
		$config['useragent'] = 'DRS';
		$config['priority'] = '1';
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$config['smtp_host'] = 'mail.dirsaludbarinas.gob.ve';
		$config['smtp_user'] = 'informatica@dirsaludbarinas.gob.ve';
		$config['smtp_pass'] = 'QS@O6ZO?d@BioHez$*';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '5';
		$config['smtp_keepalive'] = 'true';
		$config['smtp_crypto'] = 'ssl';
		$this->email->initialize($config);
		#ENVIO
		$this->email->to($to);
		$this->email->from($from);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
}