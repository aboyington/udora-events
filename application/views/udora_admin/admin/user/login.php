<div>
   <a class="hiddenanchor" id="signup"></a>
   <a class="hiddenanchor" id="signin"></a>

   <div class="login_wrapper">
     <div class="animate form login_form">
       <section class="login_content">
            <?php echo form_open(NULL, array('class' => 'form-horizontal'))?>
           <h1><?php echo lang('Login')?> </h1>
           <div>
            <div class="padd-alert">
                <?php echo validation_errors() ?>
                <?php if ($this->session->flashdata('message')): ?>
                    <?php echo $this->session->flashdata('message') ?>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')): ?>
                    <p class="label label-important validation"><?php echo $this->session->flashdata('error') ?></p>
                <?php endif; ?>     
                <hr />
            </div>
             <?php echo form_input('username', NULL, 'class="form-control" id="inputUsername" placeholder="'.lang('Username').'"')?>
           </div>
           <div>
             <?php echo form_password('password', NULL, 'class="form-control" id="inputPassword" placeholder="'.lang('Password').'"')?>
           </div>
           <div>
                <button type="submit" class="btn btn-primary"><?php echo lang('Sign in')?></button>
                <button type="reset" class="btn btn-default"><?php echo lang('Reset')?></button>
           </div>
           <div>
             <a class="reset_pass" href="<?php echo site_url('admin/user/forgetpassword')?>">Lost your password?</a>
           </div>
           <div class="clearfix"></div>

           <div class="separator">
             <p class="change_link">New to site?
               <a href="<?php echo site_url('frontend/register')?>" class="to_register"> <?php echo lang_check('Create Account');?> </a>
             </p>

             <div class="clearfix"></div>
             <br />

             <div>
              <img src="<?php echo base_url('adminudora-assets/images/udora_logo_icon.svg') ?>" alt="Udora logo" style="height:40px; margin-bottom: 2em">
               <p>© Udora Technologies | Trademarks and brands are the property of their respective owners.</p>
             </div>
           </div>
            <?php echo form_close()?>
       </section>
     </div>
   </div>
 </div>