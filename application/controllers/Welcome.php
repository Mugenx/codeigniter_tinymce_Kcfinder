<?php

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Default_model');
		$this->load->helper(array('url_helper','form'));
	}

	
	public function index()
	{
		
		$data['title'] = 'tiny';
		
		$data['content'] = $this->Default_model->get_display();
		$this->load->view('tinymce', $data);
	}

	public function submit(){
		$content = $this->input->post('content');
		$this->Default_model->update($content);
		header("Location: ".  base_url());
	}

	public function original(){
		$content = '<h1 style="text-align: center;">TinyMce &amp; KcFinder</h1>
		<p>&nbsp;</p>
		<h3 style="text-align: center;">Step 1:</h3>
		<p style="text-align: center;">Click <em><strong>insert/edit</strong></em> image buttom, the last one of 1st toolbar, then click the finder button.</p>
		<p style="text-align: center;"><img src="assets/plugin/kcfinder/upload/image/1.png" alt="" width="434" height="272" /></p>
		<p style="text-align: center;">&nbsp;</p>
		<h3 style="text-align: center;">Step 2:</h3>
		<p style="text-align: center;">Select image</p>
		<p><img style="display: block; margin-left: auto; margin-right: auto;" src="assets/plugin/kcfinder/upload/image/2.png" alt="2" width="698" height="538" /></p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><img style="display: block; margin-left: auto; margin-right: auto;" src="assets/plugin/kcfinder/upload/image/logo.png" alt="logo" width="134" height="118" /></p>
		<h4>&nbsp;</h4>
		<h1 style="text-align: center;">Language Test:</h1>
		<h4>&nbsp;</h4>
		<h4>English:</h4>
		<p>Nordik Spa-Nature celebrates its 10 years anniversary! A decade of relaxation, challenges, successes, but above all, beautiful memories that we want to share with you! Are you curious to see what the spa was like since its beginning? With pictures, see the evolution of Nordik Spa-Nature, the largest spa in North America!</p>
		<h4>&nbsp;</h4>
		<h4>French:</h4>
		<p>Nordik Spa-Nature c&eacute;l&egrave;bre ses 10 ans! Une d&eacute;cennie de d&eacute;tente, de d&eacute;fis, de r&eacute;ussites, mais surtout, de beaux souvenirs que nous voulons vous partager! Curieux de voir &agrave; quoi ressemblait le spa depuis ses d&eacute;buts? Voici en images, l?&eacute;volution du Nordik Spa-Nature, le plus grand spa en Am&eacute;rique du Nord!</p>';
		$this->Default_model->update($content);
		header("Location: ".  base_url());
	}
	
}
