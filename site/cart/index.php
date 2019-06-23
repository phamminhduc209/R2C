<?=(isset($breadcrumb) && $breadcrumb)?$breadcrumb:''?>
<div class="block container">
  <?php $this->load->view('site/giohang', $this->data)?>
</div>