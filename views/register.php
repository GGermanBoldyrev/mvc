<h2>Create an account</h2>
<?php $form = \app\core\form\Form::begin("", "post") ?>
    <?php echo $form->field('model', 'attr') ?>
<?php \app\core\form\Form::end() ?>
<!--<form action="" method="">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Firstname</label>
                <input type="text" name="firstname" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>-->