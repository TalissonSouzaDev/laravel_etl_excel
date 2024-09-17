@include('components.header.index')

<div class="card card-raised border-start border-primary border-4">
    <div class="card-body px-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="me-2">
                <div class="display-5">101.1K</div>
                <div class="card-text">Downloads</div>
            </div>
            <div class="icon-circle bg-primary text-white"><i class="material-icons">download</i></div>
        </div>
        <div class="card-text">
            <div class="d-inline-flex align-items-center">
                <i class="material-icons icon-xs text-success">arrow_upward</i>
                <div class="caption text-success fw-500 me-2">3%</div>
                <div class="caption">from last month</div>
            </div>
        </div>
    </div>
</div>


<div class="card card-raised border-start border-primary border-4">
    <div class="card-body px-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="me-2">
                <div class="display-5">101.1K</div>
                <div class="card-text">Downloads</div>
            </div>
            <div class="icon-circle bg-primary text-white"><i class="material-icons">download</i></div>
        </div>
        <div class="card-text">
            <div class="d-inline-flex align-items-center">
                <i class="material-icons icon-xs text-success">arrow_upward</i>
                <div class="caption text-success fw-500 me-2">3%</div>
                <div class="caption">from last month</div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-4 mb-5">
                                <div class="card card-raised h-100">
                                    <div class="card-header bg-transparent px-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-4">
                                                <h2 class="card-title mb-0">Segments</h2>
                                                <div class="card-subtitle">Revenue sources</div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-lg btn-text-gray btn-icon me-n2 dropdown-toggle mdc-ripple-upgraded" id="segmentsDropdownButton" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="--mdc-ripple-fg-size: 28px; --mdc-ripple-fg-scale: 2.7815089640681627; --mdc-ripple-fg-translate-start: 18.015625px, 4px; --mdc-ripple-fg-translate-end: 10px, 10px;"><i class="material-icons">more_vert</i></button>
                                                <ul class="dropdown-menu" aria-labelledby="segmentsDropdownButton" style="">
                                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Action</a></li>
                                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Another action</a></li>
                                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Something else here</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Separated link</a></li>
                                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                            <div class="w-100" style="max-width: 20rem"><canvas id="myPieChart" width="745" height="745" style="display: block; box-sizing: border-box; height: 284px; width: 284px;"></canvas></div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent position-relative ripple-gray mdc-ripple-upgraded">
                                        <a class="d-flex align-items-center justify-content-end text-decoration-none stretched-link text-primary" href="#!">
                                            <div class="fst-button">Open Report</div>
                                            <i class="material-icons icon-sm ms-1">chevron_right</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

@include('components.footer.index')
