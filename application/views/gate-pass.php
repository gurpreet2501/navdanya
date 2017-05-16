<? $this->load->view('admin/partials/header') ?>

<div class="row">
  <div class="col-lg-12 text-center">
    <?php $this->load->view('choice/material-in-out-choice') ?>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <?php $this->load->view('choice/material-in-item-choice') ?>
  </div>
  <div class="col-lg-8">
    <?php $this->load->view('choice/material-out-item-choice') ?>
  </div>
</div>
<? $this->load->view('admin/partials/footer') ?>