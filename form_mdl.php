<div class="modal fade" id="sendLead_mdl" tabindex="-1" role="dialog">
      <div class="listing-modal-1 modal-dialog modal-md modal-dialog-centered ">
            <div class="modal-content">
                  <div class="modal-header" id="mdl_header_bg">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">
                              
                        </h4>
                  </div>
                  <div class="modal-body ">
                        <form class="row inquire_form" id="form_mdl" onsubmit="doSend(event, '#form_mdl');">
                              <div class="col-12 ">
                                    <h3 id="mdl_header_title"><?= __('learn_more_about_this_property') ?></h3>
                                    <div><input type="text" onblur="chk(this, 'isEmpty')" name="name" id="name" placeholder="<?= __('name') ?>" /></div>
                                    <div class="inline_input" onclick="openMenu('#countriesList')">
                                          <img src="img/png100px/tr.png" title="Turkey" alt="TR" id="countryImg"/>
                                          <input type="tel" name="zip" id="zip" value="---"/>
                                    </div>
                                    <div><input type="tel" maxlength="11" class="padding_left100px" onfocus="openMenu('#countriesList','#form_mdl #zip')" onblur="chk(this, 'isPhone')" name="phone" id="phone" placeholder="<?= __('phone') ?>" /></div>
                                    <div><input type="email" onblur="chk(this, 'isEmail')" name="email" id="email" placeholder="<?= __('email') ?>" /></div>
                                    <div><button class="butn butn-red" id="mdl_btn"></button></div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>