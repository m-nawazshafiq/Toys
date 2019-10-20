<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function _Contructor()
    {
        parent::__construct();
    }

    public function signup()
    {
        $this->load->model('Customer_model');
        $this->load->model('Product_model');
        $this->load->model('Category_model');

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customer.EmailAddress]');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required|matches[pass]');


        $this->form_validation->set_message('required', 'Field required !');
        $this->form_validation->set_message('is_unique', 'Email already exist!');
        $this->form_validation->set_message('valid_email', 'Invaid Email');
        $this->form_validation->set_message('matches', 'Password does not match!');
        $this->form_validation->set_message('min_length', 'Short password(minimum 8 charecters)!');
        $this->form_validation->set_message('regex_match', 'Invalid number');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/register', $data);
        } else {
            $user['firstName'] = $this->input->post('firstname');
            $user['lastName'] = $this->input->post('lastname');
            $user['EmailAddress'] = $this->input->post('email');
            $user['Password'] = $this->input->post('pass');
            $user['contact'] = $this->input->post('contact');
            $user['CreatedBy'] = '1';
            $user['CreatedDate'] = date('Y-m-d');
            if (!$this->Customer_model->addCustomer($user)) {
                print_r("No");
            } else {
                redirect(base_url() . 'User/profile/' . $this->session->userid);
            }
        }
    }

    public function login()
    {
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
            $this->load->view('user/login', $data);
        } else {
            $result = $this->Customer_model->login();

            if ($result == FALSE) {
                $this->session->set_flashdata('fail', 'Incorrect email or password');
                $this->session->set_flashdata('dbError', $this->input->post('email'));
                redirect(base_url() . 'User/login');
            } else {
                redirect(base_url() . 'User/profile/' . $this->session->userid);
            }
        }
    }

    public function logout()
    {
        $this->load->library('cart');
        $unsetArr = array('sessionid', 'userid', 'userName', 'email', 'password', 'contact');
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

    public function profile($userId)
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');

        $data['customer'] = $this->Customer_model->getCustomerById($userId);
        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();
        $data['billingdetail'] = $this->Customer_model->getBillingDetail($userId);
        $data['id']=$userId;

        $this->load->view('user/profile', $data);
    }

    public function editPersonalInfo($id)
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');
        $this->load->library('form_validation');

        $data = array();
        $data['viewType'] = "profile";
        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();
        $data['id'] =$id;
        $customer = $this->Customer_model->getCustomerById($id);

        $data['customer'] = $customer[0];

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');

        if ($this->form_validation->run() == TRUE) {
            $formdata['firstName'] = $this->input->post('firstname');
            $formdata['lastName'] = $this->input->post('lastname');
            $formdata['EmailAddress'] = $this->input->post('email');
            $formdata['contact'] = $this->input->post('contact');
            $this->Customer_model->update($id, $formdata);
            redirect(base_url() . 'User/profile/' . $id);
        } else {
            $this->load->view('user/editprofile', $data);
        }
    }



    public function editNewsletter($id)
    { }

    public function editShippingAddress($id)
    { }

    public function editBillingAddress($id)
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');
        $this->load->library('form_validation');

        $data = array();
        $data['viewType'] = "billingAddress";
        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

        $customerBillingDetail = $this->Customer_model->getBillingDetail($id);


        $data['id'] = $id;

        $data['customer'] = $customerBillingDetail[0];

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');

        if ($this->form_validation->run() == TRUE) {
            $formdata['firstName'] = $this->input->post('firstname');
            $formdata['lastName'] = $this->input->post('lastname');
            $formdata['EmailAddress'] = $this->input->post('email');
            $formdata['contact'] = $this->input->post('contact');
            $this->Customer_model->update($id, $formdata);
            redirect(base_url() . 'User/profile/' . $id);
        } else {
            $this->load->view('user/editprofile', $data);
        }
    }

    public function addBillingAddress($id)
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('address2', 'Address2', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('postcode', 'PostCode/ZIP', 'required');
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();
        $data['countries'] = $this->Customer_model->getCountries();
        $data['id'] = $id;
        if ($this->form_validation->run() == TRUE) {
            $form_data['firstname'] = $this->input->post('firstname');
            $form_data['lastname'] = $this->input->post('lastname');
            $form_data['company'] = $this->input->post('company');
            $form_data['phone'] = $this->input->post('contact');
            $form_data['address1'] = $this->input->post('address1');
            $form_data['address2'] = $this->input->post('address2');
            $form_data['city'] = $this->input->post('city');
            $form_data['country'] = $this->input->post('country');
            $form_data['postcode'] = $this->input->post('postcode');
            $form_data['region'] = $this->input->post('region');
            $form_data['email'] = $this->input->post('email');
            $form_data['userid'] = $id;
            $this->Customer_model->saveBillingDetail($form_data);
            redirect(base_url()."User/profile/".$id);
        } else {
            $this->load->view('user/addAddress', $data);
        }
    }

    public function getStates()
    {
        $json = array();
        $this->load->model('Customer_model');
        $json = $this->Customer_model->getStates($this->input->post('countryID'));
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}
