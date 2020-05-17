@if(auth()->user()->profile_picture !== 'uploads/drivers/default.png')
    <div class="col-md-6" >
        <div class="card border-0 bg-card-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Completed Trips </h5>
                        <span class="h2 font-weight-bold mb-0 text-white">N/A</span>
                    </div>
                    <div class="col-auto">
                        <div class="card-icon">
                            <i class="fas fa-route"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> N/A %</span>
                    <span class="text-nowrap text-light">Since last month</span>
                </p>
            </div>
        </div>
    </div>
@else
    <div class="col-md-6" >
        <div class="card border-0 bg-card-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Profile image</h5>
                        <h5 class="text-nowrap text-black-50 mb-3">Set your profile image</h5>
                        <form enctype="multipart/form-data" method="POST" action="{{ route('driver.image') }}">
                            @csrf
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="image-input" id="profile_picture" name="image" lang="en">
                                    <label class="custom-image-label" for="profile_picture"></label>
                                </div>
                                <div class="input-group-append">
                                    <button class="input-group-text" type="submit">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <div class="card-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="col-md-6" >
    <div class="card border-0 bg-card-pink">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0 text-white">Driver Reviews</h5>
                    <span class="h2 font-weight-bold mb-0 text-white">N/A</span>
                </div>
                <div class="col-auto">
                    <div class="card-icon">
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
                <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> N/A %</span>
                <span class="text-nowrap text-light">Since last month</span>
            </p>
        </div>
    </div>
</div>
