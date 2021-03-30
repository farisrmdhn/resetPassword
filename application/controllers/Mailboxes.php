<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailboxes extends CI_Controller {

	public function index(){

		$data_header['active'] = 'new';
		$data['title'] = 'Add new email';
		$data['names'] = $this->name_model->random();

		$this->load->view('templates/header.php', $data_header);
		$this->load->view('mailboxes/index.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function inbox(){
		if(!$this->input->post('id') || !$this->input->post('domain')){
			$this->session->set_flashdata('no_input', 'Please input Email ID and Domain');
			redirect('');
		}

		// ID consist the name of the Email, And domain is the domain the Email registered to. 
		$id = $this->input->post('id');
		$domain = $this->input->post('domain');

		$this->name_model->cek($id);

		$data_header['active'] = 'inbox';
		$data['title'] = 'Inbox';

		
		$password = 'W10htdocs@';

		$config['imap_host'] = 'mail.'.$domain;
		$config['imap_user'] = 'admin@'.$domain;
		$config['imap_pass'] = $password;
		$config['imap_port'] = '993';
		$config['imap_mailbox'] = 'INBOX';
		$config['imap_path'] = '/imap/ssl';

		$this->load->library('email', $config);

		$data['id'] = $id;
		$data['domain'] = $domain;

		$mails_en = $this->email->search_mailbox('SUBJECT "Complete your password reset request" TO "'.$id.'@'.$domain.'"');
		$mails_id = $this->email->search_mailbox('SUBJECT "Selesaikan permintaanmu untuk mengatur ulang sandi" TO "'.$id.'@'.$domain.'"');

		$all_mails = array_merge($mails_id, $mails_en);
		$filtered_mails = array();
		for($i = 0; $i < sizeof($all_mails); $i++){
			$mail = $this->email->get_mail($all_mails[$i]);
			$id = $mail->id;

			$filtered_mails[$id] = $mail;
		}


		$data['filtered_mails'] = $filtered_mails;

		$this->load->view('templates/header.php', $data_header);
		$this->load->view('mailboxes/inbox.php', $data);
		$this->load->view('templates/footer.php');
	}

}
