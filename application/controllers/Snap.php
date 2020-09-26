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
        $this->load->library('veritrans');
        $this->veritrans->config($params);
		$this->load->helper('url');
		$this->load->model('HargaPembelajaran_model');
		$this->load->model('User_model');
        $this->load->model('Snap_model');
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

		$user = $this->User_model->getByRow($id_user);

		$customer_details = array(
		  'first_name'    => $user->firstName,
		  'last_name'     => $user->lastName,
		  'email'         => $user->email,
		  'phone'         => $user->phone,
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'day', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
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
        if (!empty($payment->order_id)) {
            redirect('dashboard');
        }

    	$payment = json_decode($this->input->post('result_data'));
        $id_user = $this->session->userdata('id');
        $nama    = $this->session->userdata('firstName')." ".$this->session->userdata('lastName');

        if (isset($payment->va_numbers[0]->bank)) {
            $bank = $payment->va_numbers[0]->bank;
        }else{
            $bank = "-";
        }

        if (isset($payment->va_numbers[0]->va_number)) {
            $va_number = $payment->va_numbers[0]->va_number;
        }else{
            $va_number = "-";
        }

        $data = array(
            'order_id'           => $payment->order_id,
            'transaction_time'   => $payment->transaction_time,
            'transaction_status' => $payment->transaction_status,
            'bank'               => $bank,
            'va_number'          => $va_number,
            'status_message'     => $payment->status_message,
            'transaction_id'     => $payment->transaction_id,
            'gross_amount'       => $payment->gross_amount,
            'id_user'            => $id_user,
            'name_student'       => $nama,
        );

        $this->Snap_model->input('pembayaran',$data);

        redirect('snap/payment/'.$payment->order_id);
    }

    public function payment($id_order)
    {
        $data['payment'] = $this->Snap_model->getBy($id_order);

        $this->load->view('payment/dataLanjutan',$data);
    }

    public function status($order_id)
    {
        $response = $this->veritrans->status($order_id);

        $data = array(
            'transaction_status' => $response->transaction_status,
            'status_message'     => $response->status_message,
        );

        $update_data = $this->Snap_model->edit($order_id, $data);

        redirect('snap/payment/'.$order_id);

    }
}