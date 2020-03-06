@extends('layouts.root')

@section('title', 'Approver Form')

@section('content')
    <div class="container offset-sm-1 col-sm-10 offset-sm-1">
        <div class="card">
            <div class="card-header bg-primary">
              Requestor Details
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 row">
                        <div class="col-sm-4 text-bold">Requestor:</div>
                        <div class="col-sm-8">Joven Codinera</div>
                    </div>
                    <div class="col-6 row">
                        <div class="col-sm-4 text-bold">Material Type:</div>
                        <div class="col-sm-8">Tungsten</div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 mb-2 text-bold">Long Description:</div>
                    <div class="col-12 ml-2">(Primary Component) brand/model/CPU/HDD/memory/opt drive/OS
                        (Secondary Component) wlan/security/camera/screen type & size/software/input devices</div>
                </div>
                <div class="row my-3">
                    <div class="col-12 mb-2 text-bold">Short Description:</div>
                    <div class="col-12 ml-2">brand/model/CPU/HDD/memory/opt drive/OS</div>
                </div>
                <div class="row">
                    <div class="col-6 row">
                        <div class="col-sm-4 text-bold">Mfr Part No:</div>
                        <div class="col-sm-8">PartNo</div>
                    </div>
                    <div class="col-6 row">
                        <div class="col-sm-4 text-bold">Buy Price:</div>
                        <div class="col-sm-8">256.365236</div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6 row">
                        <div class="col-sm-4 text-bold">Date Requested:</div>
                        <div class="col-sm-8">03/06/2020 06:03:02 AM</div>
                    </div>
                    <div class="col-6 row">
                        <div class="col-sm-4 text-bold">Approver Name:</div>
                        <div class="col-sm-8">Joven Codinera</div>
                    </div>
                </div>
            </div>
        </div>
        <form action="" method="POST">
            {{-- Product Manager --}}
            <div class="form-group row">
              <label for="productManager" class="col-sm-3 col-form-label">PRODUCT MANAGER :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="productManager" name="productManager">
              </div>
            </div>

            {{-- Approved --}}
            <div class="form-group row">
              <label for="materialType" class="col-sm-3 col-form-label">Approved :</label>
              <div class="col-sm-9">
                <div class="form-group">
                    <div class="custom-control custom-radio d-inline mr-2">
                      <input class="custom-control-input" type="radio" id="approvedYes" name="approved">
                      <label for="approvedYes" class="custom-control-label">Yes</label>
                    </div>
                    <div class="custom-control custom-radio d-inline">
                      <input class="custom-control-input" type="radio" id="approvedNo" name="approved">
                      <label for="approvedNo" class="custom-control-label">No</label>
                    </div>
                  </div>
              </div>
            </div>

            {{-- Prototype Text --}}
            <div class="form-group row mt-4 ml-0">  
                <label for="prototypeText">Prototype Text :</label>
                <textarea class="form-control mr-3" id="prototypeText" name="prototypeText"></textarea>
            </div>

            {{-- Material Group 1 --}}
            <div class="form-group row">
                <label for="materialType" class="col-sm-3 col-form-label">Material Group 1 :</label>
                <div class="col-sm-9">
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="3">Alabama</option>
                      <option data-select2-id="30">Alaska</option>
                      <option data-select2-id="31">California</option>
                      <option data-select2-id="32">Delaware</option>
                      <option data-select2-id="33">Tennessee</option>
                      <option data-select2-id="34">Texas</option>
                      <option data-select2-id="35">Washington</option>
                  </select>
                </div>
            </div>

            {{-- Material Group 2 --}}
            <div class="form-group row">
                <label for="materialType" class="col-sm-3 col-form-label">Material Group 2 :</label>
                <div class="col-sm-9">
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="3">Alabama</option>
                      <option data-select2-id="30">Alaska</option>
                      <option data-select2-id="31">California</option>
                      <option data-select2-id="32">Delaware</option>
                      <option data-select2-id="33">Tennessee</option>
                      <option data-select2-id="34">Texas</option>
                      <option data-select2-id="35">Washington</option>
                  </select>
                </div>
            </div>

            {{-- Material Group 3 --}}
            <div class="form-group row">
                <label for="materialType" class="col-sm-3 col-form-label">Material Group 3 :</label>
                <div class="col-sm-9">
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="3">Alabama</option>
                      <option data-select2-id="30">Alaska</option>
                      <option data-select2-id="31">California</option>
                      <option data-select2-id="32">Delaware</option>
                      <option data-select2-id="33">Tennessee</option>
                      <option data-select2-id="34">Texas</option>
                      <option data-select2-id="35">Washington</option>
                  </select>
                </div>
            </div>

            {{-- Category Assignment --}}
            <div class="form-group row">
                <label for="categoryAssignment" class="col-sm-3 col-form-label">Category Assignment :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="categoryAssignment" name="categoryAssignment">
                </div>
            </div>

            {{-- Submit Button --}}
            <div>
                <button class="btn btn-info my-4 w-100" type="submit">Request for New Material Group</button>
            </div>
        </form>
        <script>
            $('#summernote').summernote({
                width: 1045
            });
        </script>
    </div>
@endsection