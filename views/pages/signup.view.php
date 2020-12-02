<div class="row">
    <div class="col-12">
        <div class="border-bottom pt-2 pb-2 mb-2">
            <h2 class="text-center font-weight-light">
                <?=$page_title?>
            </h2>
        </div>
    </div>

    <div class="col-12">

        <div class="row justify-content-center my-4">
            
            <form class="col col-lg-6" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                <div class="form-group">
                    <label for="nameField">Full Name</label>
                    <input type="text" name="name" class="form-control" id="nameField" required>
                </div>
                <div class="form-group">
                    <label for="mobileField">Mobile number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span id="mobileLbl" class="input-group-text d-flex align-items-center font-weight-bold text-success">
                                <img src="https://www.countryflags.io/ng/flat/16.png" alt="Nigeria">
                                +234
                            </span>
                        </div>
                        <input type="number" name="mobile" class="form-control" aria-label="Mobile number" id="mobileField" aria-describedby="mobileLbl">
                    </div>
                    <small class="form-text text-muted">Only write digits example 302258864</small>
                </div>
                <div class="form-group">
                    <label for="mobile2Field">Another mobile number <small class="badge badge-warning">optional</small></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span id="mobile2Lbl" class="input-group-text d-flex align-items-center font-weight-bold text-success">
                                <img src="https://www.countryflags.io/ng/flat/16.png" alt="Nigeria">
                                +234
                            </span>
                        </div>
                        <input type="number" name="mobile2" class="form-control" aria-label="Mobile number" id="mobile2Field" aria-describedby="mobile2Lbl">
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailField">Email address</label>
                    <input type="email" name="email" class="form-control" id="emailField" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="passwordField">Password</label>
                    <input type="password" name="password" class="form-control" id="passwordField" aria-describedby="passwordHelp">
                    <small id="passwordHelp" class="form-text text-muted">Minimum 6 characters</small>
                </div>

                <div class="p-3 mb-5 bg-light rounded">
                    <div class="form-group">
                        <label for="yearsField">When you'll be withdrawing money?</label>
                        <select class="form-control" id="yearsField" aria-describedby="yearsHelp">
                            <?php for ($i = 1; $i < 11;  $i++): ?>
                            <option value="<?=$i?>">In <?=$i?> year<?=$i > 1 ? 's':''?></option>
                            <?php endfor; ?>
                        </select>
                        <small id="yearsHelp" class="form-text alert alert-warning"><strong>Note:</strong> If you withdraw balance before the selected time, you'll be charged with 5% withdraw fees</small>
                    </div>

                    <div class="form-group">
                        <label for="alertsField">How often you'll be receiving alerts?</label>
                        <select class="form-control" id="alertsField" aria-describedby="alertsHelp">
                            <option value="0">No alerts</option>
                            <option value="1">Monthly</option>
                            <option value="2">Yearly</option>
                        </select>
                    </div>
                </div>

                
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        
        </div>


    </div>
</div>

