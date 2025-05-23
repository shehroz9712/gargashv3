<form action="{{ route('user.submit_enquiry') }}" method="POST" class="form-wrap form-validate" id="serviceRequestForm">
    @csrf
    <div class="form-bg from-wrapper radius-33 bg-img-cover img-img-no-repeat w-100 position-center">

        {{-- Hidden Fields --}}
        <input type="hidden" name="url" value="{{ url()->current() }}">
        <input type="hidden" name="device_type" id="device_type">
        <input type="hidden" name="ip_address" id="ip_address">

        <div class="mb-3 form-group">
            <i class="fa-solid fa-user icon"></i>
            <input type="text" class="form-control" placeholder="Name" name="user_name" required minlength="3"
                maxlength="50" pattern="[A-Za-z ]+">
        </div>

        <div class="mb-3 form-group">
            <i class="fa-solid fa-phone icon"></i>
            <input type="tel" class="form-control" name="user_phone_number" required
                placeholder="(XXX) XXX-XXXX" maxlength="14">
        </div>

        <div class="mb-3 form-group">
            <i class="fa-solid fa-envelope icon"></i>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>

        <div class="mb-3 form-group">
            <i class="fa-solid fa-car icon"></i>
            <input type="text" class="form-control" placeholder="Make" name="make">
        </div>

        <div class="mb-3 form-group">
            <i class="fa-solid fa-car-side icon"></i>
            <input type="text" class="form-control" placeholder="Model" name="model">
        </div>

        <div class="mb-3 form-group">
            <i class="fa-solid fa-tools icon"></i>
            <select class="form-select" name="service" required>
                <option disabled selected value="">Select Services</option>
                <option value="Auto-Spa">Auto Spa</option>
                <option value="Car-Inspection">Car Inspection</option>
                <option value="Car-Wrapping">Car Wrapping</option>
                <option value="Ceramic">Ceramic</option>

                <option value="Electric-Repair">Electric Repair</option>
                <option value="Extended-Warranty">Extended Warranty</option>
                <option value="General-Repair">General Repair</option>
                <option value="Major">Major Services</option>
                <option value="Minor">Minor Services</option>

                <option value="car-recovery">Car Recovery</option>
                <option value="Tinting">Tinting</option>
                <option value="Others">Others</option>
            </select>
            <span style="color: red;" id="serviceError"></span>
        </div>

        <div class="mb-3 form-group">
            <i class="fa-solid fa-map-marker-alt icon"></i>
            <input type="text" class="form-control" placeholder="Location" name="location">
        </div>

    </div>
    <div class="form-btn-wrap text-center">
        <button type="submit" class="btn radius-100 text-center">
            <i class="fa-solid fa-angle-right"></i>
        </button>
    </div>
</form>
