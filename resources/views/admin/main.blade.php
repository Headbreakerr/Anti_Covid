<div class="content-wrapper">
  <div class="mt-5"></div>
  <br>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List Of Patient Details</h4>
          <div class="table-responsive">
            <div class="container">
              <table class="table">
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>phone</th>
                  <th>address</th>
                  <th>action</th>
                </tr>
                @foreach($patientdata as $p)
                <tr>
                  <td>{{$p->name}}</td>
                  <td>{{$p->email}}</td>
                  <td>{{$p->phone}}</td>
                  <td>{{$p->address}}</td>
                  <td>
                    <a href="{{ URL::to('/deletead/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger">CANCEL</a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List Of Hospitals Details</h4>
          <div class="table-responsive">
            <div class="container">
              <table class="table">
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>phone</th>
                  <th>address</th>
                  <th>action</th>
                </tr>
                @foreach($hospitaldata as $p)
                <tr>
                  <td>{{$p->name}}</td>
                  <td>{{$p->email}}</td>
                  <td>{{$p->phone}}</td>
                  <td>{{$p->address}}</td>
                  <td>
                    <a href="{{ URL::to('/deletead/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger">CANCEL</a>

                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List Of All Vaccine Details</h4>
          <div class="table-responsive">
            <div class="container">
              <table class="table">
                <tr>
                  <th>name</th>
                  <th>manufacturing</th>
                  <th>action</th>
                </tr>
                @foreach($vaccine as $v)
                <tr>
                  <td>{{$v->vaccinename}}</td>
                  <td>{{$v->vaccinemanufacturing}}</td>
                  <td>
                    <a href="{{ URL::to('/deletead/'. $v->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger">CANCEL</a>

                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List Of All Reports Details</h4>
          <div class="table-responsive">
            <div class="container">
              <table class="table">
                <tr>
                  <th>patient id</th>
                  <th>Blood_Group</th>
                  <th>Fever</th>
                  <th>Flu</th>
                  <th>Appetite</th>
                  <th>Cholestrol</th>
                  <th>BP</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th><a href="{{URL::to('/exceladmin')}}" class="btn btn-warning">Download Excel</a></th>
                </tr>
                @foreach($patientreports as $p)
                <tr>
                  <td>{{$p->patient_name}}</td>
                  <td>{{$p->Blood_Group}}</td>
                  <td>{{$p->Fever}}</td>
                  <td>{{$p->Flu}}</td>
                  <td>{{$p->Appetite}}</td>
                  <td>{{$p->Cholestrol}}</td>
                  <td>{{$p->BP}}</td>
                  <td>{{$p->status}}</td>
                  <td>
                    <a href="{{ URL::to('/deletead/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger">CANCEL</a>

                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List Of All Book Appointments Details</h4>
          <div class="table-responsive">
            <div class="container">
              <table class="table">
                <tr>
                  <th>Name</th>
                  <th>Hospital Name</th>
                  <th>Vaccine Name</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Massage</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach($bookdetails as $p)
                <tr>
                  <td>{{$p->first_name}}</td>
                  <td>{{$p->hospitalname}}</td>
                  <td>{{$p->vaccinename}}</td>
                  <td>{{$p->phone}}</td>
                  <td>{{$p->date}}</td>
                  <td>{{$p->time}}</td>
                  <td>{{$p->massage}}</td>
                  <td>{{$p->status}}</td>
                  <td>
                    <a href="{{ URL::to('/deletead/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger">CANCEL</a>

                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">To do list</h4>
          <div class="add-items d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="enter task.." />
            <button class="add btn btn-primary todo-list-add-btn">
              Add
            </button>
          </div>
          <div class="list-wrapper">
            <ul class="d-flex flex-column text-white todo-list todo-list-custom">
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" />
                    Create E-Project
                  </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" />
                    Finish Front-End
                  </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" />
                    Finish Back-End
                  </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li class="completed">
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked />
                    Prepare for Presentation
                  </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" />
                    Party Hard
                  </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Visitors by Countries</h4>
          <div class="row">
            <div class="col-md-5">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <i class="flag-icon flag-icon-us"></i>
                      </td>
                      <td>USA</td>
                      <td class="text-right"> 1500 </td>
                      <td class="text-right font-weight-medium"> 56.35% </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="flag-icon flag-icon-de"></i>
                      </td>
                      <td>Germany</td>
                      <td class="text-right"> 800 </td>
                      <td class="text-right font-weight-medium"> 33.25% </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="flag-icon flag-icon-au"></i>
                      </td>
                      <td>Australia</td>
                      <td class="text-right"> 760 </td>
                      <td class="text-right font-weight-medium"> 15.45% </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="flag-icon flag-icon-gb"></i>
                      </td>
                      <td>United Kingdom</td>
                      <td class="text-right"> 450 </td>
                      <td class="text-right font-weight-medium"> 25.00% </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="flag-icon flag-icon-ro"></i>
                      </td>
                      <td>Romania</td>
                      <td class="text-right"> 620 </td>
                      <td class="text-right font-weight-medium"> 10.25% </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="flag-icon flag-icon-br"></i>
                      </td>
                      <td>Brasil</td>
                      <td class="text-right"> 230 </td>
                      <td class="text-right font-weight-medium"> 75.00% </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-7">
              <div id="audience-map" class="vector-map"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>