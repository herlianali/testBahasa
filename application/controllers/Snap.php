<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {


	public function __construct()
    {
        parent::__construct();

        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: PUT, GET, POST");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, COntent-Type, Accept");

        $params = array('server_key' => 'SB-Mid-server-hcxFVgGIbRGUelmf6xWvsq5O', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->model('HargaPembelajaran_model');
		$this->load->model('User_model');
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token($id)
    {
    	$id_user = $this->session->userdata('id');
		$harga   = $this->HargaPembelajaran_model->getByRow($id);

		// Required
		$transaction_details = array(
		  'order_id' 	 => rand(),
		  'gross_amount' => $harga->harga, // no decimal allowed for creditcard
		);

		// // Optional
		$billing_address = array(
		  'first_name'    => "Andri",
		  'last_name'     => "Litani",
		  'address'       => "Mangga 20",
		  'city'          => "Jakarta",
		  'postal_code'   => "16602",
		  'phone'         => "081122334455",
		  'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => "Obet",
		  'last_name'     => "Supriadi",
		  'address'       => "Manggis 90",
		  'city'          => "Jakarta",
		  'postal_code'   => "16601",
		  'phone'         => "08113366345",
		  'country_code'  => 'IDN'
		);

		$user = $this->User_model->getByRow($id_user);

		// var_dump($user);
		// die();
		// Optional
		$customer_details = array(
		  'first_name'    => $user->firstName,
		  'last_name'     => $user->lastName,
		  'email'         => $user->email,
		  'phone'         => $user->phone,
		  'billing_address'  => $billing_address,
		  'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            // 'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
    	echo 'RESULT <br><pre>';
    	var_dump($result);
    	echo '</pre>' ;

    }
}