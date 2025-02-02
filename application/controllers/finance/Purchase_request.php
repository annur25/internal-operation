<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase_request extends CI_Controller
{

    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('pdf');
        $this->load->model('finance/Purchase_model', 'purchase');
        $this->load->model('Menus_model','menu');
        
        $empl_id = $this->session->userdata('empl_id');
        if(empty($empl_id)) {
            redirect('/');
        } else {
            $data['empl_id'] = $empl_id;
            $data['menus'] = $this->menu->showId($empl_id, 1);
            $this->load->view('templates/h-io', $data);
            // echo json_encode($data);
        }
    }
    
    public function datas(){
        $data['div'] = ['Client Management', 'Business Development', 'Finance',' IT'];
        $data['status'] = ['Urgent', 'Immediately', 'Can Wait', 'Done'];
        return $data;
    }  

    public function index(){
        $data['purchase'] = $this->purchase->showAll();
        $this->load->view('templates/s-io');
        $this->load->view('finance/purchase-req/index', $data);
        $this->load->view('templates/f-io');
    }

    public function add(){
        $data = $this->datas();

        $this->form_validation->set_rules('purchase_department', 'divison', 'required');
        $this->form_validation->set_rules('purchase_statusrequest', 'status', 'required');
        $this->form_validation->set_rules('purchase_date', 'request date', 'required');
        $this->form_validation->set_rules('purchasedtl_good[]', 'item name', 'required');

        if($this->form_validation->run()==false){
        $this->load->view('templates/s-io');
        $this->load->view('finance/purchase-req/add-purchase', $data);
        $this->load->view('templates/f-io');
        } else {
            $this->save();
        }
    }

    public function save(){

        $query = $this->purchase->getId();  
        if($query->num_rows() <> 0){      
            $data = $query->row();      
            $id = intval($data->kode) + 1;    
        } else {        
            $id = 1;    
        }
        $idmax = str_pad($id, 4, "0", STR_PAD_LEFT); 
        $newid = "PCS-".$idmax;
        
        $config['upload_path']   = './upload/finance/';
        $config['allowed_types'] = 'jpg|jpeg|png|xlsx|xls|doc|docx|pdf';
        $config['max_size']      = 2048;
        $config['file_name']     = strtolower($newid);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('attachment')) {

            // $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $this->upload->display_errors());
            return json_encode($this->upload->display_errors());
        }
        else
        {
            $path = $this->upload->data('orig_name');
        }
        

        $data1 = [
            'purchase_id' => $newid,
            'created_by' => $this->input->post('created_by'),
            'purchase_department' => $this->input->post('purchase_department'),
            'purchase_statusrequest' => $this->input->post('purchase_statusrequest'),
            'purchase_date' => $this->input->post('purchase_date'),
            'purchase_notes' => $this->input->post('purchase_notes'),
            'purchase_lastupdate' => date('Y-m-d H:i:s'),
            'purchase_attachment' => $path
        ];

        $this->purchase->save($data1);
        
        $n = count($this->input->post('purchasedtl_good[]'));
        for ($i=0;$i<$n;$i++){
            $data2 = [
                'purchase_id' => $newid,
                'purchasedtl_good' => $this->input->post('purchasedtl_good')[$i],
                'purchasedtl_amount' => $this->input->post('purchasedtl_amount')[$i],
                'purchasedtl_priceperunit' => $this->input->post('purchasedtl_priceperunit')[$i],
                'purchasedtl_total' => $this->input->post('purchasedtl_total')[$i],
            ];
            $this->purchase->saveDetail($data2);
        }

        $this->session->set_flashdata('success', 'Purchase request have been created');
        redirect('finance/purchase-request/view/'.$newid);
    }

    public function view($id) {
        $data['purchase'] = $this->purchase->showId($id);
        $data['detail'] = $this->purchase->showDetail($id);
        $this->load->view('templates/s-io');
        $this->load->view('finance/purchase-req/view-purchase', $data);
        $this->load->view('templates/f-io');
    }

    public function edit($id) {
        $this->form_validation->set_rules('purchase_department', 'divison', 'required');
        $this->form_validation->set_rules('purchase_statusrequest', 'status', 'required');
        if($this->form_validation->run()==false){
            $data = $this->datas();
            $data['purchase'] = $this->purchase->showId($id);
            $data['detail'] = $this->purchase->showDetail($id);

            $this->load->view('templates/s-io');
            $this->load->view('finance/purchase-req/edit-purchase', $data);
            $this->load->view('templates/f-io');
        } else {
            echo json_encode($this->update($id));
        }
    }

    public function update($id){
        $data = [
            'created_by' => $this->input->post('created_by'),
            'purchase_department' => $this->input->post('purchase_department'),
            'purchase_statusrequest' => $this->input->post('purchase_statusrequest'),
            'purchase_date' => $this->input->post('purchase_date'),
            'purchase_notes' => $this->input->post('purchase_notes'),
            'purchase_lastupdate' => date('Y-m-d H:i:s'),
        ];

        $attachment_name = $this->input->post('attachment_name');
        $attachment_change = $this->input->post('attachment_change');
        if ($attachment_change == "true") {
            unlink('./upload/finance/'.$attachment_name);
            $config['upload_path']   = './upload/finance/';
            $config['allowed_types'] = 'jpg|jpeg|png|xlsx|xls|doc|docx|pdf';
            $config['max_size']      = 2048;
            $config['file_name']     = strtolower($id);

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('attachment')) {

                // $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $this->upload->display_errors());
                return json_encode($this->upload->display_errors());
            }
            else
            {
                $data['purchase_attachment'] = $this->upload->data('orig_name');
            }
        }

        $this->purchase->update($data, $id);
        $this->session->set_flashdata('success', 'Purchase request have been changed');
        redirect('finance/purchase-request/view/'.$id);
    }

    public function addDetail()
    {
        $purchaseId = $this->input->post('purchase_id');
        $data = [
            'purchase_id' => $purchaseId,
            'purchasedtl_good' => $this->input->post('purchasedtl_good'),
            'purchasedtl_amount' => $this->input->post('purchasedtl_amount'),
            'purchasedtl_priceperunit' => $this->input->post('purchasedtl_priceperunit'),
            'purchasedtl_total' => $this->input->post('purchasedtl_total'),
        ];

        $this->purchase->saveDetail($data);
        $this->session->set_flashdata('success', 'Purchase request have been changed');
        redirect('finance/purchase-request/edit/'.$purchaseId);
    }

    public function updateDetail()
    {
        $id = $this->input->post('purchasedtl_id');
        $purchaseId = $this->input->post('purchase_id');
        $data = [
            'purchasedtl_good' => $this->input->post('purchasedtl_good'),
            'purchasedtl_amount' => $this->input->post('purchasedtl_amount'),
            'purchasedtl_priceperunit' => $this->input->post('purchasedtl_priceperunit'),
            'purchasedtl_total' => $this->input->post('purchasedtl_total'),
        ];

        $this->purchase->updateDetail($data, $id);
        $this->session->set_flashdata('success', 'Purchase request have been changed');
        redirect('finance/purchase-request/edit/'.$purchaseId);
    }

    public function deleteDetail($id, $purchaseId)
    {
        $this->purchase->deleteDetail($id);
        $this->session->set_flashdata('success', 'Purchase request have been changed');
        redirect('finance/purchase-request/edit/'.$purchaseId);
    }

    public function show($id){
     $data = $this->purchase->showIdDetail($id); 
     echo json_encode($data);
    }
    
    public function delete($id){
        $this->purchase->delete($id);
        $this->session->set_flashdata('success', 'Purchase request have been changed');
        redirect('finance/purchase-request/');
    }

    public function print($id){
        $data['purchase'] = $this->purchase->showId($id);
        $data['detail'] = $this->purchase->showDetail($id);
        $html = $this->load->view('finance/purchase-req/print-purchase',$data, true);

        $custom = array(0,0,595.28,550.89);
        $this->pdf->createPDF($html, 'Purchase Request - '.$id, false, $custom);
    }
}