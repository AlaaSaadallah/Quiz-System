<!-- view model answer -->
<!-- form to write the question and the choices and detrmine the correct answer -->
<link rel="stylesheet" href="dashboardTemplate/dist/assets/vendors/choices.js/choices.min.css" />
<h1>{{Quiz name}}</h1>
<form>
<div class="card">
    <div class="card-body">
    <div class="form-group row align-items-center">
      
   
                                            <div class="col-md-6">
                                            <!-- <div class="form-group row align-items-center"> -->
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Grade:</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                <div class="form-group">
                                                    <select class="choices form-select multiple-remove" 
                                                        multiple="multiple" disabled>
                                                        <optgroup label="Figures">
                                                            <option value="romboid">Romboid</option>
                                                            <option value="trapeze" selected>Trapeze</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </optgroup>
                                                        <optgroup label="Colors">
                                                            <option value="red">Red</option>
                                                            <option value="green">Green</option>
                                                            <option value="blue" selected>Blue</option>
                                                            <option value="purple">Purple</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
    </div>
        <div class="form-group with-title mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
            <label>Question</label>
        </div>

        <div class="input-group">
            <div class="input-group-text">
                <div class="form-check form-check-success">

                    <input class="form-check-input" name="Success" id="Success" type="radio" value="" aria-label="Radio button for following text input" disabled>
                </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with radio button" disabled>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-text">
                <div class="form-check form-check-success">

                    <input class="form-check-input" name="Success" id="Success" type="radio" value="" aria-label="Radio button for following text input" disabled>
                </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with radio button" disabled>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-text">
                <div class="form-check form-check-success">

                    <input class="form-check-input" name="Success" id="Success" type="radio" value="" aria-label="Radio button for following text input" disabled>
                </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with radio button" disabled>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-text">
                <div class="form-check form-check-success">

                    <input class="form-check-input" name="Success" id="Success" type="radio" value="" aria-label="Radio button for following text input" disabled>
                </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with radio button" disabled>
        </div>
    </div>
</div>

</form>
<script src="dashboardTemplate/dist/assets/vendors/choices.js/choices.min.js"></script>
<script src="dashboardTemplate/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="dashboardTemplate/dist/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Include Choices JavaScript -->
    <!-- <script src="assets/vendors/choices.js/choices.min.js"></script> -->

    <script src="dashboardTemplate/dist/assets/js/main.js"></script>
