@extends('admin.master')
@section('title')
Inventory|Create
@endsection

@section('body')
 <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Cow</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Admin</a></li>
              <li class="breadcrumb-item">Inventory</li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Animal Basic Information</h6>
                </div>
                <div class="card-body">
                  <form>
                  	<div class="row">
                    <div class="col-lg-6">
                  	<div class="form-group" id="simple-date2">
                     <label for="oneYearView">Date of Birth *:</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" value="01/06/2021" id="oneYearView">
                      </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group" id="simple-date2">
                    <label for="oneYearView">Animal Age (Days) *:</label>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Animal Age"
                      aria-label="Animal Age" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">Days</span>
                    </div>
                  </div>
                  </div>
                   </div>
                   </div>

                   <div class="row">
                    <div class="col-lg-6">
                  	<div class="form-group" id="simple-date2">
                     <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                     </div>

                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group" id="simple-date2">
                    <label for="oneYearView">Animal Age (Days) *:</label>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Animal Age"
                      aria-label="Animal Age" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">Days</span>
                    </div>
                  </div>
                  </div>
                   </div>
                   </div>
                    
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>

              <!-- Form Sizing -->
              <div class="card mb-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sizing</h6>
                </div>
                <div class="card-body">
                  <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code
                      class="highlighter-rouge">.form-control-sm</code>.</p>
                  <p>Example for form general</p>
                  <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
                  <input class="form-control  mb-3" type="text" placeholder="Default input">
                  <input class="form-control form-control-sm  mb-3" type="text" placeholder=".form-control-sm">
                  <p>Example for Select</p>
                  <select class="form-control form-control-lg  mb-3">
                    <option>Large select</option>
                  </select>
                  <select class="form-control mb-3">
                    <option>Default select</option>
                  </select>
                  <select class="form-control form-control-sm mb-3">
                    <option>Small select</option>
                  </select>
                </div>
              </div>

              <!-- Horizontal Form -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Horizontal Form</h6>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
                        <div class="col-sm-9">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">First Radio</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Second Radio</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" name="radioDisabled" id="customRadioDisabled1"
                              class="custom-control-input" disabled>
                            <label class="custom-control-label" for="customRadioDisabled1">Third Radio Disabled</label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <div class="form-group row">
                      <div class="col-sm-3">Checkbox</div>
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
@endsection