<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	function _Contructor()
	{
		parent::__construct();
		$this->load->model('Register_model');
		
		$this->load->model('Attributes_model');
		
		$this->load->model('Brand_model');
		$this->load->model('Cart_model');
		$this->load->model('Newsitem_model');
		$this->load->model('Settings_model');
		
		$this->load->library('session');
		$this->load->library('Cart');
		  
	}
	public function index()
	{
		$data['error'] = "";
		$data['news_list'] = $this->Newsitem_model->GetNewsitem();
		$data['page_list'] = $this->Page_model->GetPages();

		$data['setting_list'] = $this->Settings_model->GetSettings();
		$this->load->view('registerlogin', $data);
	}
	// public function loginFB()
	// {
	// 	$userData = array();

	// 	// Check if user is logged in
	// 	if ($this->facebook->is_authenticated()) {
	// 		// Get user facebook profile details
	// 		$fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');

	// 		// Preparing data for database insertion
	// 		$userData['oauth_provider'] = 'facebook';
	// 		$userData['oauth_uid']    = !empty($fbUser['id']) ? $fbUser['id'] : '';;
	// 		$userData['first_name']    = !empty($fbUser['first_name']) ? $fbUser['first_name'] : '';
	// 		$userData['last_name']    = !empty($fbUser['last_name']) ? $fbUser['last_name'] : '';
	// 		$userData['email']        = !empty($fbUser['email']) ? $fbUser['email'] : '';
	// 		$userData['gender']        = !empty($fbUser['gender']) ? $fbUser['gender'] : '';
	// 		$userData['picture']    = !empty($fbUser['picture']['data']['url']) ? $fbUser['picture']['data']['url'] : '';
	// 		$userData['link']        = !empty($fbUser['link']) ? $fbUser['link'] : '';

	// 		// Insert or update user data
	// 		$userID = $this->user->checkUser($userData);

	// 		// Check user data insert or update status
	// 		if (!empty($userID)) {
	// 			$data['userData'] = $userData;
	// 			$this->session->set_userdata('userData', $userData);
	// 		} else {
	// 			$data['userData'] = array();
	// 		}

	// 		// Get logout URL
	// 		$data['logoutURL'] = $this->facebook->logout_url();
	// 	} else {
	// 		// Get login URL
	// 		$data['authURL'] =  $this->facebook->login_url();
	// 	}

	// 	// Load login & profile view
	// 	$this->load->view('user_authentication/index', $data);
	// }
	public function RegisterLogin()
	{
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->model('Cart_model');
		$this->load->library('cart');
		$this->load->model('Newsitem_model');
		$this->load->model('Settings_model');
		$data['category_list'] = $this->Category_model->GetCategories();
		//$data['cart_list'] = $this->Cart_model->GetCart();
		$data['product_list'] = $this->Product_model->GetProducts();
		$data['news_list'] = $this->Newsitem_model->GetNewsitem();
		$this->load->model('Tags_model');
		$data['tag_list'] = $this->Tags_model->GetTags();
		$data['setting_list'] = $this->Settings_model->GetSettings();
		$data['error'] = "";
		$this->load->view('registerlogin',$data);
	}

	public function logout()
    {
		$this->load->library('cart');
		$unsetArr = array('sessionid','userid', 'userName', 'email', 'password', 'contact');
		$this->session->unset_userdata($unsetArr);
		$this->cart->destroy();

		$this->load->helper('cookie');
		$cookie = array(
			'name'   => 'remember_me',
			'value'  => '',                           
			'expire' => 0
			);
        delete_cookie($cookie);
        redirect(base_url());
	}
	
	public function signup()
	{	
				
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

		$this->load->model('Customer_model');
		$this->load->library('form_validation');

		$this->form_validation->set_message('required','Field required !');
		$this->form_validation->set_message('is_unique','Email already exist!');
		$this->form_validation->set_message('valid_email','Invaid Email');
		$this->form_validation->set_message('matches','Password does not match!');
		$this->form_validation->set_message('min_length','Short password(minimum 8 charecters)!');
		$this->form_validation->set_message('regex_match','Invalid number');

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customer.EmailAddress]');
		$this->form_validation->set_rules('contact','Telephone','regex_match[/^[0-9\-\(\)\/\+\s]*$/]');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confpass', 'Confirm Password', 'required|matches[pass]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register',$data);
		} else {
			$user['username'] = $this->input->post('firstname').' '.$this->input->post('lastname');
			$user['EmailAddress'] = $this->input->post('email');
			$user['Password'] = $this->input->post('pass');
			$user['contact'] = $this->input->post('contact');
			$user['CreatedBy'] = '1';
			$user['CreatedDate'] = date('Y-m-d');
			if (!$this->Customer_model->addCustomer($user)) {
				print_r("No");
			} else {
				redirect(base_url().'Customer/profile/'.$this->session->userid);
			}
		}
	}
	public function login()
	{
		//$this->load->library('cart');
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
		$data['category_list'] = $this->Category_model->GetCategories();
		
		$this->load->model('Customer_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login',$data);
		} else {
			$result = $this->Customer_model->login();

			if ($result == FALSE) {
				$this->session->set_flashdata('fail', 'Incorrect email or password');
				$this->session->set_flashdata('dbError', $this->input->post('email'));
				redirect(base_url() . 'Customer/login');
			} else {
				redirect(base_url().'Customer/profile/'.$this->session->userid);
			}
		}
	}

	public function checkEmail()
	{
		$this->load->model('Customer_model');
		$email = $this->input->post('email');
		//die(print_r($name));
		$result = $this->Customer_model->checkUserEmail($email);
		if (!$result) {
			echo json_encode(TRUE);
		} else {
			echo json_encode(FALSE);
		}
	}

	public function delete($CustomerId)
	{
		$this->load->model('Customer_model');
		$this->Customer_model->deleteCustomer($CustomerId);
		redirect(base_url() . "Customer/AllCustomers");
	}

	
	public function AllCustomers(){
		$this->load->model('Customer_model');
		$data['customer_list'] = $this->Customer_model->GetCustomers();
		$this->load->view('admin/managecustomer.php', $data);
	}

	public function SaveCustomer(){
		$this->load->model('Customer_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('email', 'Emial', 'required|valid_email');
		$this->form_validation->set_rules('password2', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|matches[password2]');
		if ($this->form_validation->run() == FALSE) {
			//print_r($_POST);
			$this->load->view('admin/addCustomer');
		} else {
			$data['UserName'] = $this->input->post('username');
			$data['EmailAddress'] = $this->input->post('email');
			$data['Password'] = $this->input->post('password2');
			$data['CreatedBy'] = '1';
			$data['CreatedDate'] = date('Y-m-d');
			if (!$this->Customer_model->addCustomer($data)) {
				die(print_r("No"));
			} else {
				redirect(base_url().'Customer/AllCustomers');
			}
		}
	}

	public function update($id)
	{
		$this->load->model('Customer_model');
		$this->load->library('form_validation');
		$customer = $this->Customer_model->getCustomerById($id);
		$data = array();
		$data['customer'] = $customer[0];
		$this->form_validation->set_rules('userName', 'User Name', 'required');
		$this->form_validation->set_rules('email', 'Emial', 'required|valid_email');
		$this->form_validation->set_rules('contact', 'Contact', 'required|min_length[8]');
		if ($this->form_validation->run() == FALSE) {
			//print_r($_POST);
			redirect(base_url() . 'customer/showprofile/' . $id);
		} else {
			$formdata['UserName'] = $this->input->post('userName');
			$formdata['EmailAddress'] = $this->input->post('email');
			$formdata['contact'] = $this->input->post('contact');
			$formdata['ModifiedBy'] = '1';
			$formdata['ModifiedDate'] = date('Y-m-d');
			$this->Customer_model->update($id, $formdata);
			redirect(base_url() . 'customer/showprofile/'.$id);
		}
	}

	public function edit($id)
	{
		$this->load->model('Customer_model');
		$this->load->library('form_validation');
		$customer = $this->Customer_model->getCustomerById($id);
		$data = array();
		$data['customer'] = $customer[0];
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('email', 'Emial', 'required|valid_email');
		$this->form_validation->set_rules('password2', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|matches[password2]');
		if ($this->form_validation->run() == FALSE) {
			//print_r($_POST);
			$this->load->view('admin/editCustomer',$data);
		} else {
			$formdata['UserName'] = $this->input->post('username');
			$formdata['EmailAddress'] = $this->input->post('email');
			$formdata['Password'] = $this->input->post('password2');
			$formdata['ModifiedBy'] = '1';
			$formdata['ModifiedDate'] = date('Y-m-d');
			$this->Customer_model->update($id, $formdata);
			redirect(base_url() . 'customer/AllCustomers');
			
		}
	}

	public function getUserId(){
		$this->load->model('Customer_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			
			$data['error'] = "Input fields are empty!";
		
			redirect(base_url().'Cart/CheckOut',$data);
		} else {
			$result = $this->Customer_model->getCustomerId();

			if ($result == FALSE) {
				$data['error'] = "User is not found!";
				redirect(base_url() . 'Cart/CheckOut', $data);
				//redirect(base_url() . 'Customer');
			}
			else {
				return $result;
			}
		}
	}

	public function profile($userId){
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->model('Customer_model');

		/*$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->model('Order_model');
		$this->load->library('cart');
		$this->load->model('Customer_model');
		$this->load->model('Newsitem_model');
		$this->load->model('Tags_model');
		$this->load->model('Settings_model');
		$this->load->model('Page_model');

		$data['category_list'] = $this->Category_model->GetCategories();
		$data['product_list'] = $this->Product_model->GetProducts();
		$data['order_list'] = $this->Order_model->getOrderByUserId($userId);
		$data['tag_list'] = $this->Tags_model->GetTags();
		$data['customer'] = $this->Customer_model->getCustomerById($userId);
		$data['news_list'] = $this->Newsitem_model->GetNewsitem();
		$data['setting_list'] = $this->Settings_model->GetSettings();
		$data['page_list'] = $this->Page_model->GetPages();*/
		$data['customer'] = $this->Customer_model->getCustomerById($userId);
		$data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

		$this->load->view('profile',$data);
	}

	public function changepassword($userId){
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->model('Order_model');
		$this->load->library('cart');
		$this->load->model('Customer_model');
		$this->load->model('Tags_model');
		$this->load->model('Settings_model');
		$this->load->model('Newsitem_model');
		$this->load->model('Page_model');
		
		$data['news_list'] = $this->Newsitem_model->GetNewsitem();
		$data['setting_list'] = $this->Settings_model->GetSettings();
		
		$this->load->library('form_validation');
		$customer = $this->Customer_model->getCustomerById($userId);
		$data = array();
		$data['page_list'] = $this->Page_model->GetPages();
		$data['category_list'] = $this->Category_model->GetCategories();
		$data['product_list'] = $this->Product_model->GetProducts();
		$data['tag_list'] = $this->Tags_model->GetTags();
		$data['setting_list'] = $this->Settings_model->GetSettings();
		$data['customer'] = $customer[0];
		$this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
		$this->form_validation->set_rules('newpassword', 'New Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[newpassword]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('changepassword', $data);
		} else {
			if($customer[0]['Password'] != $this->input->post('oldpassword')){
				$this->session->set_flashdata('failed', 'You Old Password is not Correct');
				$this->load->view('changepassword', $data);
			}
			$formdata['Password'] = $this->input->post('newpassword');
			$formdata['ModifiedBy'] = '1';
			$formdata['ModifiedDate'] = date('Y-m-d');
			$this->Customer_model->update($userId, $formdata);
			$this->session->set_flashdata('success', 'Password is successfully updated');
			$this->load->view('changepassword', $data);
		}
	}

	public function myOrder($userId)
	{
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->model('Order_model');
		$this->load->library('cart');
		$this->load->model('Tags_model');
		$this->load->model('Settings_model');
		$this->load->model('Newsitem_model');
		$this->load->model('Page_model');
		$data['news_list'] = $this->Newsitem_model->GetNewsitem();
		$data['setting_list'] = $this->Settings_model->GetSettings();
		$data['category_list'] = $this->Category_model->GetCategories();
		$data['product_list'] = $this->Product_model->GetProducts();
		$data['order_list'] = $this->Order_model->getOrderByUserId($userId);
		$data['tag_list'] = $this->Tags_model->GetTags();
		$data['setting_list'] = $this->Settings_model->GetSettings();
		$data['page_list'] = $this->Page_model->GetPages();
		// echo "<pre>";
		// print_r($data);
		// die();
		// // die(print_r($data));
		// die(print_r($data['product_detail']));

		$this->load->view('myorder', $data);
	}

	public function sendPassword(){
		$to_email = $this->input->post('email');
		$password = $this->input->post('password');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://webs02.futuresouls.com',
			'smtp_port' => 465,
			'smtp_user' => 'muhammadtalha@eshopperpk.com',
			'smtp_pass' => 'talha112@uetlhr',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
		);


		$this->load->library('email');
		$this->email->initialize($config);

		$from_email = "muhammadtalha@eshopperpk.com";

		//Load email library
		$this->load->library('email');
		$this->email->from($from_email, 'Identification');
		$this->email->to($to_email);
		$this->email->subject('Send Email Codeigniter');
		$this->email->message('Your Password is'. $password);
		//Send mail
		if ($this->email->send())
			$this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
		else
			$this->session->set_flashdata("email_sent", "You have encountered an error");
	}
}
