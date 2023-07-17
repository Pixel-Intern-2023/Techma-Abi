<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
                <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Employe Data</h5>
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="fw-semibold mb-3"><?=$data['employe']['employe'];?> Employe</h4>
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                    <span class="fs-2 me-1"><?=$data['working']['working'];?></span>
                                    <span class="fs-2">Working</span>
                                </div>
                                <div>
                                    <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                    <span class="fs-2 me-1"><?=$data['fired']['fired'];?></span>
                                    <span class="fs-2">Fired</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="breakup"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
                <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Admin Data</h5>
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="fw-semibold mb-3"><?=$data['admin']['admin'];?> Admin</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="breakup"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
