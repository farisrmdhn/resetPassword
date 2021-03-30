<div class="row">
    <p><strong><?= $title ;?></strong> : <?php echo $id.'@'.$domain; ?></p>
</div>
<div class="row" style="border-top: 1px solid #ddd;">
    <div class="col-md-3" style="border-right: 1px solid #ddd; margin-top: 10px;min-height: 1000px;">
        <?php foreach(array_reverse($filtered_mails) as $mail):?>
            <div class="row">
                <div class="email_list" id="<?php echo $mail->id; ?>" onclick="view(<?php echo $mail->id; ?>)">
                    <span  class="name"><strong><?php echo $mail->from_name?></strong></span>
                    <span class="email"><small><?php echo $mail->from_address?></small></span>
                    <span class="subject"><?php echo $mail->subject?></span>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div class="col-md-9" style="background-color: white;">
        <div id="viewport" style="text-align: center; padding: 25px 10px;">
            <img src="<?php echo base_url(); ?>assets/img/mail.png" width="200" style="margin-top: 100px;">
            <p style="margin-top: 10px; color: grey;">Select mail to view here</p>
        </div>
    </div>
</div>


<script type="text/javascript">
    var filtered_mails = <?php echo json_encode($filtered_mails); ?>;

    function view(id){
        $(".email_list").css("background-color", "#ffffff");
        $("#"+id).css("background-color", "#ddd");
        $("#viewport").css("text-align", "left");
        if(!filtered_mails[id]["text_html"]){
            filtered_mails[id]["text_html"] = filtered_mails[id]["text_plain"]
        }
        $("#viewport").html(
                "<h4>" + filtered_mails[id]["subject"] + "</h4>" +
                "<p>from : "+ filtered_mails[id]["from_name"] + " &lt" + filtered_mails[id]["from_address"] + "&gt</p>" +
                "<small>"+ filtered_mails[id]["date"] +"</small>" +
                "<div style='border-top: 1px solid #ddd'>" + filtered_mails[id]["text_html"] + "</div>"
            );
    }
</script>