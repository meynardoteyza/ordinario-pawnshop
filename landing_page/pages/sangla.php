<style>
    @media(min-width: 576px){
      .float-left-jc{
        float: left;
      }
      .float-right-mey{
        float: right;
      }
    }

    @media(max-width: 576px){
      .btn-small {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
      }
      .margin-small{
        margin: 1rem 0;
      }
    }
</style>
<div class="content">
  <div class="container-fluid">
    <!-- <div class="col-xl-12"> -->
    <!-- <div class="col-xl-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pawn</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Pawn</li>
        </ol>
      </nav>
    </div> -->
    <div class="progress-div">
      <div class="progress mb-4" style="height: 15px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" 
          role="progressbar" style="width: 0%;background-color:#feb81c" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            0%
        </div>
      </div>
      <div class="card">
        <form action="reports/pawn_print.php">
        <section class="batch1">
          <div class="card-header card-header-primary text-center">
            TICKET DETAILS
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-xl-4 col-form-label">PT #:</label>
                  <div class="col-xl-6 pt-2">
                    1
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-xl-4 col-form-label">Transaction Type:</label>
                  <div class="col-xl-6">
                    <select name="transaction_type" id="transaction_type" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="Old">Old</option>
                      <option value="New">New</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-xl-4 col-form-label">Processed By:</label>
                  <div class="col-xl-6 pt-2">
                    Chris Domingo
                  </div>
                </div>
              </div>
              <!-- second column -->
              <div class="col-xl-6">
              <div class="form-group row">
                <label class="col-xl-4">Transaction Date:</label>
                <div class="col-xl-12">
                  <input type="date" name="transaction_date" id="transaction_date" class="form-control">
                </div>
              </div>
                <div class="form-group row mt-3">
                  <label class="col-xl-4">Maturity Date:</label>
                  <div class="col-xl-12">
                    <input type="date" name="maturity_date" id="maturity_date" class="form-control">
                  </div>
                </div>
                <div class="form-group row mt-3">
                  <label class="col-xl-4">Expiration Date:</label>
                  <div class="col-sm-12">
                    <input type="date" name="expiration_date" id="maturity_date" class="form-control">
                  </div>
                </div>
                <div class="form-group row mt-3">
                  <label class="col-xl-4">Auction Date:</label>
                  <div class="col-xl-12">
                    <input type="date" name="auction_date" id="maturity_date" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-right-mey" id="next1"><i class="material-icons">arrow_forward</i></button>
          </div>
        </section>
          
        <!-- Customer Tab -->
        <section class="batch2" style="display:none">
          <div class="card-header card-header-primary text-center">
            CUSTOMER
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Name</label>
                    <select name="customer" id="customer" class="form-control">
                      <option></option>
                      <option value="REGAN INDUSTRIAL SALES INC.">REGAN INDUSTRIAL SALES INC.</option>
                      <option value="SUPREME STEEL PIPE CORP.">SUPREME STEEL PIPE CORP.</option>
                      <option value="KIRIN RESOURCES INC.">KIRIN RESOURCES INC.</option>
                    </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">ID Presented:</label>
                    <select name="transaction_type" id="transaction_type" class="form-control">
                      <option></option>
                      <option value="SSS">SSS</option>
                      <option value="Driver's License">Driver's License</option>
                      <option value="Pag-ibig">Pag-ibig</option>
                      <option value="Postal ID">Postal ID</option>
                      <option value="Passport">Passport</option>
                    </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Country</label>
                  <select class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antarctica"> Antarctica </option>
                    <option value="...">...</option>
                  </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">ID Number:</label>
                  <input type="text" class="form-control" name="id_number" id="id_number">
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="label-floating">ID Image:</label>
                  <div class="col-sm-12">
                    <label class="btn btn-success btn-sm float-left-jc">  
                      <i class="material-icons">arrow_upward</i> Upload Image <input type="file" hidden>
                    </label>  
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-left-jc" id="back1"><i class="material-icons">arrow_back</i></button>
            <button type="button" class="btn btn-primary float-right-mey" id="next2"><i class="material-icons">arrow_forward</i></button>
          </div>
        </section>

        <!-- Item Tab -->
        <section class="batch3" style="display:none">
          <div class="card-header card-header-primary text-center">
            ITEM
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Item Category</label>
                    <select name="item_category" id="item_category" class="form-control">
                      <option></option>
                      <option value="Jewelry">Jewelry</option>
                      <option value="Non-Jewelry">Non-Jewelry</option>
                    </select>     
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Material Item Type Karat</label>
                    <select name="transaction_type" id="transaction_type" class="form-control">
                      <option></option>
                      <option value="SSS">SSS</option>
                      <option value="Driver's License">Driver's License</option>
                      <option value="Pag-ibig">Pag-ibig</option>
                      <option value="Postal ID">Postal ID</option>
                      <option value="Passport">Passport</option>
                    </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Weight (g)</label>
                    <input class="form-control" type="number" name="weight" id="weight" value="0.00">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Rate Appraised Value</label>
                    <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                </div> 
              </div>

              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Description</label>
                    <textarea class="form-control" rows="5" id="description"></textarea> 
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Upload Image</label>
                  <div class="col-sm-6">
                    <label class="btn btn-success btn-sm float-left-jc">  
                      <i class="material-icons">arrow_upward</i> Upload Image <input type="file" hidden>
                    </label>  
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary btn-sm mx-auto">Submit</button>
              <div class="col-sm-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Material Item Type Karat</th>
                      <th>Weight (g)</th>
                      <th>Rate Appraised Value</th>
                    </tr>
                    <tr>
                      <td>Gold</td>
                      <td>5.00</td>
                      <td>1,200.00</td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-left-jc" id="back2"><i class="material-icons">arrow_back</i></button>
            <button type="button" class="btn btn-primary float-right-mey" id="next3"><i class="material-icons">arrow_forward</i></button>
          </div>
        </section>

        <!-- Computation Tab -->
        <section class="batch4" style="display:none">
          <div class="card-header card-header-primary text-center">
            COMPUTATION
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Appraised Value</label>
                    <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Principal</label>
                    <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Other Charges</label>
                    <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Net Proceeds</label>
                    <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Other Charges</label>
                    <select class="form-control" name="other_charges" id="other_charges">
                      <option></option>
                    </select>
                </div>
                <div class="form-group row label-floating">
                  <label class="control-label">Amount</label>
                  <div class="col-sm-3">
                    <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                  </div>
                    <button type="button" class="btn btn-success btn-sm"><i class="material-icons">add</i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="material-icons">remove</i></button>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-left-jc" id="back3"><i class="material-icons">arrow_back</i></button>
            <button type="submit" class="btn btn-primary float-right-mey" id="add_pawn"><i class="material-icons">check</i></button>
          </div>
        </section>
        </form>
      </div>
    </div>
  </div>
</div>