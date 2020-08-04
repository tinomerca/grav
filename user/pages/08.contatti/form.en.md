---
title: 'Contact Form'
slug: contacts
---

<div class="col_half"> 
    <div class="form-widget">
        <div class="form-result"></div>
        <form class="row" id="template-contactform" action="/canvas/include/form.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
            <div class="form-process"></div>
            <div class="col-4 form-group">
                <label>Name:</label>
                <input type="text" name="template-contactform-nome" id="template-contactform-name" class="form-control required" value="" placeholder="John Doe">
            </div>
            <div class="col-4 form-group">
                <label>Email:</label>
                <input type="email" name="template-contactform-email" id="template-contactform-email" class="form-control required" value="" placeholder="user@company.it">
            </div>
            <div class="col-4 form-group">
                <label>Phone:</label><br>
                <input type="text" name="template-contactform-telefono" id="template-contactform-phone" class="form-control required" value="" placeholder="02-232-2424">
            </div>
            <div class="w-100"></div>
            <div class="col_full form-group">
                <label>Subject:</label><br>
                <input type="text" name="template-contactform-oggetto" id="template-contactform-object" class="form-control" value="" >
            </div>
            <div class="col_full form-group">
                <label>Message:</label>
                <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
            </div>
            <div class="col_full">
                <button type="submit" name="template-contactform-submit" class="button button-3d nomargin">Invia</button>
            </div>
            <div class="col_full hidden">
				<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control" />
			</div>
			<!-- Form Settings -->
            <input type="hidden" name="replyto" value="template-contactform-email">
			<input type="hidden" name="autoresponder" value="true">
			<input type="hidden" name="prefix" value="template-contactform-">
			<input type="hidden" name="subject" value="New message from site">
			<input type="hidden" name="ar_message" value="We have received your Message and will get back to you shortly. Meanwhile, check our Website: http://www.drisaldi.it <br><br>Thank You">
			<input type="hidden" name="ar_subject" value="Thank You for your Email">
			<input type="hidden" name="ar_title" value="Thank You">
			<input type="hidden" name="ar_footer" value="Copyright Drisaldi">
        </form>
    </div>
</div>
<div class="col_half col_last"><div id="mapid" style="height: 300px;width:100%;"></div></div>