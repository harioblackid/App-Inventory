<div class="row" style="margin-top:10%;">
    <div class="container">
        <!--Form Login-->
        <form method="POST" action="<?= base_url('auth'); ?>">
            <div class="col s12 m12 l6 offset-l3 card-panel z-depth white">
                <div class="card-title center">
                    <h4>Log-in</h4>

                    <?= $this->session->flashdata('message'); ?>
                </div>

                <!--input text nama pengguna-->
                <div class="col s12 m12 l12 input-field e-input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="email" id="icon_prefix" class="validate">
                    <label for="icon_prefix">Username</label>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <!--input text password-->
                <div class="col s12 m12 l12 input-field e-input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="icon_prefix" class="validate">
                    <label for="icon_prefix">Kata Sandi</label>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <!--Button-->
                <div class="row">
                    <div class="col l12 center">
                        <button class="btn red block"> Masuk </button>
                    </div>
                </div>

            </div>
        </form>
    </div>      
</div>
