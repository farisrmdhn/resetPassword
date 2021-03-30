<!-- Flash Message -->
<?php if($this->session->flashdata('no_input')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('no_input').'</p>'; ?>
<?php endif; ?>
<h3><?= $title ?></h3>
<form class="" action="<?php echo base_url(); ?>inbox" method="post">
	<p class="text-red"><?php echo validation_errors(); ?></p>
    <div class="row">
    	<div class="col-md-6">
            <div class="row">
                <div class="form-group col-md-6">
                    <input id="id" class="form-control" type="text" name="id" value="" required="">
                </div>
                <div class="form-group col-md-6">
                    <select class="form-control" name="domain" required="">
                        <option value="sneezetify.win" selected="">@sneezetify.win</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-md-6">
            <input class="btn btn-primary float-right" type="submit" name="submit" value="Add">
</form>
			<span class="btn btn-warning float-right" id="random" style="color: white; margin-right: 10px;">Random</span>
		</div>
	</div>



<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
<!-- Popper.JS -->
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">

    var names = <?php echo json_encode($names); ?>;

    function getRndInteger(min, max) {
      return Math.floor(Math.random() * (max - min + 1) ) + min;
    }

    $(document).ready(function(){
      $("#random").click(function(){
        var num = getRndInteger(0, 99);
        $('#id').val(names[num]["nama"]);
      });
    });

</script>