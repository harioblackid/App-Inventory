<div class="row" style="margin-top:10%;">
    <div class="container">
        <!--Form Login-->
        <form method="POST" action="<?= base_url('auth/registration'); ?>">
            <div class="col s12 m12 l6 offset-l3 card-panel z-depth white">
                <div class="card-title center">
                    <h4>Account Registration</h4>

                    <?= $this->session->flashdata('message'); ?>
                </div>

                <!--input text nama pengguna-->
                <div class="col s12 m12 l12 input-field e-input-field">
                    <i class="material-icons prefix">contacts</i>
                    <input type="text" name="name" id="name" class="validate" value="<?= set_value('name'); ?>">
                    <label for="name">Full Name</label>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="col s12 m12 l12 input-field e-input-field">
                    <i class="material-icons prefix">alternate_email</i>
                    <input type="text" name="email" id="email" class="validate" value="<?= set_value('email'); ?>">
                    <label for="email">Email</label>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <!--input text password-->
                <div class="col s12 m12 l12 input-field e-input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password1" id="password1" class="validate">
                    <label for="password1">Password</label>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="col s12 m12 l12 input-field e-input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password2" id="password2" class="validate">
                    <label for="password2">Repeat Password</label>
                </div>

                <!--Button-->
                <div class="row">
                    <div class="col s12 m12 l12 center">
                        <input name="login" type="submit" value="Create Account" class="modal-action modal-close waves-effect waves-light btn red darken-2">
                    </div>
                </div>

            </div>
        </form>
    </div>      
</div>

